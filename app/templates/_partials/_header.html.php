<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Accueil</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Formation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="?page=homepage">Accueil
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=users">Utilisateurs</a>
                </li>
            </ul>
            <div class="d-flex">
              <?php
                  if (isset($_SESSION['user'])) {
                      echo '<a role="button" data-bs-toggle="button" class="btn btn-secondary" href="?page=logout">Déconnexion</a>';
                  } else {
                      echo '<a role="button" data-bs-toggle="button" class="btn btn-secondary" href="?page=login">Connexion</a>';
                  }
              ?>
            </div>
        </div>
    </div>
</nav>

<div class="container text-center mt-5">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6">
