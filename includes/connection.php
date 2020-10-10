<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$host = "localhost";
$username = "root";
$password = "mohit";
$dbname = "multi_tenant_master";
//connect
$conn = mysqli_connect($host,$username,$password,$dbname);
//check
if($conn){
    echo "";
} else {
    die("Connection-Error: " . mysqli_connect_erro());
}
?>