<?php

require_once MODELS_DIR . '/user_manager.php';

function run(): void
{
    // Chargement des utilisateurs
    // @todo Récupérer les utilisateurs triés par 'username'
    $users = getUsers();

    // Affichage de la liste des utilisateurs
    require VIEWS_DIR . '/users/list.html.php';
}
