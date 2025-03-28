<?php

namespace App\Controller;

use App\Manager\AnimalManager;

/**
 * IndexController
 * Contient les routes accessibles par les visiteurs, page accueil, détail
 */
class IndexController
{

    private AnimalManager $animalManager;

    public function __construct()
    {
        // Quand on crée un IndexController
        // Il contiendra automatiquement un AnimalManager
        // Utilisable avec $this->animalManager
        $this->animalManager = new AnimalManager();
    }

    // Route HomePage -> URL : index.php
    public function homePage()
    {
        //Récupérer les animaux
        $animals = $this->animalManager->selectAll();
        //Afficher les animaux dans le template
        require_once("./templates/index_animal.php");
    }

    // Route DetailAnimal -> URL: index.php?action=detail&id=10 
    public function detailAnimal(int $id)
    {
        //Récupérer l'animal
        $animal = $this->animalManager->selectByID($id);
        if ($animal != false) {
            //Afficher l'animal dans le template
            require_once("./templates/animal_detail.php");
        } else {
            header("Location: index.php");
            exit();
        }
    }
}
