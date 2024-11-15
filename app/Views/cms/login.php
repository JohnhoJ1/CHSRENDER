<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(relativePath: 'css/cms.css'); ?>">
    
    <title>CMS Login</title>
</head>
<body> 
<header>
    <div class="logo">
        <a href="<?= base_url('/')?>">CHN</a>
    </div>
    
</header>   
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
   
<div class="login-section">

    
<form class="login-form" action="<?= site_url('auth/processLogin') ?>" method="post">
        <p class="login-header">Login</p>
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="User name" required>
        
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="password" required>
        
        <button type="submit">Login</button>
    </form>
</div>
  

</body>
</html>
