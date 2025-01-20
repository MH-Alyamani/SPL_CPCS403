<?php
include('../Includes/session_manager.php'); // Handle session centrally
include('../Includes/Connection.php');     // Database connection

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../index.php");
    exit;
}

// Get the logged-in user's username from the session
$username = $_SESSION['username'];

// Fetch user info from the database
$sql = "SELECT name, email, username, gender, fav_team FROM sign_up WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($name, $email, $userName, $gender, $fav_team);
$stmt->fetch();
$stmt->close();

// Fetch user's interests
$teams = [];
$interestSql = "SELECT team_name FROM teams t JOIN user_teams ut ON t.id = ut.team_id WHERE ut.user_id = (SELECT id FROM sign_up WHERE username = ?)";
$interestStmt = $conn->prepare($interestSql);
$interestStmt->bind_param("s", $username);
$interestStmt->execute();
$interestStmt->bind_result($team_name);

while ($interestStmt->fetch()) {
    $teams[] = $team_name;
}
$interestStmt->close();

$conn->close();
?>