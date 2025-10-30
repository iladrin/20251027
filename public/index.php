<?php

// On initialise une session stockée sur le serveur pour conserver l'authentification de l'utilisateur de page en page
session_start();

// Chargement des librairies PHP du projet
require '../vendor/autoload.php';

// Constantes globales
define('PROJECT_DIR', dirname(__DIR__));
const APP_DIR = PROJECT_DIR . '/app';
const CONTROLLERS_DIR = APP_DIR . '/controllers';
const VIEWS_DIR = APP_DIR . '/templates';
const MODELS_DIR = APP_DIR . '/data';
const CONFIG_DIR = PROJECT_DIR . '/config';

// Chargement des helpers
require APP_DIR . '/helpers/logger.php';
require APP_DIR . '/helpers/security.php';
require APP_DIR . '/helpers/database.php';

// Par exemple: ?page=user_profile
$page = $_GET['page'] ?? 'homepage';

// Chargement des routes connues par l’application
$routes = require CONFIG_DIR . '/routes.php';

// On vérifie que l'index $page (par exemple 'user_profile') existe dans le tableau $routes
if (!array_key_exists($page, $routes)) {
    $error = "La page '$page' n’existe pas.";

    logMessage($error, LOG_LEVEL_CRITICAL);
    logCriticalMessage($error);
    require CONTROLLERS_DIR . '/error.php';
    run($error);
    die();
}

// Appel du controller pour traiter la page web demandée
$controller = is_array($routes[$page]) ? $routes[$page]['controller'] : $routes[$page];

// Si la route a un index 'security', il faut vérifier le rôle de l'utilisateur pour l’accès au controller
if (is_array($routes[$page]) && isset($routes[$page]['security'])) {
    if (!userHasRole($routes[$page]['security'])) {

        // Si l'utilisateur n'est pas autorisé en accès, mais qu'en fait… il n'est pas authentifié !
        // Alors on le redirige vers la page de connexion
        // Et on le ramènera vers la page qu'il voulait initialement
        if (!isUserAuthenticated()) {
            $_SESSION['referrer'] = $page;      // On mémorise la page que l'utilisateur voulait
            header('Location: ?page=login');    // On l'amène vers la page de connexion
        } else {
            $error = "Que faites-vous ici ? 😅";

            logCriticalMessage($error);
            require CONTROLLERS_DIR . '/error.php';
            run($error);
            die();
        }
    }
}

require CONTROLLERS_DIR . '/' . $controller;
run();
