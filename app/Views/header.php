
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
    <div class="logo">
        <a href="<?= base_url('/')?>">CHN</a>
    </div>
    <nav class="primary-nav">
       <ul class="nav-links">
            <li><a href="<?= base_url('/')?>">Home</a></li>
            <li><a href="<?=base_url('about')?>">About</a></li>
            <li><a href="<?=base_url('exhibits')?>">Exhibits</a></li>
            <li><a href="<?=base_url('contact')?>">Contact</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </nav>
</header>
<script src="js/header.js"></script>