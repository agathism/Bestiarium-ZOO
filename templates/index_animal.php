<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiarium</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    require_once("block/header.php");
    ?>

    <main>
        <h1 class="text-center mb-4 xl">Liste des animaux</h1>
        <div class="mt-4 flex flex-row justify-center align-items-center col-md-4 mb-4 col-sm-6 gap-10">
            <div class="font-medium "> 
                <?php foreach ($animals as $animal): ?>
                    <div class="w-64 h-80 bg-neutral-600 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center hover:bg-neutral-800 hover:shadow-2xl hover:shadow-emerald-400 transition-shadow">
                        <div class="w-30 h-30 rounded-2xl">
                            <img src="images/<?= $animal->getImage() ?>" alt="<?= $animal->getName() ?>">
                        </div>
                        <div>
                            <h5 class="font-extrabold"><?= $animal->getName() ?></h5>
                            <p><?= $animal->getIntroduction() ?> </p>
                        </div>
                        <a href="index.php?action=detail&id=<?= $animal->getId() ?><?= $animal->getName() ?>" class="bg-green-500 font-extrabold p-2 px-6 rounded-xl hover:bg-green-600 transition-colors">Voir plus</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>