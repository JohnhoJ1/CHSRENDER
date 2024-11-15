<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cultural Heritage Site</title>
    <link rel="stylesheet" href="<?= base_url(relativePath: 'css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>
    <div class="imageslider"> 
        <section class="slide"> 
        </section>
    <div class="hero-container">
        <section class="hero">
            <div class="hero-content">                
                    <h1>Celebrating the Rich <span>Cultural</span> <br/><span>Heritage</span> of Nepal</h1>
                    <p>We are a dedicated charity committed to preserving and celebrating Nepal's rich cultural heritage.From the snow-capped peaks of the Himalayas to the serene plains of the Terai, Nepal's landscape is dotted with historic sites that tell the story of its diverse cultures and vibrant history.</p>
                <a href="<?= base_url('exhibits'); ?>" class="hero-button"><p>Explore more</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="24" fill="white" style="margin-left: 8px;">
                        <path d="M480 732 231 483l43-43 206 206 206-206 43 43L480 732Z"/>
                    </svg>
                </a>
            </div>
        </section>
    </div>

    <!-- Your content -->
    <div class="content">
        <!-- Page content -->
    </div>

    <?php include 'footer.php'; ?>

    <script src="<?= base_url('js/script.js'); ?>"></script>
    <script src="<?= base_url('js/slider.js'); ?>"></script>
</body>
</html>
