<!DOCTYPE html>
<html>
<?php session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title align:center>Bookings</title>
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
function get_articles()
{
    global $con;

    $get_articles = "SELECT * FROM booking ORDER BY start_date,end_date ASC LIMIT 5";
    $run_articles = mysqli_query($con, $get_articles);

    while ($row_posts = mysqli_fetch_array($run_articles)) {

        //$content = $row_posts['purpose'];
        $header = $row_posts['purpose'];
        if (strlen($header) > 300)
            $header = substr($header, 0, 300);
        $start_date = $row_posts['start_date'];
        $end_date = $row_posts['end_date'];
        //$book_id = $row_post['book_id'];
        // $creator = $row_posts['creator_id'];
        // $time = $row_posts['time'];
        // $art_id = $row_posts['art_id'];

        // $select_creator = "SELECT min(book_id) FROM booking where start_date <= '$start_date' and end_date >= '$end_date";
        // $run_creator = mysqli_query($con, $select_creator);
        // $row = mysqli_fetch_array($run_creator);
        // $min_id = $row['book_id'];

        // if($min_id == $book_id)
        // {
        // 	echo "status : CONFIRM";
        // }
        // else
        // {
        // 	echo "status : WAITING";
        // }


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
                      
                    <div class='col-sm-2'>
                    </div>
                </div>
                <div class='row time'>
                    <div class='col-sm-4'></div>
                    <div class='col-sm-4'><strong>FROM </strong>  $start_date</div>
                    <div class='col-sm-1'></div>
                    <div class='col-sm-4'><strong>UPTO </strong>  $end_date </div>
                </div>
                <center><a href='single_article.php'><button class='btn btn-info'>Check status</button></a></center>
            </div>
            </br>
        </div>
        </br>
        ";
    }
}



?>

<body>
    <?php include("user_header.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <center>
                    <h2><strong>Bookings</strong></h2>
                </center>

                <?php echo get_articles(5) ?>
            </div>
            <div class="col-sm-1">
            </div>
            <!-- <div class="col-sm-4">
                <center>
                    <h2><strong>Updates</strong></h2>
                </center>
                <?php echo get_updates() ?>
            </div> -->
        </div>
    </div>
</body>

</html>