<?php
$serverName ="localhost";
$dbUsername = "yasithWijesuriya";
$dbPassword = ")i2KKfHd*xLb5H9@";
$dbName = "nature_clothing";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed : " .mysqli_connect_error());
}else{
    echo"its working";
}