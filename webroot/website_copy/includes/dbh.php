<?php

$servername = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPass, $dBName);

if (!$conn){
    die("Connection failed: ".myysqli_connect_error());
}
else{
    echo "Successfully Connected";
}