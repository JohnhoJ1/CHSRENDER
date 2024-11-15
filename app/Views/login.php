<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>"> <!-- Link to your CSS -->
    <title>Login - Cultural Heritage of Nepal</title>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    
    <?php if(session()->getFlashdata('error')): ?>
        <div class="error-message">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    
    <form action="<?= base_url('auth/authenticate'); ?>" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
