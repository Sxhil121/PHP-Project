<?php 
include('config.php');
$namme = "sdac";
$email="sdac@gamil.com";

$insertQuery = "INSERT INTO users (name,email)VALUES ('$name','$email')";
$result=mysqli_query($conn,$insertQuery);
if ($result) {
    header("Location:show.php");
}else{
    echo"error";
}
mysqli_close($conn);
?>