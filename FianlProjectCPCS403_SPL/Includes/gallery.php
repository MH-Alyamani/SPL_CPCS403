<?php
// Include database connection
include('../Includes/Connection.php');

// Fetch gallery data
$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);

// Check if data exists
$galleryItems = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $galleryItems[] = $row;
    }
}
$conn->close();
?>
