<?php

$host = "localhost";
$user = "root";
$pw = "subham1010";
$db = "reservation";

$conn = mysqli_connect($host, $user, $pw, $db);

if(!$conn){
    die("Not Connected !!!");
}

// echo "Successfully Connected ";


?>