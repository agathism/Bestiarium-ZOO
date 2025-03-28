<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
            <div class="flex justify-around items-center h-16 px-4 lg:px-8">
                <!-- Logo -->
                    <span>
                    <a href="index.php?action=homePage" class="text-2xl font-bold text-green-600">🌍Bestiarium</a>
                    </span>
                    <div class="nav space-x-8">
                        <a href="index.php?action=homePage" class="text-xl text-gray-700 hover:text-green-600">Accueil</a>
                        <a href="index.php?action=logout" class="text-xl text-gray-700 hover:text-green-600">Se déconnecter</a>
                    </div>
                </div>
    </nav>
</body>

</html>