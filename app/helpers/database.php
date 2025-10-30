<?php

function getConnection(): PDO
{
    // $bd sera créé UNIQUEMENT au premier appel à cette fonction
    static $db = null;

    if ($db === null) {
        $dsn = 'sqlite:' . MODELS_DIR . '/database.sqlite';

        try {
            // On établi ici une connexion avec la base de données
            $db = new PDO($dsn, options: [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $pe) {    // Gestion des erreurs de connexion
            echo 'Unable to reach the database: ' . $pe->getMessage();
            die();
        }
    }

    return $db;
}
