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
  //Me permet de créer le MDP HASHÉ et de copié coller en bdd
  ?>
  <main>
    <div class="flex flex-row justify-center align-items-center my-26">
      <form method="POST" action="index.php?action=login" class="block p-1 rounded-sm bg-gray-200 w-sm h-full">
        <p class="form-title text-black text-lg/10 font-medium text-center my-6">Connectez-vous</p>
        <div class="input-container relative text-black text-sm/10 text-center my-6">
          <label>Nom d'utilisateur:</label>
          <input type="text" name="username" class="w-3xs border border-zinc-400 bg-zinc-100 p-1 pr-2 text-sm/8 rounded-sm">
          <?php if (isset($errors["username"])) { ?>
            <p class="text-danger">
              <?= $errors["username"] ?>
            </p>
          <?php } ?>
        </div>
        <div class="input-container relative text-black text-sm/10 text-center my-6">
          <label>Mot de passe:</label>
          <input type="text" name="password" class="w-3xs border border-zinc-400 bg-zinc-100 p-1 pr-2 text-sm/8 rounded-sm">
          <?php if (isset($errors["password"])) { ?>
            <p class="text-danger">
              <?= $errors["password"] ?>
            </p>
          <?php } ?>
        </div>
        <div class="my-4">
          <button type="submit" class="submit text-white w-full rounded-sm block text-sm/8 font-medium py-1 px-2 bg-emerald-500 cursor-pointer uppercase">
            Se connecter
          </button>
        </div>
        <?php if (isset($errors["username"])) { ?>
          <p class="text-danger">
            <?= $errors["username"] ?>
          </p>
        <?php } ?>

        <p class="signup-link text-sm/8 text-center">
          Pas de compte?
          <a href="register.php" class="underline">Inscrivez-vous</a>
        </p>
      </form>
    </div>
  </main>
  <?php
  require_once("block/footer.php");
  ?>
</body>

</html>