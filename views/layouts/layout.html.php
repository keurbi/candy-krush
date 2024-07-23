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
            <link rel="stylesheet" href="<?= $cssFile; ?>">
        <?php } ?>
    <?php } ?>
</head>

<body>
    <header>
        <nav>
            <img src="" alt="Candy Krush">
            <input type="text">
            <select name="" id="">
                <option value="">Bonbons piquants</option>
                <option value="">Boissons</option>
                <option value="">Bonbons fruits</option>
            </select>
        </nav>
    </header>

    <!-- Main -->
    <main class="main-container">
        <div class="main-body">
            <?php if (!empty($template)) {
                require_once $template;
            } else {
                echo "Erreur : le template principal n'est pas défini.";
            }
            ?>
        </div>
    </main>

    <?php if (isset($jsFiles) && is_array($jsFiles)) { ?>
        <?php foreach ($jsFiles as $jsFile) { ?>
            <script src="<?= $jsFile ?>"></script>
        <?php } ?>
    <?php } ?>
    <script src="/js/burger-menu.js"></script>
</body>
<footer>
    <a href="http://"></a>
    <a href="http://"></a>
    <a href="http://"></a>
</footer>

</html>