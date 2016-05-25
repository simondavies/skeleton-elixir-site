<?php
    //-- get the site wide settings and config information
    require_once __DIR__ . '/../App/config.php';

?>
<!doctype html>
<html lang="en">
    <head>
        <?php include_once  SITE_ROOT . 'inc/partials/metadata.php'; ?>
        <?php // Add any page specific header files here ?>
    </head>
    <body>

        <p>Hello me</p>

        <?php // Addition site wide css and scripts ?>
        <?php include_once SITE_ROOT . 'inc/partials/footer-scripts.php'; ?>
        <?php // Place any page specific files here ?>
        <script>
            (function(){Site.Homepage();})();
        </script>

    </body>
</html>
