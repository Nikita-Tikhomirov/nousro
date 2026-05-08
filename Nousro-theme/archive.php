<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <?php 
    if(is_category( '30' )){
    ?>
        <!-- Category content -->
        <?php require_once('components/about-page.inc.php'); ?>
        <!-- ./Category content -->
    <?php }else{ ?>
        <!-- Category content -->
        <?php require_once('components/category-page.inc.php'); ?>
        <!-- ./Category content -->
    <?php }
        
    ?>
    

<?php
get_footer();
