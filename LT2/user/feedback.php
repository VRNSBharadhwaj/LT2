<!DOCTYPE html>
<html>
<?php session_start();
include "user_header.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
</head>



<body>

    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <center>
                <h2>Give Feedback</h2>
            </center>

            <div class="form-group row">
                <label for="Answer" class="col-sm-4 control-label">Feedback</label>
                <div class="col-sm-8">
                    <textarea type="text" id="answer" name="feed" class="form-control" rows='4' cols='50' required></textarea>
                </div>
            </div>

            <button style="width:100px;" type="submit" class="btn btn-primary btn-block" name="submit_feed">Submit</button>
        </form>
    </div>
</body>

</html>
<?php
include("../config/configure.php");

if (isset($_POST['submit_feed'])) {

    $feed_back = htmlentities(mysqli_real_escape_string($con, $_POST['feed']));
    $user_email =  $_SESSION['email'];


    $user_select = "SELECT * from users where email='$user_email' and user_type != 'admin'";
    $query = mysqli_query($con, $user_select);
    $row = mysqli_fetch_array($query);
    $val = $row['user_id'];

    $insert_feed = "INSERT INTO feedback (user_id, feedback) VALUES ('$val', '$feed_back')";
    $query = mysqli_query($con, $insert_feed);
    if ($query) {
        echo "<script>alert('Feedback Posted')</script>";
    } else {
        echo "<script>alert('Something wrong! try again')</script>";
    }
}

?>