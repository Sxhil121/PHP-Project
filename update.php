<?php 

include('config.php');
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];


$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `username` = '$uname', `password` = '$pass' WHERE `users`.`id` = $id;";

if (mysqli_query($conn,$sql)) {
    header("Location:usermanage.php");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>