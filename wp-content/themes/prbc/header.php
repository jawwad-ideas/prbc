<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f3f3f3; margin: 0; padding: 0; }
        header { background: #004d40; color: white; padding: 20px; text-align: center; }
        nav { background: #00695c; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        .hero { background: linear-gradient(to right, #e0f2f1, #b2dfdb); padding: 100px 20px; text-align: center; color: #004d40; }
        .section { padding: 60px 20px; }
        .card-container { display: flex; flex-wrap: wrap; gap: 25px; justify-content: space-between; }
        .card { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); flex: 1 1 calc(33.333% - 25px); min-width: 300px; }
        footer { background: #004d40; color: white; text-align: center; padding: 30px; }
    </style>
</head>
<body>
<header>
    <div class="header-container">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php endif; ?>
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    </div>
    <p><?php bloginfo('description'); ?></p>
</header>
<nav class="primary-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'nav-menu',
        'fallback_cb' => false
    ));
    ?>
</nav>