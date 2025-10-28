<?php

// Chargement des librairies PHP du projet
require '../vendor/autoload.php';

// Constantes globales
define('PROJECT_DIR', dirname(__DIR__));
const APP_DIR = PROJECT_DIR . '/app';
const CONTROLLERS_DIR = APP_DIR . '/controllers';
const VIEWS_DIR = APP_DIR . '/templates';
const MODELS_DIR = APP_DIR . '/data';

// Par exemple: ?page=user_profile
$page = $_GET['page'] ?? 'homepage';

// @todo Définir les routes dans un fichier de configuration. Merci :}
$routes = [
    'users' => 'users/list.php',
    'user_list' => 'users/list.php',    // Alias de la route précédente

    'user_profile' => 'users/show.php',
    'homepage' => 'homepage.php',
];

// On vérifie que l'index $page (par exemple 'user_profile') existe dans le tableau $routes
if (!array_key_exists($page, $routes)) {
    $error = "La page '$page' n’existe pas.";

    require CONTROLLERS_DIR . '/error.php';
    die();
}

// Appel du controller pour traiter la page web demandée
require CONTROLLERS_DIR . '/' . $routes[$page];
