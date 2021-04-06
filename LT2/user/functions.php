<?php
include("../config/configure.php");
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

