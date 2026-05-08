<?php
/*
Template Name: шаблон курсов
*/ 
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
<!-- Page Content -->
<?php require_once('components/courses-page.inc.php'); ?>
<!-- ./Page Content -->
<?php
    } // end while
} // end if
get_footer();
?>
