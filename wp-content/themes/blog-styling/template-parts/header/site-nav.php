<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<nav class="m-header__nav">
    <span class="m-header__search"></span><!-- .m-header__search -->
    <span class="m-header__link" id="tagsModal">Etiquetas</span><!-- .m-header__link -->
    <span class="m-header__important" id="categoryModal">Categoría</span><!-- .m-header__link -->
    <a href="<?php echo esc_url( home_url( 'nosotros' ) ); ?>" class="m-header__important">Nosotros</a><!-- .m-header__us -->
</nav><!-- .m-header__nav -->