<!DOCTYPE html>
<?php

session_start();

if (!isset($_SESSION['email'])) {
    header('location:../index.php');
}
include("../config/configure.php");
include("user_header.php");

function single_article()
{
    //echo "called";
    global $con;
    if (isset($_GET['art_id'])) {
        $art_id = $_GET['art_id'];

        $get_art = "SELECT * FROM articles where art_id='$art_id'";
        $run_art = mysqli_query($con, $get_art);
        $row_art = mysqli_fetch_array($run_art);

        $header = $row_art['header'];
        $content = $row_art['content'];
        $time = $row_art['time'];
        $creator = $row_art['creator_id'];

        $select_creator = "SELECT * FROM users where user_id='$creator'";
        $run_creator = mysqli_query($con, $select_creator);
        $row = mysqli_fetch_array($run_creator);
        $first_name = $row['first_name'];

        echo "
        <div class='container-fluid'>
            <div class='article'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <center><h2>$header</h2></center>
                    </div>
                </div>
                 <hr id='hl' > 
                
                <div class='row content'>
                    <div class='col-sm-2'>
                    </div>
                    <div class='col-sm-8'>
                        $content
                    </div>  
                    <div class='col-sm-2'>
                        
                    </div>
                </div>
                <div class='row time'>
                    <div class='col-sm-4'></div>
                    <div class='col-sm-4'><strong>Created by</strong>  $first_name</div>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-4'><strong>Created at</strong>  $time </div>
                </div>
            </div>
            
            </br>

            
            
        </div>
        </br>
        ";
    }
}




?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, initial-scale = 1.0">
    <title>Article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
</head>
<style>
    body {
        background-image: url('../images/MegaTron.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        overflow-x: hidden;
    }

    .comment {
        border: 2px solid gray;
        border-radius: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-top: 5px;
    }

    .des {
        font-size: 18px;
    }
</style>

<body>
    <div class="container-fulid">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h2>Article</h2>
                </center>
            </div>
        </div>
        <?php echo single_article(); ?>

        <?php
        $email = $_SESSION['email'];
        $current_user = "SELECT * from users WHERE email='$email'";
        $run_current_user = mysqli_query($con, $current_user);
        $rows_current_user = mysqli_fetch_array($run_current_user);
        $current_user_id = $rows_current_user['user_id'];
        $art_id = $_GET['art_id'];
        ?>

        <div class="container-fluid" style="margin-bottom:15px;">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <form action='' method='post'>
                        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
                            <button type="submit" class="btn btn-primary btn-block" name="done">Done</button>
                        </form>
                        <?php
                        if (isset($_POST['done'])) {
                            $select = "SELECT * from done WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                            $query = mysqli_query($con, $select);
                            $rows = mysqli_num_rows($query);
                            if ($rows > 0) {
                                $delete = "DELETE FROM done WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                                $run_delete = mysqli_query($con, $delete);
                                echo "<script>alert('Made undone')</script>";
                            } else {
                                $insert = "INSERT INTO done (user_id, id, type) VALUES ('$current_user_id', '$art_id', 'art')";
                                $run_insert = mysqli_query($con, $insert);
                                echo "<script>alert('Marked as completed')</script>";
                            }
                        }
                        ?>
                    </form>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
                        <button type="submit" class="btn btn-primary btn-block" name="liked">Like</button>
                    </form>
                    <?php
                    if (isset($_POST['liked'])) {

                        $select = "SELECT * from liked WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                        $query = mysqli_query($con, $select);
                        $rows = mysqli_num_rows($query);
                        if ($rows > 0) {
                            $delete = "DELETE FROM liked WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                            $run_delete = mysqli_query($con, $delete);
                            echo "<script>alert('Like Removed')</script>";
                        } else {
                            $insert = "INSERT INTO liked (user_id, id, type) VALUES ('$current_user_id', '$art_id', 'art')";
                            $run_insert = mysqli_query($con, $insert);
                            echo "<script>alert('Like Added')</script>";
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
                        <button type="submit" class="btn btn-primary btn-block" name="todo">Todo</button>
                    </form>
                    <?php
                    if (isset($_POST['todo'])) {
                        $select = "SELECT * from todo WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                        $query = mysqli_query($con, $select);
                        $rows = mysqli_num_rows($query);

                        if ($rows > 0) {
                            $delete = "DELETE FROM todo WHERE user_id='$current_user_id' AND id='$art_id' AND type='art'";
                            $run_delete = mysqli_query($con, $delete);
                            echo "<script>alert('Todo Removed')</script>";
                        } else {
                            $insert = "INSERT INTO todo (user_id, id, type) VALUES ('$current_user_id', '$art_id', 'art')";
                            $run_insert = mysqli_query($con, $insert);
                            echo "<script>alert('Todo Added')</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


        <form action="" method="post" class='form-inline'>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><label for="cmt" class="control-label">Enter you comment</label></div>
                <div class="col-sm-6">
                    <textarea name="cmt" id="" cols="100" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <center><input type="submit" name="sub_cmt" value="Comment" class="btn btn-success"></center>
            </div>

            <?php

            if (isset($_POST['sub_cmt'])) {
                $email = $_SESSION['email'];
                $select_user = "SELECT * FROM users WHERE email = '$email' and user_type != 'admin'";
                $run_user = mysqli_query($con, $select_user);
                $row_user = mysqli_fetch_array($run_user);
                $user_id = $row_user['user_id'];
                $art_id = $_GET['art_id'];

                $comment = $_POST['cmt'];
                $insert = "INSERT INTO comments (user_id, comment, comment_on, type) VALUES
                                                    ('$user_id', '$comment', '$art_id', 'art')";
                $run_insert = mysqli_query($con, $insert);
                if (!$run_insert) {
                    echo "<script>alert('Some thing went wrong')</script>";
                }
            }
            ?>
        </form>


        <div class="container-fluid">
            <div class="row">
                <center>
                    <h2>Comments on Article</h2>
                </center>
            </div>
            <br>
            <?php show_comments(); ?>
        </div>
    </div>
    <br><br>
</body>


</html>