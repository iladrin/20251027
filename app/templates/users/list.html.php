<?php require VIEWS_DIR . '/_partials/_header.html.php'; ?>

<h1>Liste des utilisateurs</h1>

<ul>
    <?php
    foreach ($users as $user) {
        echo '<li><a href="?page=user_profile&username=' . $user['username'] . '">' . $user['username'] . '</a></li>';
    }
    ?>
</ul>

<?php require VIEWS_DIR . '/_partials/_footer.html.php'; ?>
