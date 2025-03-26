<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styleThree.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <?php
    // Template de la route register
    // URL : index.php?action=register

    $title = "Inscription";
    require_once("block/header.php");
    ?>

    <form method="POST" action="index.php?action=register">

        <span class="d-block p-2 text-bg-dark">

            <label for="Username">Nom d'utilisateur</label>
            <input type="text" name="username">

            <?php if (isset($errors["username"])) { ?>
                <p class="text-danger">
                    <?= $errors["username"] ?>
                </p>
            <?php } ?>

        </span>

        <span class="d-block p-2 text-bg-dark">

            <label for="password">Mot de passe</label>
            <input type="password" name="password">

            <?php if (isset($errors["password"])) { ?>
                <p class="text-danger">
                    <?= $errors["password"] ?>
                </p>
            <?php } ?>

        </span>
        <span class="d-block p-2 text-bg-dark">

            <button>Valider</button>
            <button formaction="index.php">Annuler</button>

        </span>

    </form>

    <a href="login.php">Se connecter</a>

    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>