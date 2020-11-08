<?php
$user='root';

$password='1234';

$database = "TSF";

$con = mysqli_connect('localhost',$user,$password) or die("Unable to connect");

mysqli_select_db($con,$database) or die("Database not chosen");

?>