<?php

require_once MODELS_DIR . '/user_manager.php';

function run(): void
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si on a envoyé un formulaire

        // On cherche si l'utilisateur existe avec le 'username' donné
        $user = findUserByUsername($_POST['username']);

        if ($user !== null) { // Si l'utilisateur existe

            if (password_verify($_POST['password'], $user['password'])) { // Si son mot de passe est correct
                $_SESSION['user'] = $user; // On enregistre l'utilisateur dans la session 🥳🍾

                // Redirection vers la page d'accueil
                header('Location: ?page=homepage');
                die();
            }
        }
        // Quelque chose de grave, très grave s'est produit
        // -> Affichage d'un message d'erreur
        $error = 'Identifiants incorrects';
    }

    // Affichage de la liste des utilisateurs
    require VIEWS_DIR . '/security/login.html.php';
}
