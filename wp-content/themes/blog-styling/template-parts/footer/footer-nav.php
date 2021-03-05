<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<nav class="m-footer__nav">
    <?php
        if ( has_nav_menu( 'footer_column' ) ) {
            wp_nav_menu([
            'theme_location'  => 'footer_column',
            'menu_class'      => 'm-footer__menu -medium',
            'container' => 'ul'
            ]);
        }
    ?>
    <a href="https://jipeek.com" class="m-footer__button"><span class="-medium">Jipeek E-commerce</span></a>
</nav>