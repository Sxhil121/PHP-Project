<?php 

include('config.php');

$uname=$_POST["uname"];
$pass=$_POST["pass"];



$sql = "SELECT * FROM `users` WHERE `username` = '$uname' AND `password` = '$pass'";
$result = mysqli_query($conn,$sql);



if (mysqli_num_rows($result)>0) {
  header("Location:usermanage.php");
} else {
    echo "Invalid Credentials .<a href='login.html'>Try again</a> ";
}
mysqli_close($conn);



?>