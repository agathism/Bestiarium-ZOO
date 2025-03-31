<?php

namespace App\Manager;

use App\Model\User;

// Class CarForm... ?
class UserManager extends DatabaseManager
{
    //Class UserManager
    public function selectByUsername(string $username): User|false
    {
        $requete = self::getConnexion()->prepare("SELECT * FROM user WHERE username = :username;");
        $requete->execute([
            ":username" => $username
        ]);
        $arrayUser = $requete->fetch();
        if(!$arrayUser){
            return false;
        }
        return new User( $arrayUser["id"], $arrayUser["username"], $arrayUser["password"]);
    }
    public function insertUser(User $user): bool
   {
       $requete = self::getConnexion()->prepare("INSERT INTO user (username,password) VALUES (:username,:password);");

       $requete->execute([
           "username" => $user->getUsername(),
           "password" => $user->getPassWord()
       ]);
       return $requete->rowCount() > 0;
   }
}