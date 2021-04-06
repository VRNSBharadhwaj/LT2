<?php
$con = mysqli_connect("localhost", "root", "", "gfg") or die("connectoin was not established");

if (!$con) {
    echo ("connection error" . mysqli_connect_error());
}
