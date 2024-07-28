<?php 

include('config.php');
$name=$_POST["name"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];


$sql = "INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES (NULL, '$name', '$email', '$uname', '$pass');";

if (mysqli_query($conn,$sql)) {
    header("Location:login.html");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>