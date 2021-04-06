<!DOCTYPE html>
<html>
<?php session_start();
include("user_header.php");
//include("functions.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
    <link rel="stylesheet" type="text/css" href="../styles/articles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .ques {
        background-color: lightgrey;
        max-width: 70%;
        margin: auto;
        padding: 5px;
        margin-top: 10px;
        border-radius: 20px;
    }

    .options {
        background-color: lightgrey;
        max-width: 70%;
        margin: auto;
        padding: 5px;

        border-radius: 20px;
    }

    #answer {
        background-color: lightgreen;
        max-width: 70%;
        margin: auto;
        padding: 5px;

        border-radius: 20px;
        margin-bottom: 10px;
        ;
    }

    <style>body {
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

    .article {
        max-width: 80%;
        margin: auto;
    }
</style>
</style>

<body>
    <div class="container-fulid">
        <div class="row">
            <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">

                <div class="form-group row">
                    <label for="labels" style="margin-left:10px;">Please Select Filter</label>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 tag" id="Geography">
                                <!-- <div class="box">Geography</div> -->
                                <input type="checkbox" name="check_list[]" value="Geography"><label>Geography</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Maths">
                                <!-- <div class="box">Maths</div> -->
                                <input type="checkbox" name="check_list[]" value="Maths"><label>Maths</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Physics">
                                <!-- <div class="box">Physics</div> -->
                                <input type="checkbox" name="check_list[]" value="Physics"><label>Physics</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="History">
                                <!-- <div class="box">History</div> -->
                                <input type="checkbox" name="check_list[]" value="History"><label>History</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 tag" id="English">
                                <!-- <div class="box">English</div> -->
                                <input type="checkbox" name="check_list[]" value="English"><label>English</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Economy">
                                <!-- <div class="box">Economy</div> -->
                                <input type="checkbox" name="check_list[]" value="Economy"><label>Economy</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Culture">
                                <!-- <div class="box">Culture</div> -->
                                <input type="checkbox" name="check_list[]" value="Culture"><label>Culture</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Current Affairs">
                                <!--  <div class="box">Current Affairs</div> -->
                                <input type="checkbox" name="check_list[]" value="Current_Affairs"><label>Current_Affairs</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 tag" id="General Science">
                                <!-- <div class="box">General Science</div> -->
                                <input type="checkbox" name="check_list[]" value="General_Science"><label>General_Science</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Literature">
                                <!-- <div class="box">Literature</div> -->
                                <input type="checkbox" name="check_list[]" value="Literature"><label>Literature</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="PrevYearQuestion">
                                <!-- <div class="box">PrevYearQuestion</div> -->
                                <input type="checkbox" name="check_list[]" value="PrevYearQuestion"><label>PrevYearQuestion</label>
                            </div>

                            <div class="col-sm-1"></div>

                            <div class="col-sm-2 tag" id="Reasoning">
                                <!-- <div class="box">Reasoning</div> -->
                                <input type="checkbox" name="check_list[]" value="Reasoning"><label>Reasoning</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 tag" id="Aptitude">
                                <!-- <div class="box">Aptitude</div> -->
                                <input type="checkbox" name="check_list[]" value="Aptitude"><label>Aptitude</label>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary btn-block" name="filters">Apply Filers</button></center>
            </form>
        </div>

        <div class="row">
            <?php
            if (isset($_POST['filters'])) {
                $ques = array();
                $counter = 1;
                if(!empty($_POST['check_list'])){ 
                foreach ($_POST['check_list'] as $selected) {

                    $select = "SELECT *
                                   FROM articles, tags
                                   WHERE articles.art_id = tags.q_id AND tags.q_type='art' AND tag='$selected'";
                    $run_select = mysqli_query($con, $select);


                    while ($row = mysqli_fetch_array($run_select)) {
                        $header = $row['header'];
                        $content = $row['content'];
                        $content = substr($content, 0, 400);
                        $time = $row['time'];
                        $creator = $row['creator_id'];
                        $art_id = $row['art_id'];

                        $select_creator = "SELECT * FROM users where user_id='$creator'";
                        $run_creator = mysqli_query($con, $select_creator);
                        $user_row = mysqli_fetch_array($run_creator);
                        $first_name = $user_row['first_name'];


                        if (!in_array($row['art_id'], $ques, TRUE)) {

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

                                        <center><a href='single_article.php?art_id=$art_id'><button class='btn btn-info'>See More</button></a></center>
                                    </div>
                                    </br>
                                </div>
                                </br>
                                ";
                            array_push($ques, $row['art_id']);
                            $counter = $counter + 1;
                        }
                    }
                }
                }
                else
                {
                    $select = "SELECT *
                                   FROM articles, tags
                                   WHERE articles.art_id = tags.q_id AND tags.q_type='art'";
                    $run_select = mysqli_query($con, $select);


                    while ($row = mysqli_fetch_array($run_select)) {
                        $header = $row['header'];
                        $content = $row['content'];
                        $content = substr($content, 0, 400);
                        $time = $row['time'];
                        $creator = $row['creator_id'];
                        $art_id = $row['art_id'];

                        $select_creator = "SELECT * FROM users where user_id='$creator'";
                        $run_creator = mysqli_query($con, $select_creator);
                        $user_row = mysqli_fetch_array($run_creator);
                        $first_name = $user_row['first_name'];


                        if (!in_array($row['art_id'], $ques, TRUE)) {

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

                                        <center><a href='single_article.php?art_id=$art_id'><button class='btn btn-info'>See More</button></a></center>
                                    </div>
                                    </br>
                                </div>
                                </br>
                                ";
                            array_push($ques, $row['art_id']);
                            $counter = $counter + 1;
                        }
                    }
                }
            }
            ?>
            <!-- </div>
        <div class="container-fluid">
            <div class="row">
                <center>
                    <h2>Comments on Article</h2>
                </center>
            </div>
            <br>
            <?php show_comments(); ?>
        </div> -->
        </div>



</body>