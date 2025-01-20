<?php
include('../Includes/session_manager.php');
// Include the script to fetch gallery data
include('../Includes/gallery.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <?php include("../Includes/Header.php"); ?>
    </div>

    <section class="image-gallery">
        <h2>Al-Ittihad Gallery</h2>
        <div class="preview-section">
            <div class="preview">
                <img id="main-image" src="../Images/Teams/Al-Ittihad-FC.png" alt="Preview">
            </div>
            <div class="preview-text">
                <h3 id="main-title">Al-Ittihad FC</h3>
                <p id="main-description">Al Ittihad is one of the oldest and most successful football clubs in Saudi Arabia, based in Jeddah. 
                The team plays its home matches at the King Abdullah Sports City stadium.</p>
            </div>
        </div>
        <hr>
        <div class="gallery-container">
            <div class="gallery">
                <?php foreach ($galleryItems as $item): ?>
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>"
                        alt="<?php echo htmlspecialchars($item['title']); ?>"
                        data-title="<?php echo htmlspecialchars($item['title']); ?>"
                        data-description="<?php echo htmlspecialchars($item['description']); ?>"
                        <?php if (!empty($item['video_path'])): ?>
                            data-video="<?php echo htmlspecialchars($item['video_path']); ?>"
                        <?php endif; ?>
                        onclick="showMedia(this)">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div>
        <?php include("../Includes/Footer.php"); ?>
    </div>

    <script src="../javaScript/gallery.js"></script>
</body>

</html>
