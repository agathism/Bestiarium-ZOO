<?php

require_once("Manager/UserManager.php");
require_once("functions.php");
$errors = [];

//Me permet de créer le MDP HASHÉ et de copié coller en bdd
$pass = password_hash("admin", PASSWORD_DEFAULT);
var_dump($pass);