<h2>Edit Content Manager</h2>
<form action="<?= site_url('cms/updateContentManager/' . $manager['id']) ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= esc($manager['username']) ?>" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= esc($manager['email']) ?>" required>
    
    <button type="submit">Update</button>
</form>
