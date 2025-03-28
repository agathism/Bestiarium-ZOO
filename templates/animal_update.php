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
    require_once("block/headerTwo.php");
    ?>
    <main>
        <div class="container">
            <div class="modal">
                <div class="modal__header">
                    <h3 class="modal__title">Mettre à jour</h3>
                </div>
                <div class="modal__body">
                    <div class="input">
                        <form method="POST" action="add.php" class="m-5">
                            <label for="name" class="input__label">Animal</label>
                            <input id="name" type="text" name="name" class="input__field" minlength="4" maxlength="32" size="50" required value="<?= $_POST['name'] ?? '' ?> ">
                            <p class="input__description">
                                Le nom doit contenir un maximum de 32 charactères.
                            </p>
                            <?php if (isset($errors['name'])): ?>
                                <p class="text-danger"><?= $errors['name'] ?></p>
                            <?php endif; ?>
                            <label for="species" class="input__label">Espèces</label>
                            <input type="text" name="species" class="input__field" minlength="4" maxlength="32" size="50" required value="<?= $_POST['species'] ?? '' ?> ">
                            <p class="input__description">
                                L'espèce doit contenir un maximum de 32 charactères.
                            </p>
                            <?php if (isset($errors['species'])): ?>
                                <p class="text-danger"><?= $errors['species'] ?></p>
                            <?php endif; ?>
                            <label for="family" class="input__label">Famille</label>
                            <input id="family" type="text" name="family" class="input__field" minlength="4" maxlength="32" size="50" required value="<?= $_POST['family'] ?? '' ?> ">
                            <p class="input__description">
                                La famille doit contenir un maximum de 32 charactères.
                            </p>
                            <?php if (isset($errors['family'])): ?>
                                <p class="text-danger"><?= $errors['family'] ?></p>
                            <?php endif; ?>
                            <label for="habitat" class="input__label">Habitat</label>
                            <input id="habitat" type="text" name="habitat" class="input__field" minlength="4" maxlength="32" size="50" required value="<?= $_POST['habitat'] ?? '' ?> ">
                            <p class="input__description">
                                L'habitat doit contenir un maximum de 32 charactères.
                            </p>
                            <?php if (isset($errors['habitat'])): ?>
                                <p class="text-danger"><?= $errors['habitat'] ?></p>
                            <?php endif; ?>
                            <label for="lifespan" class="input__label">Durée de vie</label>
                            <input type="text" name="lifespan" class="input__field" min="10" max="500" size="50" required value="<?= $_POST['lifespan'] ?? '' ?> ">
                            <p class="input__description">
                                La durée de vie ne peut dépasser 500.
                            </p>
                            <?php if (isset($errors['lifespan'])): ?>
                                <p class="text-danger"><?= $errors['lifespan'] ?></p>
                            <?php endif; ?>
                            <label for="height" class="input__label">Taille</label>
                            <input id="height" type="text" name="height" class="input__field" min="1" max="600" size="50" required value="<?= $_POST['height'] ?? '' ?> ">
                            <p class="input__description">
                                La taille ne peut dépasser 600.
                            </p>
                            <?php if (isset($errors['height'])): ?>
                                <p class="text-danger"><?= $errors['height'] ?></p>
                            <?php endif; ?>
                            <label for="weight" class="input__label">Poids</label>
                            <input id="weight" type="number" name="weight" class="input__field" min="1" max="7000" size="50" required value="<?= $_POST['weight'] ?? '' ?> ">
                            <p class="input__description">
                                Le poids ne peut dépasser 7000.
                            </p>
                            <?php if (isset($errors['weight'])): ?>
                                <p class="text-danger"><?= $errors['weight'] ?></p>
                            <?php endif; ?>
                            <label for="introduction" class="input__label">Description</label>
                            <input type="text" class="input__field input__field--textarea" name="introduction" minlength="4" maxlength="500" size="50" required value="<?= $_POST['introduction'] ?? '' ?> ">
                            <p class="input__description">
                                La description peut contenir un maximum de 500 charactères.
                            </p>
                            <?php if (isset($errors['introduction'])): ?>
                                <p class="text-danger"><?= $errors['introduction'] ?></p>
                            <?php endif; ?>
                            <div class="modal__footer">
                                <a href="animal_update?id=<?= $animal["id"] ?>" class="button button--primary cursor-pointer">Modifier</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>