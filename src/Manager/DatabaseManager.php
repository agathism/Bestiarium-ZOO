<?php
namespace App\Manager;

use PDO;
use PDOException;

class DatabaseManager
{
    private static ?PDO $pdo = null;


    private static function connectDB(): PDO
    {
        $host = 'localhost';
        $dbName = 'zoo_animals';
        $user = 'root';
        $password = '';

        try {
            return new PDO(
                "mysql:host=$host;dbname=$dbName;charset=utf8",
                $user,
                $password,
                [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
                );
            return $pdo;
        } catch (PDOException $e) {
            die ("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    
    protected static function getConnexion()
    {
        //Si la connexion n'existe pas je la créé 
        //Self c''st comme si on écrivait databaseManager dans lui même. 
        if (self::$pdo === null) {
            //Créer connexion
            //Comme on va réeutiliser connectDb on va le mettre en static en utilisant self::suivi du nom de la bdd
            self::$pdo = self::connectDB();
            //Sinon je la retourne
        }
        return self::$pdo;
    }
}