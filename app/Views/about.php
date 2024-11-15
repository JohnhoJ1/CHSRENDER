<?php 
$current_page = basename($_SERVER['PHP_SELF'], '.php'); 
include 'secondary_nav.php';
$page_secondary_nav_items = $secondary_nav_items_about;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS -->
    <title>About - Cultural Heritage of Nepal</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php render_secondary_nav($secondary_nav_items_about, $current_page); ?>        
    <div class="content">
    <h2>About Us</h2>
            <p>At the Cultural Heritage Site, we are dedicated to preserving and celebrating the rich tapestry of human history and culture. Our mission is to educate, inspire, and connect individuals from all walks of life with the diverse heritage that shapes our world today.</p>

            <h3>Our Vision</h3>
            <p>We envision a world where cultural heritage is recognized as a vital part of our identity. We strive to foster a deeper appreciation for the arts, traditions, and histories that define communities across the globe.</p>

            <h3>What We Do</h3>
            <ul>
                <li><strong>Preservation</strong>: We work tirelessly to protect and preserve artifacts, traditions, and stories that might otherwise be lost to time. Through collaboration with local communities and experts, we ensure that our heritage is maintained for future generations.</li>
                <li><strong>Education</strong>: Our educational programs aim to inform and engage visitors of all ages. We offer workshops, guided tours, and interactive exhibits that delve into the significance of various cultural practices, arts, and artifacts.</li>
                <li><strong>Community Engagement</strong>: We believe in the power of community. Our site serves as a gathering place for individuals to share their stories and experiences, fostering a sense of belonging and shared purpose.</li>
            </ul>

            <h3>Our History</h3>
            <p>Founded in [Year], the Cultural Heritage Site began as a small initiative to document and share local traditions. Over the years, we have grown into a comprehensive resource for cultural education and preservation, attracting visitors from around the world.</p>

            <h3>Our Team</h3>
            <p>Our team is composed of passionate historians, educators, artists, and community members dedicated to the cause of cultural preservation. Together, we work to bring diverse perspectives and expertise to our programs and initiatives.</p>

            <h3>Join Us</h3>
            <p>We invite you to join us in our journey of discovery and preservation. Whether you're a local resident, a traveler, or simply someone interested in culture and history, there’s a place for you at the Cultural Heritage Site. Together, let’s honor our past and inspire future generations.</p>

            <h3>Contact Us</h3>
            <p>For inquiries, collaborations, or to learn more about our programs, please reach out to us at <a href="mailto:email@example.com">email@example.com</a> or visit our contact page.</p>
    </div>
    <?php include 'footer.php'; ?> <!-- Include the footer -->

</body>
</html>
