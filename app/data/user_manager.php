<?php

function getUsers(): array
{
    return require MODELS_DIR . '/users.php';
}

function getUsersSortedByUsername(): array
{
    $users = getUsers();

    // Tri par nom d'utilisateur
    // Utilisation closure et spaceship operator
    usort($users, function (array $a, array $b): int {
        return $a['username'] <=> $b['username'];
    });

    return $users;
}
