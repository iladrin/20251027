<?php

function getUsers(): array
{
    return getUsersFromCSV();
}

// Stratégie 1 : Tableau PHP
function getUsersFromPHP(): array
{
    return require MODELS_DIR . '/users.php';
}

// Stratégie 2 : Fichier CSV classique
function getUsersFromCSV(): array
{
    $users = [];

    $f = fopen(MODELS_DIR . '/users.csv', 'r');
    while (($data = fgetcsv($f, separator: ';')) !== false) {
        $user = [
            'id' => (int) $data[0],
            'username' => $data[1],
            'password' => $data[2],
            'roles' => explode(',', $data[3]),
            'creation_date' => $data[4],
        ];

        $users[] = $user;
    }
    return $users;
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
