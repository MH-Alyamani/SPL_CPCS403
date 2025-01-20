<?php
// Include the database connection file
include('./Connection.php');

// Fetch form data
$name =  htmlspecialchars($_POST['name']);
$email =  htmlspecialchars($_POST['email']);
$userName =  htmlspecialchars($_POST['username']);
$pass =  htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT)); // Secure password
$gender =  htmlspecialchars($_POST['gender']);
$fav_team = $_POST['Club']; // Favorite team
$interests = isset($_POST['interests']) ? $_POST['interests'] : [];
$date = time(); // Unix timestamp

// Check if email already exists
$emailCheckSql = "SELECT id FROM sign_up WHERE email = ?";
$emailStmt = $conn->prepare($emailCheckSql);
$emailStmt->bind_param("s", $email);
$emailStmt->execute();
$emailStmt->store_result();

if ($emailStmt->num_rows > 0) {
    // Email already exists
    echo "<script>
            alert('This email is already taken. Please use a different email.');
            window.history.back(); // Return to the previous page
          </script>";
    $emailStmt->close();
    $conn->close();
    exit;
}
$emailStmt->close();

// Check if username already exists
$usernameCheckSql = "SELECT id FROM sign_up WHERE username = ?";
$usernameStmt = $conn->prepare($usernameCheckSql);
$usernameStmt->bind_param("s", $userName);
$usernameStmt->execute();
$usernameStmt->store_result();

if ($usernameStmt->num_rows > 0) {
    // Username already exists
    echo "<script>
            alert('This username is already taken. Please choose a different username.');
            window.history.back(); // Return to the previous page
          </script>";
    $usernameStmt->close();
    $conn->close();
    exit;
}
$usernameStmt->close();

// Start transaction
$conn->begin_transaction();

try {
    // Insert data into sign_up table
    $sql = "INSERT INTO sign_up (name, email, username, password, gender, date, fav_team) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssis", $name, $email, $userName, $pass, $gender, $date, $fav_team);
    $stmt->execute();

    // Get the last inserted ID
    $userId = $stmt->insert_id;

    // Insert data into teams table and user_teams table
    foreach ($interests as $team) {
        // Check if the team already exists
        $teamId = null;
        $checkTeamSql = "SELECT id FROM teams WHERE team_name = ?";
        $teamStmt = $conn->prepare($checkTeamSql);
        $teamStmt->bind_param("s", $team);
        $teamStmt->execute();
        $teamStmt->bind_result($teamId);
        $teamStmt->fetch();
        $teamStmt->close();

        // If the team doesn't exist, insert it
        if (!$teamId) {
            $insertTeamSql = "INSERT INTO teams (team_name) VALUES (?)";
            $insertTeamStmt = $conn->prepare($insertTeamSql);
            $insertTeamStmt->bind_param("s", $team);
            $insertTeamStmt->execute();
            $teamId = $insertTeamStmt->insert_id;
            $insertTeamStmt->close();
        }

        // Insert into user_teams table
        $insertUserTeamSql = "INSERT INTO user_teams (user_id, team_id) VALUES (?, ?)";
        $userTeamStmt = $conn->prepare($insertUserTeamSql);
        $userTeamStmt->bind_param("ii", $userId, $teamId);
        $userTeamStmt->execute();
        $userTeamStmt->close();
    }

    // Commit transaction
    $conn->commit();

    // Redirect to a success page
    header("Location: ../Pages/Login.php");
    exit;
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    echo "Error: " . $e->getMessage();
} finally {
    // Close connection
    $conn->close();
}
?>