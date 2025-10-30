<?php

require_once MODELS_DIR . '/user_manager.php';

function run(): void
{
    if (!userHasRole('ROLE_ADMIN')) {
        header('Location: ?page=homepage');
    }

    // Chargement des utilisateurs, triés au préalable 😍
    $users = getUsersSortedByUsername();

    // Affichage de la liste des utilisateurs
    require VIEWS_DIR . '/users/list.html.php';
}
