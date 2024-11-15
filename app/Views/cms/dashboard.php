
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Manager Dashboard</title>
</head>
<body>
    <h2>Welcome, <?= session()->get('username'); ?></h2>
    <p>Role: <?= session()->get('role'); ?></p>
    <p><a href="<?= site_url('/auth/logout'); ?>">Logout</a></p>
    <form action="/cms/exhibits/add" method="POST" enctype="multipart/form-data">
        <label for="exhibit_title">Exhibit Title:</label>
        <input type="text" name="exhibit_title" required>
        <br>
        <label for="exhibit_description">Exhibit Description:</label>
        <textarea name="exhibit_description" required></textarea>
        <br>
        <label for="exhibit_image">Exhibit Image:</label>
        <input type="file" name="exhibit_image" accept="image/*" required>
        <br>
        <input type="submit" value="Add Exhibit">
</form>
<h2>Edit Exhibit</h2> 
<form action="/cms/exhibits/update/<?= $exhibit['id']; ?>" method="POST" enctype="multipart/form-data"> 
    <label for="exhibit_title">Exhibit Title:</label> 
    <input type="text" name="exhibit_title" value="<?= esc($exhibit['title']); ?>" required> <br> 
    <label for="exhibit_description">Exhibit Description:</label> 
    <textarea name="exhibit_description" required><?= esc($exhibit['description']); ?></textarea> 
    <br> 
    <label for="exhibit_image">Exhibit Image:</label>
     <input type="file" name="exhibit_image" accept="image/*"> <br> 
     <input type="submit" value="Update Exhibit">
</form>
    <div class="exhibits-list">
            <?php  echo base_url()?>
        <?php if (!empty($exhibits) ): ?>
            <?php foreach ($exhibits as $exhibit): ?>
                <div class="exhibit-item">
                    <h2><?= esc($exhibit['title']); ?></h2>
                    <p><?= esc($exhibit['description']); ?></p>
                    <?php if (!empty($exhibit['image'])): ?>
                        <img src="<?= base_url('image/' . esc($exhibit['image'])); ?>" alt="<?= esc($exhibit['title']); ?>">
                        
                        
                        <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else:?>
            <p>No exhibits found.</p>
            
        <?php endif; ?>
    </div>
</body>
</html>
