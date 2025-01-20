<?php
include('../Includes/session_manager.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <!-- Link to the external CSS file -->
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <?php
        include "../Includes/Header.php";
        ?>
    </div>

    <div class="resume-container">
        <div class="pdf-wrapper">
            <object data="../Images/CV_Mohammed_Alyamani.V6.pdf" type="application/pdf" width="50%" height="900px"
                aria-label="Resume PDF" title="Resume PDF">
                <p>Unable to display PDF file. <a href="../Images/CV_Mohammed_Alyamani.V6.pdf">Download</a> instead.</p>
            </object>
        </div>
    </div>
    <div>
        <?php
        include "../Includes/Footer.php";
        ?>
    </div>

</body>

</html>
