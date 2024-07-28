v<?php
include('config.php');


$id = $_GET["id"];  // Example user ID to delete

// Delete query
$deleteQuery = "DELETE FROM `users` WHERE `users`.`id` = $id";

// Perform the delete query
$result = mysqli_query($conn, $deleteQuery);

if ($result) {
    // Redirect to a success page or another page
    header("Location: usermanage.php");
  
} else {
    // Handle the error if delete query fails
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
