<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
include 'secondary_nav.php';
$page_secondary_nav_items = $secondary_nav_items_contact;
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
<?php render_secondary_nav($page_secondary_nav_items, $current_page); ?>


    <div class="content">
    <h2>Contact Us</h2>
    <p>Feel free to reach out to us for more information or to plan a visit. We're excited to welcome you!</p>
    </div>

    <?php include 'footer.php'; ?> <!-- Include the footer -->

</body>
</html>
