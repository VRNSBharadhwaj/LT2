<!DOCTYPE html>
<html>
<?php
session_start();
include("../config/configure.php");

$user_email = $_SESSION['email'];
$select_mail = "SELECT * FROM users WHERE email = '$user_email'";
$query = mysqli_query($con, $select_mail);
$row = mysqli_fetch_array($query);
$user_id = $row['user_id'];
//$val = $row['user_type'];

// if ($val == 'user') {
//     echo "<div class='red'>You don't have contribute permissions</div>
//     <a class='red' href='user_home.php'>Return to Home</a>";
// }
?>

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">

    <style>
        .margin {
            padding: 10px;
            margin-top: 40px;
            margin-left: 50px;
        }

        .first {
            padding: 10px;
            margin-left: 60px;
            margin-top: 40px;
        }

        .card {
            box-shadow: 10px 10px 5px grey;
        }

        .card:hover {
            box-shadow: 20px 20px 10px black;
        }

        .row_margin {
            margin-top: 20px;
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
        }

        .red {
            color: red;
            margin-left: 20%;
            font-size: 30px;
        }
    </style>
</head> -->
<!-- <?php include("user_header.php"); ?> -->


<!-- <body>
    <div class="container-fluid">
        <div class="row center">
            <div class="card col-sm-3 text-center first" id="des">
                <div class="card-header">
                    Create Descriptive Question
                </div>
                <div class="card-body">
                    <p>Contains a question and Descriptive aswer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="mcq">
                <div class="card-header">
                    Create Mutliple Choice Question
                </div>
                <div class="card-body">
                    <p>Contains a question Four options and answer</p>
                </div>
            </div>



            <div class="card col-sm-3 text-center margin" id="tf">
                <div class="card-header">
                    Create True/False Question
                </div>
                <div class="card-body">
                    <p>Contains a question and answer(True/False)</p>
                </div>
            </div>

            <div class="col-sm-1"></div>
        </div>

        <div class="row center row_margin">
            <div class="col-sm-1"></div>

            <div class="card col-sm-3 text-center margin" id="art">
                <div class="card-header">
                    Create an Article
                </div>
                <div class="card-body">
                    <p>Contains brief information about a topic</p>
                </div>
            </div>

        </div>

    </div>

    <script>
        document.getElementById("des").onclick = function() {
            location.href = "insert_descriptive.php";
        }
        document.getElementById("mcq").onclick = function() {
            location.href = "insert_mcq.php";
        }
        document.getElementById("tf").onclick = function() {
            location.href = "insert_tf.php";
        }
        document.getElementById("art").onclick = function() {
            location.href = "insert_articles.php";
        }
    </script>
</body> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <!-- <link rel="stylesheet" type="text/css" href="../styles/user_reg.css"> -->
</head>
<?php include("user_header.php"); ?>
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

<body style="background-image: url('../images/MegaTron.jpg')">


    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <center>
                <h2 style="margin-bottom:20px">New Booking</h2>
            </center>
            <hr>
            <!-- <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">First Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="first_name" class="form-control" required>
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Middle Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="middle_name" class="form-control">
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Last Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="last_name" class="form-control" required>
                </div>

            </div> -->

            <!-- <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">City</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="city" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">State</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="state" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">ZipCode</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="zipcode" class="form-control" required>
                </div>
            </div> -->


            <!-- <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Gmail</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" id="firstName" name="user_email" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Confirm Gmail</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" id="firstName" name="user_email1" class="form-control" required>
                </div>
            </div>
-->
            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">No.of Visitors</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="visitors" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Required Room no</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="room_no" class="form-control" required>
                </div>

            </div>
 
            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Date of Beginning</label>
                </div>

                <div class="col-sm-2">
                    <input type="date" id="firstName" name="start_date" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Date of Leaving</label>
                </div>

                <div class="col-sm-2">
                    <input type="date" id="firstName" name="end_date" class="form-control" required>
                </div>
            </div>


           <!--  <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="password" id="firstName" name="user_pass" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Confirm Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="password" id="firstName" name="user_pass1" class="form-control" required>
                </div>

            </div> -->

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Purpose</label>
                </div>

                <div class="col-sm-8">
                    <textarea name="purpose" id="" cols="75" rows="8"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block" name="new_booking">Book</button>
            <?php include("insert_new_booking.php"); ?>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>