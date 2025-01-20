<?php
// Start the session
session_start();

// Include the database connection file
include('./Connection.php');

// Fetch form data from POST
$username =  htmlspecialchars($_POST['username']);
$password =  htmlspecialchars($_POST['password']);

// Query to fetch the user data based on the username
$sql = "SELECT id, username, password FROM sign_up WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($userId, $dbUsername, $dbPassword);
$stmt->fetch();

// Check if username exists
if ($stmt->num_rows > 0) {
    // Username found, now check password
    if (password_verify($password, $dbPassword)) {
        // Password is correct, log in the user
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $dbUsername;
        $_SESSION['logged_in'] = true; // Set a flag to check logged-in state

        // Redirect to homepage
        header("Location: ../index.php");
        exit;
    } else {
        // Incorrect password
        echo "<script>alert('Invalid password. Please try again.'); window.history.back();</script>";
    }
} else {
    // Username does not exist
    echo "<script>alert('Username does not exist. Please check your credentials.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
