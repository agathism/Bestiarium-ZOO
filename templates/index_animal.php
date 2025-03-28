<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiarium</title>
    <link rel="stylesheet" href="styles/styleThree.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    require_once("block/header.php");
    ?>
    
    <main>
        <div class="mt-4">
            <h1 class="text-center mb-4 xl">Bienvenue</h1>
            <div class="flex flex-wrap justify-center align-items-center gap-4">
                <?php foreach ($animals as $animal): ?>
                    <div class="card relative bg-zinc-100 rounded-sm w-sm h-50 col-md-4 mb-4 col-sm-6">
                    <img src="images/<?= $animal->getImage() ?>" class="size-full" alt="<?= $animal->getName() ?>">
                    <a href="index.php?action=detail&id=<?= $animal->getId() ?><?= $animal->getName() ?>">Voir plus</a>
                        <div class="card_content">
                            <h5 class="card_title"><?= $animal->getName() ?></h5>
                            <p class="card_description"><?= $animal->getHabitat() ?> </p>
                        </div>
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