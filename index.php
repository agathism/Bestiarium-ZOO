<?php
require_once("header.php");
require_once("Model/Animal.php");
require_once("Manager/DatabaseManager.php");
require_once("Manager/AnimalManager.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiarium</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <?php
    $animalManager = new AnimalManager();
    $animals = $animalManager->selectAll();
    //  var_dump($animals);

    $title = "Bienvenue";
    ?>
    <h1>Le Monde Animal Extraordinaire</h1>
    <div class="flex flex-column flex-wrap">
        <?php foreach ($animals as $animal): ?>
            <div class="grid grid-cols-1 gap-6">
                <!-- Carte animal-->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition transform hover:scale-105">
                    <div class="p-4">
                        <h2 class="text-2xl font-bold text-gray-800"><?= $animal->getName() ?></h2>
                        <p class="text-gray-600 text-sm"><?= $animal->getIntroduction() ?></p>
                        <p><?= $animal->getDiet() ?> </p> <p><?= $animal->getHabitat() ?></p>
                        <a href="details.php?animal=lion" class="mt-3 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Voir Plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
</body>

</html>