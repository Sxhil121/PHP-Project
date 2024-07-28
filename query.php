<?php 
include('config.php');
$sql = "SELECT * FROM users";
$result=mysqli_query($conn,$sql);
if($result){
    while ($row = mysqli_fetch_assoc($result)) {
    }
}else{
    echo"error";
}
?>