<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- affiche le titre du site depuis wp -->
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <a class="navbar-brand" href="#">
        <img src="wp-content\themes\dailyTheme\asset\img\lePays_Logo.png" alt="logo_LePays">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <!-- Récupère les éléments du menu créé sur wp -->
        <?php wp_nav_menu(['theme_location' => 'header', 'container' => false, 'menu_class' => 'navbar-nav justify-content-end'])?>
    </div>
    </nav>
    <div class="container">