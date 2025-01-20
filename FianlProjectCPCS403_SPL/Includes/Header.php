<header>
    <img src="../Images/SPLLogo.png" alt="Saudi League">
    <h1>Saudi Professional League (2022/2023)</h1>
</header>
<nav>
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
        <!-- Show links available only to logged-in users -->
        <a href="../Pages/profile.php">My Profile</a>
        <a href="../Includes/logout.php" class="rightSide">Logout</a>
    <?php else: ?>
        <!-- Show links for visitors -->
        <a href="../Pages/Login.php" class="rightSide">Login</a>
        <a href="../Pages/SignUp.php" class="rightSide">SignUp</a>
    <?php endif; ?>
    
    <!-- Links that are always visible -->
    <a href="../index.php">Home</a>
    <a href="../Pages/TeamPage.php">Teams</a>
    <a href="../Pages/StatisticsPage.php">Statistics</a>
    <a href="../Pages/KingCupPage.php">King Cup</a>
    <a href="../Pages/ServicesPage.php">Services</a>
    <a href="../Pages/Resume.php">My Resume</a>
    <a href="../Pages/ContactMePage.php">Contact Me</a>
</nav>

