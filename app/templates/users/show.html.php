<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiche utilisateur</title>
</head>
<body>
<h1>Fiche utilisateur</h1>

<ul>
  <li>Nom d’utilisateur : <?php echo $user['username']; ?></li>
</ul>

<div>
  <a href="?page=users">Retour à la liste des utilisateurs</a>
</div>
</body>
</html>
