<?php 
include('config.php');

// Query to fetch all records from the users table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if the query executed successfully
if ($result) {
    // Start HTML table
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    // Fetch associative array
    while ($row = mysqli_fetch_assoc($result)) {
        // Output data from each row
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    // End HTML table
    echo "</table>";

    // Free result set
    mysqli_free_result($result);
} else {
    // Display error if query fails
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
