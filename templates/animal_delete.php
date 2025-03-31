<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Template de la route delete
    // URL : index.php?action=delete&id=1
    require_once("block/header.php");

    ?>
    <main>
        <h1>Confirmer la suppression de <?= $animal->getName() ?> <?= $animal->getSpecies() ?> ?</h1>

        <form class="p-3" method="POST" action="index.php?action=delete&id=<?= $animal->getId(); ?>">
            <!-- Redirection admin -->
            <input class="btn btn-outline-primary me-3" type="submit" value="Annuler" formaction="index.php?action=admin">
            <!-- Redirection index -->
            <input class="btn btn-outline-danger" type="submit" value="Confirmer">
        </form>

    </main>

    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>