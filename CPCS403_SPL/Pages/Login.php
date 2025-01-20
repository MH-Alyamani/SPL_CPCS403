<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <?php include "../Includes/Header.php"; ?>
    </div>

    <form class="login-form" action="../Includes/login_process.php" method="post">
        <h2>Login</h2>
        
        <!-- Username Field -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <!-- Password Field -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <!-- Submit Button -->
        <button type="submit">Login</button>
    </form>

    <div>
        <?php include "../Includes/Footer.php"; ?>
    </div>

</body>

</html>
