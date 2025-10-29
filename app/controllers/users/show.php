<?php

require_once MODELS_DIR . '/user_manager.php';

function run(): void
{
    // Chargement des utilisateurs
    $users = getUsers();

    // Affichage d’une fiche utilisateur
    // 1. On récupérère son username depuis l'url ou null (?username=xxx)
    $username = $_GET['username'] ?? null;

    // 2. Si le username est null, on ARRÊTE l’application avec un message
    if (!isset($username)) {
        die('Username manquant.');
    }

    // 3. On recherche l’utilisateur par son username
    $user = findUserByUsername($username);

    // 4. On affiche une erreur au cas où :p
    if (!isset($user)) {
        die('L’utilisateur n’existe pas.');
    }


    require VIEWS_DIR . '/users/show.html.php';
}
