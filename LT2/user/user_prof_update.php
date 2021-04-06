<!DOCTYPE html>
<html>
<?php session_start();
include("user_header.php");
include("../config/configure.php")
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    form {
        max-width: 1400px;
        margin: auto;
        border: 5px solid violet;
        padding-top: 10px;
        margin-top: 30px;
        border-radius: 30px;
        padding: 40px;
    }

    .btn {
        max-width: 120px;
        margin: auto;

    }
</style>

<?php
$email = $_SESSION['email'];
$select = "SELECT * FROM users WHERE email = '$email'";
$run = mysqli_query($con, $select);
$row = mysqli_fetch_array($run);

$first_name = $row['first_name'];
$middle_name = $row['middle_name'];
$last_name = $row['last_name'];
$city  = $row['city'];
$state = $row['state'];
$zipcode = $row['zipcode'];
$email = $row['email'];
$dob = $row['dob'];
$biodata = $row['biodata'];
$password = $row['password'];

?>


<body style="background-image: url('../images/MegaTron.jpg')">

    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <center>
                <h2 style="margin-bottom:20px">Edit Your Profile</h2>
            </center>
            <hr>
            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">First Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="first_name" class="form-control" value='<?php echo "$first_name" ?>' required>
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Middle Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="middle_name" class="form-control" value='<?php echo "$middle_name" ?>'>
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Last Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="last_name" class="form-control" value='<?php echo "$last_name" ?>' required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">City</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="city" class="form-control" value='<?php echo "$city" ?>' required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">State</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="state" class="form-control" value='<?php echo "$state" ?>' required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">ZipCode</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="zipcode" class="form-control" value='<?php echo "$zipcode" ?>' required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Gmail</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" id="firstName" name="user_email" class="form-control" value='<?php echo "$email" ?>' required disabled>
                </div>

            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Date of Birth</label>
                </div>

                <div class="col-sm-2">
                    <input type="date" id="firstName" name="user_birthday" class="form-control" value=' <?php echo "$dob" ?>' required disabled>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="user_pass" class="form-control" value='<?php echo "$password" ?>' required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Confirm Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="user_pass1" class="form-control" value='<?php echo "$password" ?>' required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Bidata</label>
                </div>

                <div class="col-sm-8">
                    <textarea name="biodata" id="" cols="75" rows="8"><?php echo "$biodata" ?></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
            <?php
            include("../config/configure.php");
            if (isset($_POST['update'])) {
                $user_id = $_GET['user_id'];
                $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
                $middle_name = htmlentities(mysqli_real_escape_string($con, $_POST['middle_name']));
                $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
                $city = htmlentities(mysqli_real_escape_string($con, $_POST['city']));
                $state = htmlentities(mysqli_real_escape_string($con, $_POST['state']));
                $zipcode = htmlentities(mysqli_real_escape_string($con, $_POST['zipcode']));
                $biodata = htmlentities(mysqli_real_escape_string($con, $_POST['biodata']));
                $user_pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
                $user_pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass1']));

                if (strlen($zipcode) != 6) {
                    echo "<script>alert('Please Enter 6 digit zipcode')</script>";
                    exit();
                }

                if ($user_pass != $user_pass1) {
                    echo "<script>alert('Password did not match')</script>";
                    exit();
                }


                $update = "UPDATE users set first_name='$first_name', middle_name = '$middle_name',  last_name='$last_name', city='$city',
                 state ='$state' , zipcode='$zipcode', biodata='$biodata', password='$user_pass' WHERE user_id='$user_id'";

                $update_query = mysqli_query($con, $update);
                if ($update_query) {
                    echo "<script>alert('$first_name, updated')</script>";
                    echo "<script>window.open('user_prof_update.php?user_id=$user_id', '_self')</script>";
                } else {
                    echo "<script>alert('Bad Luck')</script>";
                    exit();
                }
            } ?>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>