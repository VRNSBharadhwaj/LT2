<?php

include("../config/configure.php");
if (isset($_POST['new_booking'])) {
    $visitors = htmlentities(mysqli_real_escape_string($con, $_POST['visitors']));
    $room_no = htmlentities(mysqli_real_escape_string($con, $_POST['room_no']));
    $purpose = htmlentities(mysqli_real_escape_string($con, $_POST['purpose']));
    $start_date = htmlentities(mysqli_real_escape_string($con, $_POST['start_date']));
    $end_date = htmlentities(mysqli_real_escape_string($con, $_POST['end_date']));
    // $age = 80;


    $start_day = new DateTime($start_date);
    $end_day = new DateTime($end_date);
    $today = new DateTime(date('y-m-d'));
    $diff = $start_day->diff($today);
    $age = $diff->d;
    $days = $end_day->diff($start_day);
    $dy = $days->d;
    // form validation
    if(($age <= 0)||($dy <= 0))
    {
        echo "<script>alert('Please valid dates')</script>";
        exit();
    }


    // $check_email = "select * from users where email = '$user_email' and user_type != 'admin'";
    // $run_check_email = mysqli_query($con, $check_email);
    // $rows = mysqli_num_rows($run_check_email);
    // if ($rows > 0) {
    //     echo "<script>alert('This email already taken')</script>";
    //     exit();
    // }

    // $select_id = "SELECT count(*) from booking where (('$start_day'->diff(new DateTime(booking.start_date)))->d) >= 0 and 
    //                                                  ((new DateTime(booking.end_date)->diff('$end_day'))->d) >= 0 and room_no = 1";
    // $query = mysqli_query($con, $select_id);
    // $row = mysqli_fetch_array($query);
    // $room_1 = $row[0];

    // $insert = "insert into users (first_name, middle_name, last_name, city, state, zipcode, email, dob, biodata, password, age)
    // values('$first_name', '$middle_name', '$last_name', '$city', '$state', '$zipcode', '$user_email', '$user_birthday', '$biodata', '$user_pass', $age) ";

    $insert = "insert into booking (user_id,start_date,end_date,room_no,visitor_count,purpose)
    values('$user_id', '$start_date', '$end_date', '$room_no', '$visitors', '$purpose') ";

    $insert_query = mysqli_query($con, $insert);
    if ($insert_query) {
        echo "<script>alert('$first_name, your booking is completed check your status in bookings')</script>";
    } else {
        echo "<script>alert('Bad Luck')</script>";
        exit();
    }

    // $select_id = "SELECT MAX(user_id) from users";
    // $query = mysqli_query($con, $select_id);
    // $row = mysqli_fetch_array($query);
    // $val = $row[0];

    // $insert_phone = "INSERT INTO phone (user_id, number) VALUES ('$val', '$user_phone')";
    // $query = mysqli_query($con, $insert_phone);


    // if (strlen($user_phone1) == 10) {
    //     $insert_phone1 = "INSERT INTO phone (user_id, number) VALUES ('$val', '$user_phone1')";
    //     $query = mysqli_query($con, $insert_phone1);
    // }
}
