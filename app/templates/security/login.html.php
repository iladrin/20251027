<?php require VIEWS_DIR . '/_partials/_header.html.php'; ?>

<?php
if (isset($error)) {
  echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
}
?>

<form action="?page=login" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" role="button" class="btn btn-primary">Connexion</button>
</form>

<?php require VIEWS_DIR . '/_partials/_footer.html.php'; ?>
