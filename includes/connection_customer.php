<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$host = "localhost";
$username = "root";
$password = "mohit";
$dbname = "multi_tenant_" . $_SESSION['user']['db_name'];
//connect
$conn_c = mysqli_connect($host, $username, $password, $dbname);
//check
if ($conn_c) {
    echo "";
} else {
    die("Connection-Error: " . mysqli_connect_erro());
}
?>
