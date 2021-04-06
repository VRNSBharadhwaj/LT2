<?php

include("../config/configure.php");
if (isset($_POST['user_sign_up'])) {
    $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
    $middle_name = htmlentities(mysqli_real_escape_string($con, $_POST['middle_name']));
    $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
    $city = htmlentities(mysqli_real_escape_string($con, $_POST['city']));
    $state = htmlentities(mysqli_real_escape_string($con, $_POST['state']));
    $zipcode = htmlentities(mysqli_real_escape_string($con, $_POST['zipcode']));
    $user_email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
    $user_email1 = htmlentities(mysqli_real_escape_string($con, $_POST['user_email1']));
    $user_birthday = htmlentities(mysqli_real_escape_string($con, $_POST['user_birthday']));
    $user_phone = htmlentities(mysqli_real_escape_string($con, $_POST['user_phone']));
    $user_phone1 = htmlentities(mysqli_real_escape_string($con, $_POST['user_phone1']));
    $biodata = htmlentities(mysqli_real_escape_string($con, $_POST['biodata']));
    $user_pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
    $user_pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass1']));
    // $age = 80;


    $bday = new DateTime($user_birthday);
    $today = new Datetime(date('y-m-d'));
    $diff = $today->diff($bday);
    $age = $diff->y;
    // form validation
    if($age <= 0)
    {
        echo "<script>alert('Please valid date of birth')</script>";
        exit();
    }
    if (strlen($zipcode) != 6) {
        echo "<script>alert('Please Enter 6 digit zipcode')</script>";
        exit();
    }
    if (strlen($user_phone) != 10) {
        echo "<script>alert('Please Enter 10 digit phoneNumber')</script>";
        exit();
    }
    if (strlen($user_phone1) > 0 && strlen($user_phone1) != 10) {
        echo "<script>alert('Please Enter 10 digit alternate phoneNumber')</script>";
        exit();
    }
    if ($user_email1 != $user_email) {
        echo "<script>alert('Email did not match')</script>";
        exit();
    }
    if ($user_pass != $user_pass1) {
        echo "<script>alert('Password did not match')</script>";
        exit();
    }


    $check_email = "select * from users where email = '$user_email'";
    $run_check_email = mysqli_query($con, $check_email);
    $rows = mysqli_num_rows($run_check_email);
    if ($rows > 0) {
        echo "<script>alert('This email already taken')</script>";
        exit();
    }

    $insert = "insert into users (first_name, middle_name, last_name, city, state, zipcode, email, dob, biodata, password, age)
    values('$first_name', '$middle_name', '$last_name', '$city', '$state', '$zipcode', '$user_email', '$user_birthday', '$biodata', '$user_pass', $age) ";

    $insert_query = mysqli_query($con, $insert);
    if ($insert_query) {
        echo "<script>alert('$first_name, your registration is completed')</script>";
    } else {
        echo "<script>alert('Bad Luck')</script>";
        exit();
    }

    $select_id = "SELECT MAX(user_id) from users";
    $query = mysqli_query($con, $select_id);
    $row = mysqli_fetch_array($query);
    $val = $row[0];

    $insert_phone = "INSERT INTO phone (user_id, number) VALUES ('$val', '$user_phone')";
    $query = mysqli_query($con, $insert_phone);


    if (strlen($user_phone1) == 10) {
        $insert_phone1 = "INSERT INTO phone (user_id, number) VALUES ('$val', '$user_phone1')";
        $query = mysqli_query($con, $insert_phone1);
    }
}
