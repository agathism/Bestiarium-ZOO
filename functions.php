<?php

function validateAnimalForm(array $errors, array $animalForm): array
{
    if (empty($animalForm["animal"])) {
        $errors["animal"] = "le nom de l'animal est manquant";
    }
    if (empty($animalForm["species"])) {
        $errors["species"] = "l'espèce de l'animal est manquante";
    }
    if (empty($animalForm["family"])) {
        $errors["family"] = "la famille de l'animal est manquante";
    }
    if (empty($animalForm["diet"])) {
        $errors["diet"] = "le régime de l'animal est manquante";
    }
    if (empty($animalForm["lifespan"])) {
        $errors["lifespan"] = "la durée de vie de l'animal est manquante";
    }
    if (empty($animalForm["weight"])) {
        $errors["weight"] = "le poids de l'animal est manquante";
    }
    if (empty($animalForm["height"])) {
        $errors["height"] = "la taille de l'animal est manquante";
    }
    if (empty($animalForm["image"])) {
        $errors["image"] = "l'image de l'animal est manquante";
    }
    //Démo class CarFormValidator

    return $errors;
}

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
