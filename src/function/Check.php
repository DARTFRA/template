<?php

/**
 * Vérifie si l'utilisateur est connecter.
 * Si ce n'est pas le cas, affiche la page connexion et stoppe l'exécution.
 *
 * @return void
 */
function checkAuth(): void
{
    if (!isset($_SESSION['user'])) {
        // Affiche la page 403 existante
        require_once ROOT . '/../views/login.php';
        exit();
    }
}
