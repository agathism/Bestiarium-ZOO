<!DOCTYPE html>
<html lang="fr">

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

    <main>
        <div class="flex justify-center align-items-center my-26">
            <form method="POST" action="index.php?action=register" class="form">
                <p class="form-title">Inscrivez-vous</p>
                <div class="input-container">
                    <input type="text" placeholder="Nom d'utilisateur">
                    <span>
                    </span>
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Mot de passe">
                </div>
                <button type="submit" class="submit bg-emerald-950" formaction="index.php?action=register">
                    S'inscrire
                </button>
                <p class="signup-link">
                    Vous avez un compte?
                    <a href="login.php">Connectez-vous</a>
                </p>
            </form>
        </div>
    </main>


    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>