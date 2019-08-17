<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akad
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a class="logo__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;
                $akad_description = get_bloginfo( 'description', 'display' );
                if ( $akad_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $akad_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php require "inc-html/menu.php"; ?>
        </nav>
    </div>
</header>

