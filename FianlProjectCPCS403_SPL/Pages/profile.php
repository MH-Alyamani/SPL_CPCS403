<?php
include("../Includes/session_manager.php"); // Handle session
include("../Includes/profile_handler.php"); // Fetch user info
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    include "../Includes/Header.php";
    ?>
    <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-picture">
            <?php
            if ($gender === 'Male') {
                echo "<img src='../Images/male_icon.png' alt='Profile Picture' />";
            } elseif ($gender === 'Female') {
                echo "<img src='../Images/female_icon.png' alt='Profile Picture' />";
            }
            ?>
        </div>
        <div class="user-info">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($userName); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
            <p><strong>Favorite Club:</strong> <?php echo htmlspecialchars($fav_team); ?></p>
            <p><strong>Interest Teams:</strong>
                <?php echo empty($teams) ? "No interests yet." : htmlspecialchars(implode(', ', $teams)); ?>
            </p>
        </div>
    </div>
    <?php include "../Includes/Footer.php"; ?>
</body>

</html>