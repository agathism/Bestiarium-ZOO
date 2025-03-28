<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php
    require_once("block/header.php");
    ?>
    <main>
    <h1 class="text-center"><?= $animal->getName() ?></h1>
        <div class="col-4 d-flex p-3 justify-content-center">
            <div class="p-2">
                <h2><?= $animal->getName() ?></h2>
                <p><?= $animal->getDescription() ?></p>
            </div>
        </div>
    </main>
</body>
</html>