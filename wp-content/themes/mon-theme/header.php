<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <link href="/wp-content/themes/mon-theme/assets/css/style.css" rel="stylesheet"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?= get_template_directory_uri() . '/assets/img/logo-montheme.jpg' ?>" alt="Logo" height="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <?php
                        $menuitems = wp_get_nav_menu_items( 'Menu' );
                        
                        foreach ( $menuitems as $item ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $item->url ?>"><?= $item->title ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner bg-primary">
            <h1 class="text-center display-1"><?php bloginfo('name'); ?></h1>
        </div>
    </header>