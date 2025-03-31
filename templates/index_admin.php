<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <?php
    // Template de la route admin
    // URL : index.php?action=admin

    require_once("block/headerTwo.php");
    ?>
    <main>
        <h1 class="text-center mb-4">Bienvenue</h1>
        <div class="m-5">
            <a href="index.php?action=add" class="max-w-32 bg-emerald-600 text-white rounded-sm items-center justify-center flex border-2 shadow-lg hover:bg-emerald-400 text-emerald-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">Ajouter un animal</a>
        </div>
        <div class="mt-4 flex flex-row justify-center align-items-center col-md-4 mb-4 col-sm-6 gap-10">
            <div>
                <?php foreach ($animals as $animal): ?>
                    <div class="w-64 h-80 bg-neutral-600 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center hover:bg-neutral-800 hover:shadow-2xl hover:shadow-emerald-400 transition-shadow">
                        <div class="w-40 h-30 rounded-2xl">
                            <img src="images/<?= $animal->getImage() ?>" alt="<?= $animal->getName() ?>">
                        </div>
                        <div>
                            <h5><?= $animal->getName() ?></h5>
                            <p><?= $animal->getIntroduction() ?> </p>
                        </div>
                        <div>
                            <a href="index.php?action=edit&id=<?= $animal->getId() ?>"
                                class="max-w-32 bg-sky-600 text-white rounded-sm items-center justify-center flex border-2 shadow-lg hover:bg-sky-400 text-emerald-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">Modifier
                            </a>
                            <a href="index.php?action=delete&id=<?= $animal->getId() ?>"
                                class="max-w-32 bg-red-600 text-white rounded-sm items-center justify-center flex border-2 shadow-lg hover:bg-red-400 text-emerald-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">Supprimer
                            </a>
                        </div>
                    </div>
                    <!-- </div> -->
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </main>

    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>