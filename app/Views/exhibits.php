<?php 
$current_page = basename($_SERVER['PHP_SELF'], '.php'); 
include 'secondary_nav.php';
$page_secondary_nav_items = $secondary_nav_items_exhibit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS -->
    <title>Exhibits - Cultural Heritage of Nepal</title>
</head>
<body>

        
    <?php include 'header.php'; ?>
    <?php render_secondary_nav($secondary_nav_items_exhibit, $current_page); ?>

       

    <div class="content">
        <h2>Our Exhibits</h2>
        <p>Discover the various exhibits showcasing Nepal's rich cultural heritage.</p>
        <div class="exhibits-list">
            
        <?php if (!empty($exhibits) ): ?>
            <?php foreach ($exhibits as $exhibit): ?>
                <div class="exhibit-item">
                    <h2><?= esc($exhibit['title']); ?></h2>
                    
                    <?php if (!empty($exhibit['image'])): ?>
                        <img src="<?= base_url('image/' . esc($exhibit['image'])); ?>" alt="<?= esc($exhibit['title']); ?>">
                        
                        <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else:?>
            <p>No exhibits found.</p>
            
        <?php endif; ?>
    </div>
    </div>

    <?php include 'footer.php'; ?> <!-- Include the footer -->
<script src="js/script.js/"></script>
</body>
</html>
