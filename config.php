<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "mydatabase1"; 

$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn) {
    echo "not connected". mysqli_connect_error();
}

?>


