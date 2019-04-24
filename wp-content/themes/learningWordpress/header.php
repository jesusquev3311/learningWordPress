<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="container">
        <header class="site-header">
            <h1><a href="<?= home_url();?>"> <?php bloginfo('name') ?></h1>
            <h5><?php bloginfo('description')?></h5>
            <nav class="site-nav">
                <?php 
                $argms = array(
                    'theme_location' => 'primary'
                );
                wp_nav_menu($argms); 
                ?>
            </nav>
        </header>
   
    
