<?php
namespace App\Manager;
use App\Model\Animal;

class AnimalManager extends DatabaseManager
{
    public function selectAll(): array
    {
        $requete = self::getConnexion()->prepare("SELECT * FROM animal;");
        $requete->execute();
        $arrayAnimals = $requete->fetchAll();
        //Je parcours le tableau de résultats 
        $animals = [];
        foreach ($arrayAnimals as $arrayAnimal) {
            //J'instancie un objet avec les données d'une Voiture ( tableau associatif)
            $animals[] = new Animal(
            $arrayAnimal["id"],
            $arrayAnimal["name"], 
            $arrayAnimal["species"], 
            $arrayAnimal["family"], 
            $arrayAnimal["habitat"], 
            $arrayAnimal["diet"], 
            $arrayAnimal["lifespan"], 
            $arrayAnimal["weight"], 
            $arrayAnimal["height"], 
            $arrayAnimal["image"], 
            $arrayAnimal["introduction"]);
        }

        return $animals;
    }
 
    /**
     * Récupère une voiture par ID de la base de données.
     * @param  int $id
     * @return Animal
     */
    public function selectByID(int $id): Animal|false
    {
        $requete = self::getConnexion()->prepare("SELECT * FROM animal WHERE id = :id;");
        $requete->execute([
            ":id" => $id
        ]);
        $arrayAnimal = $requete->fetch();
        if(!$arrayAnimal) {

            return false;
        }
        //Retourner l'instance de Car créée avec l'occurence Car de la BDD
        return new Animal(
        $arrayAnimal["id"], 
        $arrayAnimal["name"], 
        $arrayAnimal["species"], 
        $arrayAnimal["family"], 
        $arrayAnimal["habitat"], 
        $arrayAnimal["diet"], 
        $arrayAnimal["lifespan"], 
        $arrayAnimal["weight"], 
        $arrayAnimal["height"], 
        $arrayAnimal["image"], 
        $arrayAnimal["introduction"]);
    }

    /**
     * insertCar
     *
     * @param  PDO $pdo
     * @param  Car $car
     * @return bool
     */
    public function insertAnimal(Animal $animal): bool
    {
        $requete = self::getConnexion()->prepare("INSERT INTO animal (name,species,family,habitat,diet,lifespan,weight,height,image,introduction) VALUES (:name,:species,:family,:habitat,:diet,:lifespan,:weight,:height,:image,:introduction);");
        $requete->execute([
            ":name" => $animal->getName(),
            ":species" => $animal->getSpecies(),
            ":family" => $animal->getFamily(),
            ":habitat" => $animal->getHabitat(),
            ":diet" => $animal->getDiet(),
            ":lifespan" => $animal->getLifespan(),
            ":weight" => $animal->getWeight(),
            ":height" => $animal->getHeight(),
            ":image" => $animal->getImage(),
            ":introduction" => $animal->getIntroduction()
        ]);

        return $requete->rowCount() > 0;
    }

    /**
     * updateCarByID
     *
     * @param  PDO $pdo
     * @param  Car $car
     * @return bool
     */
    public function updateAnimal(Animal $animal): bool
    {
        $requete = self::getConnexion()->prepare("UPDATE animal SET name = :name, species = :species, family = :family, habitat = :habitat, diet = :diet, lifespan = :lifespan, weight = :weight, height = :height, image = :image, introduction = :introduction WHERE id = :id;");
        $requete->execute(
            [
                ":name" => $animal->getName(),
                ":species" => $animal->getSpecies(),
                ":family" => $animal->getFamily(),
                ":habitat" => $animal->getHabitat(),
                ":diet" => $animal->getDiet(),
                ":lifespan" => $animal->getLifespan(),
                ":weight" => $animal->getWeight(),
                ":height" => $animal->getHeight(),
                ":image" => $animal->getImage(),
                ":introduction" => $animal->getIntroduction(),
                ":id" => $animal->getId()
            ]
        );

        return $requete->rowCount() > 0;
    }

    /**
     * deleteCarByID
     *
     * @param  PDO $pdo
     * @param  int $id
     * @return bool
     */
    public function deleteByID(int $id): bool
    {
        $requete = self::getConnexion()->prepare("DELETE FROM animal WHERE id = :id;");
        $requete->execute([
            ":id" => $id
        ]);

        return $requete->rowCount() > 0;
    }
}