<?php require VIEWS_DIR . '/_partials/_header.html.php'; ?>

<h1>Fiche utilisateur</h1>

<ul>
  <li>Nom d’utilisateur : <?php echo $user['username']; ?></li>
</ul>

<div>
  <a href="?page=users">Retour à la liste des utilisateurs</a>
</div>

<?php require VIEWS_DIR . '/_partials/_footer.html.php'; ?>
