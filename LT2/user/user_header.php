<?php
include("../config/configure.php");
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="user_home.php" class="navbar-brand">GfG</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $user = $_SESSION['email'];


                $get_user = "select * from users where email = '$user'";
                $run_user = mysqli_query($con, $get_user);
                if (!$run_user) {
                    echo ("<script>alert('Something went wrong!')</script>");
                } else {
                    $user_row = mysqli_fetch_array($run_user);
                    $user_id = $user_row['user_id'];
                    $first_name = $user_row['first_name'];
                    $last_name = $user_row['last_name'];
                }
                ?>

                <li><a href='user_profile.php?<?php echo ("user_id=$user_id") ?>'><?php echo ("$first_name"); ?></a></li>
                <li><a href='user_home.php'>My Bookings</a></li>
                <li><a href='user_contribute.php?<?php echo ("user_id=$user_id") ?>'>Book</a></li>
                <li><a href='user_prof_update.php?<?php echo ("user_id=$user_id") ?>'>Update Profile</a></li>
                <li><a href='logout.php?<?php echo ("user_id=$user_id") ?>'>Logout </a></li>
                <li><a href="feedback.php">Give Feedback</a></li>
            </ul>
        </div>
    </div>
</nav>