<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

header("Location: ../index.php"); // You can change this to your preferred page
exit;
?>
