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
    require_once("block/header.php");
    ?>
    <main>
        
    <form class="form">
       <p class="form-title">Connectez-vous</p>
        <div class="input-container">
          <input type="username" placeholder="Nom d'utilisateur">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="Mot de passe">
        </div>
         <button type="submit" class="submit"><a href="index_admin.php">
        Se connecter</a>
      </button>

      <p class="signup-link">
        Pas de compte?
        <a href="register.php">Inscrivez-vous</a>
      </p>
   </form>

    </main>
    <?php
    require_once("block/footer.php");
    ?>
</body>

</html>