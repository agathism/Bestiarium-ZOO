<?php
namespace App\Controller;

use APP\Manager\AnimalManager;
use App\Model\Animal;

class AdminController
{
    private AnimalManager $animalManager;

    public function __construct()
    {
        $this->animalManager = new AnimalManager();
    }

     // Route DashboardAdmin ( ancien admin.php ) 
    // URL : index.php?action=admin
    public function dashboardAdmin()
    {
        //Récuperer les animaux
        $animals = $this->animalManager->selectAll();
        //Afficher les voitures dans la template
        require_once("./templates/index_admin.php");
    }

    // Route DashboardAdmin ( ancien add.php ) 
    // URL : index.php?action=add
    public function addAnimal()
    {
        $errors = [];
        // Si le formulaire est validé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = $this->validateAnimalForm($errors, $_POST);

            if (empty($errors)) {
                //Instancier une objet animal avec le sdonnées du formulaire
                $animal = new Animal(null, $_POST["name"], $_POST["species"], $_POST["family"], $_POST["habitat"], $_POST["diet"], $_POST["lifespan"], $_POST["weight"], $_POST["height"], $_POST["introduction"]);
                // Ajouter la voiture en BDD  et rediriger
                $animalManager = new animalManager();
                $animalManager->insert($animal);
                $this->dashboardAdmin();
                exit();
            }
        }
        require_once("./templates/animal_insert.php");
    }

    // Route editAnimal ( ancien update.php ) 
    // URL : index.php?action=edit&id=1
    public function editAnimal(int $id)
    {
        $animal = $this->animalManager->selectByID($id); // Un seul connect DB par page

        //Vérifier si la voiture avec l'ID existe en BDD
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
                $animal->setWeight($_POST["weight"]);
                $animal->setHeight($_POST["height"]);
                $animal->setIntroduction($_POST["introduction"]);

                $this->animalManager->update($animal);

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
        
        //Si le form est validé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Supprimer la voiture et rediriger
            $this->animalManager->deleteByID($animal->getId());

            header("Location: index.php?action=admin");
            exit();
        }

        require_once("./templates/animal_delete.php");
    }
    function validateAnimalForm(array $errors, array $animalForm): array
    {
        if (empty($animalForm["name"])) {
            $errors["animal"] = "le nom de l'animal est manquant";
        }
        if (empty($animalForm["species"])) {
            $errors["species"] = "l'espèce de l'animal est manquante";
        }
        if (empty($animalForm["family"])) {
            $errors["family"] = "la famille de l'animal est manquante";
        }
        if (empty($animalForm["habitat"])) {
            $errors["habitat"] = "l'habitat de l'animal est manquante";
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
        if (empty($animalForm["introduction"])) {
            $errors["introduction"] = "l'introduction de l'animal est manquante";
        }
        //Démo class animalFormValidator
        
        return $errors;
    }
}