<?php

namespace App\Controller;

use App\Manager\AnimalManager;
use App\Model\Animal;

class AdminController
{
    private AnimalManager $animalManager;

    public function __construct()
    {
        $this->animalManager = new AnimalManager();
    }

    // Route DashboardAdmin (ancien admin.php)
    // HTTP Method: GET
    // URL: index.php?action=admin
    public function dashboardAdmin()
    {
        //Récuperer les animaux
        $animals = $this->animalManager->selectAll();
        //Afficher les voitures dans la template
        require_once("./templates/index_admin.php");
    }

    // Route AddAnimal (ancien add.php)
    // HTTP Method: POST
    // URL: index.php?action=add
    public function addAnimal()
    {
        $errors = [];
        // Si le formulaire est validé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = $this->validateAnimalForm($errors, $_POST);

            if (empty($errors)) {
                //Instancier une objet animal avec le sdonnées du formulaire
                $animal = new Animal(
                null, 
                $_POST["name"], 
                $_POST["species"], 
                $_POST["family"], 
                $_POST["habitat"], 
                $_POST["diet"], 
                $_POST["lifespan"], 
                $_POST["weight"], 
                $_POST["height"], 
                $_POST["image"], 
                $_POST["introduction"]);
                // Ajouter la voiture en BDD  et rediriger
                $animalManager = new AnimalManager();
                $animalManager->insertAnimal($animal);
                $this->dashboardAdmin();
                exit();
            }
        }
        require_once("./templates/animal_insert.php");
    }

    // Route EditAnimal (ancien update.php)
    // HTTP Method: GET, POST
    // URL: index.php?action=edit&id=1
    public function editAnimal(int $id)
    {
        $animal = $this->animalManager->selectByID($id); // Un seul connect DB par page

        // Vérifier si l'animal avec l'ID existe en BDD
        if (!$animal) {
            header("Location: index.php?action=admin");
            exit();
        }

        $errors = [];
        // Si le formulaire est validé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Vérifier les champs du formulaire
            $errors = $this->validateAnimalForm($errors, $_POST);
            // Si le formulaire n'a pas renvoyé d'erreurs
            if (empty($errors)) {

                // Mettre à jour la voiture $animal et rediriger
                $animal->setName($_POST["name"]);
                $animal->setSpecies($_POST["species"]);
                $animal->setFamily($_POST["family"]);
                $animal->setHabitat($_POST["habitat"]);
                $animal->setDiet($_POST["diet"]);
                $animal->setSpecies($_POST["lifespan"]);
                $animal->setLifespan($_POST["lifespan"]);
                $animal->setHeight($_POST["height"]);
                $animal->setImage($_POST["image"]);
                $animal->setIntroduction($_POST["introduction"]);

                $this->animalManager->updateAnimal($animal);

                header("Location: index.php?action=admin");
                exit();
            }
        }
        require_once("./templates/animal_update.php");
    }

    public function deleteAnimal(int $id)
    {
        $animal = $this->animalManager->selectByID($id);

        //Vérifier si la voiture avec l'ID existe en BDD
        if (!$animal) {
            header("Location: index.php?action=admin");
            exit();
        }

        // Si le formulaire est validé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Supprimer la voiture et rediriger
            $this->animalManager->deleteByID($id);

            header("Location: index.php?action=admin");
            exit();
        }

        require_once("./templates/animal_delete.php");
    }
    public function validateAnimalForm(array $errors, array $animalForm): array
    {
        $requiredFields = [
            "name" => "le nom de l'animal est manquant",
            "species" => "l'espèce de l'animal est manquante",
            "family" => "la famille de l'animal est manquante",
            "habitat" => "l'habitat de l'animal est manquante",
            "diet" => "le régime de l'animal est manquante",
            "lifespan" => "la durée de vie de l'animal est manquante",
            "weight" => "le poids de l'animal est manquante",
            "height" => "la taille de l'animal est manquante",
            "image" => "l'image' de l'animal est manquante",
            "introduction" => "l'introduction de l'animal est manquante",
        ];

        foreach ($requiredFields as $field => $errorMessage) {
            if (empty($animalForm[$field])) {
                $errors[$field] = $errorMessage;
            }
        }
        //Démo class animalFormValidator

        return $errors;
    }

    public function verifySession(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["username"])) {
            header("Location: index.php");
            exit();
        }
    }
}