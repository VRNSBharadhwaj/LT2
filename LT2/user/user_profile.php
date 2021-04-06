<!DOCTYPE html>
<html>
<?php session_start();
include("user_header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/user_reg.css">
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
$user_id = $_GET['user_id'];
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-1">
            </div>
         
        </div>
    </div>


    <script>
        document.getElementById("liked").onclick = function() {

            location.href = "show_liked.php?user_id=<?php echo $user_id ?>";
        }
    </script>

    <script>
        document.getElementById("todo").onclick = function() {

            location.href = "show_todo.php?user_id=<?php echo $user_id ?>";
        }
    </script>

    <script>
        document.getElementById("done").onclick = function() {

            location.href = "show_completed.php?user_id=<?php echo $user_id ?>";
        }
    </script>

</body>