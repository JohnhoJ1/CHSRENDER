<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css'); ?>">
    <title>Admin Dashboard</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="<?= base_url('/')?>">CHN</a>
    </div>
    <button class="toggle-button" onclick="toggleSidebar()">☰</button>
</header>
<div class="container">
    <aside class="sidebar">
        <nav>
            <ul>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="#add-content-manager">Add Content Manager</a></li>
                <li><a href="#content-managers">Content Managers</a></li>
                <li><a href="<?= site_url('/auth/logout'); ?>">Logout</a></li>
            </ul>
        </nav>
    </aside>
    <main class="main-content">
        <section id="dashboard">
            <h2>Welcome, <?= session()->get('username'); ?></h2>
            <div class="stats">
                <div class="stat">
                    <h3>Total Users</h3>
                    <p>10</p>
                </div>
                <div class="stat">
                    <h3>Content Managers</h3>
                    <p>5</p>
                </div>
            </div>
            <div class="recent-activity">
                <!-- Add recent activity content here -->
            </div>
        </section>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', session()->getFlashdata('errors')) ?>
            </div>
        <?php endif; ?>

        <section id="add-content-manager">
            <h2>Add Content Manager</h2>
            <form action="/cms/addContentManager" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Add Content Manager</button>
            </form>
        </section>

        <section id="content-managers">
            <h2>Content Managers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contentManagers as $manager): ?>
                    <tr>
                        <td><?= esc($manager['username']) ?></td>
                        <td><?= esc($manager['email']) ?></td>
                        <td>
                            <a href="<?= site_url('cms/editContentManager/' . $manager['id']) ?>">Edit</a> |
                            <a href="<?= site_url('cms/deleteContentManager/' . $manager['id']) ?>" onclick="return confirm('Are you sure you want to delete this content manager?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</div>

<script>
    function toggleSidebar() {
        const container = document.querySelector('.container');
        container.classList.toggle('sidebar-open');
    }
</script>
</body>
</html>
