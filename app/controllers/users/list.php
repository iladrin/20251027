<?php

// Chargement des utilisateurs
$users = require MODELS_DIR . '/users.php';

// Affichage de la liste des utilisateurs
require VIEWS_DIR . '/users/list.html.php';
