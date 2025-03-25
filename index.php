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
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    $animalManager = new AnimalManager();
    $animals = $animalManager->selectAll();
    //  var_dump($animals);

    $title = "Bienvenue";
    ?>
    <main>
        <h1>Le Monde Animal Extraordinaire</h1>
        <div>
            <?php foreach ($animals as $animal): ?>
                <div class="card  gap-6">
                    <!-- <img src="images/lion.jpg"/> -->
                    <!-- Carte animal-->
                    <div class="card_content bg-white rounded-2xl hidden">
                            <h2 class="card_title text-2xl font-bold text-gray-800"><?= $animal->getName() ?></h2>
                            <p class="card_description text-gray-600 text-sm"><?= $animal->getIntroduction() ?></p>
                            <p><?= $animal->getDiet() ?> </p>
                            <p><?= $animal->getHabitat() ?></p>
                            <a href="fiche.php?animal=" class="mt-3 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Voir Plus</a>
                    </div>
                <?php endforeach; ?>
                </div>
    </main>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>