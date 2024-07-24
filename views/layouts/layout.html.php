<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Krush</title>
    <!-- CSS LAYOUT -->
    <link rel="stylesheet" href="/css/layout-style.css">
    <!-- CSS TEMPLATES -->
    <?php if (isset($cssFiles) && is_array($cssFiles)) { ?>
        <?php foreach ($cssFiles as $cssFile) { ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($cssFile, ENT_QUOTES, 'UTF-8'); ?>">
        <?php } ?>
    <?php } ?>
</head>

<body>
    <header>
        <nav>
            <img src="/img/logo.png" alt="Candy Krush">
            <input type="text" placeholder="Cherchez et trouvez votre plaisir parmi nos produits">
            <select name="" id="">
                <option value="">Bonbons piquants</option>
                <option value="">Boissons</option>
                <option value="">Bonbons fruits</option>
            </select>
        </nav>
    </header>
    <main class="main-container">
        <div class="main-body">
            <?php
            echo "<!-- Template: " . htmlspecialchars($template, ENT_QUOTES, 'UTF-8') . " -->";
            if (file_exists($template)) {
                require_once $template;
            } else {
                echo "Erreur : le fichier template spécifié n'existe pas. Chemin : " . htmlspecialchars($template, ENT_QUOTES, 'UTF-8');
            }
            ?>
        </div>
    </main>
    <?php if (isset($jsFiles) && is_array($jsFiles)) { ?>
        <?php foreach ($jsFiles as $jsFile) { ?>
            <script src="<?= htmlspecialchars($jsFile, ENT_QUOTES, 'UTF-8'); ?>"></script>
        <?php } ?>
    <?php } ?>
    <script src="/js/burger-menu.js"></script>
</body>
<footer>
    <a href="http://">Lien 1</a>
    <a href="http://">Lien 2</a>
    <a href="http://">Lien 3</a>
</footer>

</html>