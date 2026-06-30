<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="main-content" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px; padding: 0; max-width: 1200px; margin: 0 auto; width: 100%;">
        <div style="flex: 1; min-width: 200px;">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>">✨ <?php bloginfo('name'); ?></a></h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        </div>
        <nav class="site-navigation">
            <?php
            if (has_nav_menu('main_menu')) {
                wp_nav_menu(array('theme_location' => 'main_menu', 'container' => false, 'menu_class' => 'main-menu'));
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '">🏠 Home</a> 
                      <a href="' . esc_url(home_url('/explore-creators/')) . '">🔍 Explorar</a>
                      <a href="' . esc_url(home_url('/dashboard-buyer/')) . '">📊 Meu Dashboard</a>
                      <a href="' . esc_url(home_url('/messages/')) . '">💬 Mensagens</a>
                      <a href="' . esc_url(home_url('/login/')) . '">🔑 Login</a>';
            }
            ?>
        </nav>
    </div>
</header>
<main class="main-content">