<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <?php
    require_once("block/header.php");
    ?>
    <main>
        <div class="container flex flex-row w-full">
            <h3 class="modal__title text-2xl font-medium">Nouvel animal</h3>
            <div class="input flex flex-column">
                <form method="POST" action="index.php?action=add" class="m-5">
                    <label for="name" class="input__label font-medium text-base">Animal</label>
                    <input id="name" type="text" name="name" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" minlength="4" maxlength="32" size="50" value="<?= $_POST['name'] ?? '' ?> ">
                    <p class="input__description">
                        Le nom doit contenir un maximum de 32 charactères.
                    </p>
                    <?php if (isset($errors['name'])): ?>
                        <p class="text-danger"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                    <label for="species" class="input__label font-medium text-base">Espèces</label>
                    <input type="text" name="species" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" minlength="4" maxlength="32" size="50" value="<?= $_POST['species'] ?? '' ?> ">
                    <p class="input__description">
                        L'espèce doit contenir un maximum de 32 charactères.
                    </p>
                    <?php if (isset($errors['species'])): ?>
                        <p class="text-danger"><?= $errors['species'] ?></p>
                    <?php endif; ?>
                    <label for="family" class="input__label font-medium text-base">Famille</label>
                    <input id="family" type="text" name="family" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" minlength="4" maxlength="32" size="50" value="<?= $_POST['family'] ?? '' ?> ">
                    <p class="input__description">
                        La famille doit contenir un maximum de 32 charactères.
                    </p>
                    <?php if (isset($errors['habitat'])): ?>
                        <p class="text-danger"><?= $errors['habitat'] ?></p>
                    <?php endif; ?>
                    <label for="image" class="input__label font-medium text-base">Image</label>
                    <input id="image" type="tex" name="image" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" min="1" max="7000" size="50" value="<?= $_POST['image'] ?? '' ?> ">
                    <p class="input__description">
                        Le poids ne peut dépasser 7000.
                    </p>
                    <?php if (isset($errors['image'])): ?>
                        <p class="text-danger"><?= $errors['image'] ?></p>
                    <?php endif; ?>
                    <label for="height" class="input__label font-medium text-base">Taille</label>
                    <input id="height" type="number" name="height" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" min="1" max="600" size="50" value="<?= $_POST['height'] ?? '' ?> ">
                    <p class="input__description">
                        La taille ne peut dépasser 600.
                    </p>
                    <?php if (isset($errors['height'])): ?>
                        <p class="text-danger"><?= $errors['height'] ?></p>
                    <?php endif; ?>
                    <label for="lifespan" class="input__label font-medium text-base">Durée de vie</label>
                    <input type="number" name="lifespan" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" min="10" max="500" size="50" value="<?= $_POST['lifespan'] ?? '' ?> ">
                    <p class="input__description">
                        La durée de vie ne peut dépasser 500.
                    </p>
                    <?php if (isset($errors['lifespan'])): ?>
                        <p class="text-danger"><?= $errors['lifespan'] ?></p>
                    <?php endif; ?>
                    <label for="weight" class="input__label font-medium text-base">Poids</label>
                    <input id="weight" type="number" name="weight" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100" min="1" max="7000" size="50" value="<?= $_POST['weight'] ?? '' ?> ">
                    <p class="input__description">
                        Le poids ne peut dépasser 7000.
                    </p>
                    <?php if (isset($errors['weight'])): ?>
                        <p class="text-danger"><?= $errors['weight'] ?></p>
                    <?php endif; ?>
                    <label for="introduction" class="input__label font-medium text-base">Description</label>
                    <input type="text" class="input__field block p-1 mt-1 border rounded-sm border-zinc-400 bg-neutral-100 max-w h-40" name="introduction" minlength="4" maxlength="500" size="50" value="<?= $_POST['introduction'] ?? '' ?> ">
                    <p class="input__description ">
                        La description peut contenir un maximum de 500 charactères.
                    </p>
                    <?php if (isset($errors['introduction'])): ?>
                        <p class="text-danger"><?= $errors['introduction'] ?></p>
                    <?php endif; ?>
                    <div class="modal__footer">
                        <button class="cursor-pointer transition-all 
bg-gray-700 text-white px-6 py-2 rounded-lg
border-green-400
border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px]
active:border-b-[2px] active:brightness-90 active:translate-y-[2px] hover:shadow-xl hover:shadow-green-300 shadow-green-300 active:shadow-none">
                            Valider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>