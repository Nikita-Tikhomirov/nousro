<?php
/**
 * Template Name: Test Home
 * Description: Тестовый шаблон главной страницы с новым первым экраном.
 */

get_header();
?>

    <!--Main layout-->
    <main class="page">
        <?php require_once('components/test-home.inc.php'); ?>
    </main>
    <!--Main layout-->

<?php get_footer(); ?>
