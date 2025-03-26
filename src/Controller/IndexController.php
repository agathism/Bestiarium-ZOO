<?php

namespace App\Controller;

use App\Manager\AnimalManager;

/**
 * IndexController
 * Contient les routes acèssible pas le visiteurs, page accueil, détail
 */
class IndexController{
    
    private AnimalManager $animalManager;

    public function __construct(){
        // Quand on crée un IndexController
        // Il contiendra automatiquement un AnimalManager
        // Utilisable avec $this->AnimalManager
        $this->animalManager = new AnimalManager();
    }

    // Route HomePage -> URL : index.php
    public function homePage(){
        //Récuperer les voitures
        $cars = $this->animalManager->selectAll();
        //Afficher les voitures dans la template
        require_once("./templates/index_car.php");
    }

    // Route DetailCar -> URL: index.php?action=detail&id=10 
    public function detailCar(int $id){
         //Récuperer les voitures
         $car = $this->animalManager->selectByID($id);
         if($car != false){
             //Afficher les voitures dans la template
             require_once("./templates/car_detail.php");
         }else{
            header("Location: index.php");
            exit();
         }
 }
}