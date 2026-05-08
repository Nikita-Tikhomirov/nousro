<?php
// Получаем данные текущего термина (рубрики)
$term = get_queried_object();
// print_r($term);
// Получаем значения произвольных полей
$desc2 = get_field('cat-tt', $term);
$quote = get_field('cat-desciption', $term);;
?>

<!--  -->
<!--  -->
<!--  -->
<main class="category-page">

    <!-- Top Banners -->
    <div class="carousel carousel-slider center ">
        <div class="carousel-fixed-item center middle-indicator">
            <div class="left">
            <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
            </div>
        
            <div class="right">
            <a href="#" class="moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
            </div>
        </div>

        <?php if( have_rows('cat-banner') ): ?>
            <?php
            while( have_rows('cat-banner') ): the_row(); 
                ?>
                <div class="carousel-item red white-text" href="#one!">

                    <?php 
                    $image = get_sub_field('image');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else:?>
            <?php if( have_rows('slider', 'option') ): ?>

                <?php while( have_rows('slider', 'option') ): the_row(); ?>
                    <div class="carousel-item red white-text">
                        <?php 
                        $image = get_sub_field('slide');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        <?php endif; ?>

    </div>
    <!-- ./Top Banners -->


    <div class="content-screen">
        <div class="content-screen__wrapper">
            <div class="content-screen__sidebar sidebar hide-on-med-and-down">
                <div class="sidebar__wrapper">
                    
                    <?php get_sidebar('main'); ?>
                    
                </div>
            </div>
            <div class="content-screen__content">
                
                <?php require_once('breadcrumps.php'); ?>
                
                <h1><?php echo $term->name; ?></h1>
                <div class="row">
                    
                </div>
                <!--  -->
                <blockquote>
                    <?php echo $quote; ?>
                </blockquote>

                <article class="page">
                    <?php echo $desc2; ?>
                </article>
                
            </div>
        </div>
    </div>
</div>
</main>
<script>
    setTimeout(() =>{
        // move next carousel
        jQuery('.moveNextCarousel').click(function(e){
            e.preventDefault();
            e.stopPropagation();
            jQuery('.carousel').carousel('next');
        });

        // move prev carousel
        jQuery('.movePrevCarousel').click(function(e){
            e.preventDefault();
            e.stopPropagation();
            jQuery('.carousel').carousel('prev');
        });
    }, 1000);
</script>