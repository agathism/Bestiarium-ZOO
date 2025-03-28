<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Template de la route admin
    // URL : index.php?action=admin

    require_once("block/headerTwo.php");
    ?>
    <main>
        <div class="mt-4">
            <h1 class="text-center mb-4">Bienvenue</h1>
            <div class="m-5">
                <a href="index.php?action=add" class="btn btn-success">Ajouter un animal</a>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <?php foreach ($animals as $animal): ?>
                    <div class="card col-md-4 mb-4 col-sm-6">
                    <img src="images/<?= $animal->getImage() ?>" alt="<?= $animal->getName() ?>" >
                        <div class="card_content">
                            <h5 class="card_title"><?= $animal->getName() ?></h5>
                            <p class="card_description"><?= $animal->getHabitat() ?> </p>
                            <div class="d-flex justify-content-between">
                                <a href="index.php?action=edit&id=<?= $animal->getId() ?>" class="btn btn-primary">Modifier</a>
                                <a href="index.php?action=delete&id=<?= $animal->getId() ?>" class="btn btn-danger">Supprimer</a>
                            </div>
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