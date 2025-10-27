<?php

// Chargement des librairies PHP du projet
require '../vendor/autoload.php';

// Constantes globales
define('PROJECT_DIR', dirname(__DIR__));
const APP_DIR = PROJECT_DIR . '/app';
const CONTROLLERS_DIR = APP_DIR . '/controllers';
const VIEWS_DIR = APP_DIR . '/templates';
const MODELS_DIR = APP_DIR . '/data';


// Appel du controller pour traiter la page web demandée
require CONTROLLERS_DIR . '/users/show.php';
