<?php



//Class SessionChecker
/**
 * Vérifie si une session est active et redirige vers la page d'accueil si ce n'est pas le cas.
 *
 * @return void
 */
function verifySession(): void
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit();
    }
    // functions.php
}
