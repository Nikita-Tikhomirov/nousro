<?php get_header(); ?>
<!--  -->
<!--  -->
<!--  -->
<main class="category-page">

<!-- Top Banners -->
<div class="carousel carousel-slider center customMainSlider ">
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
            
            <h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
            <div class="row">
                <!-- Category pages -->
                <div class="last-seen">
                    <hr>
                    <?php 
                        // The Loop
                        $loopedNumber = 0;
                        while ( have_posts() ) : the_post(); 
                        ?>
                        <?php
                            $card_image = get_field('image', get_the_ID());
                            $card_name = get_field('course-name', get_the_ID());

                            $price_from = get_field('price-from', get_the_ID());
                            $price_to = get_field('price-to', get_the_ID());

                            $short_desc = get_field('short-desc', get_the_ID());
                            $desc = get_field('description', get_the_ID());
                            ?>
                            <!--  -->
                            <div class="col s12 m4">
                                
                                <div class="card hoverable category-card">
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="card-image">
                                        <!-- <img src="<?php echo $card_image['url'] ?>"> -->
                                        <!-- <img src="<?php echo $featured_img_url = get_the_post_thumbnail_url('full'); ?>" alt=""> -->
                                        <?php the_post_thumbnail(); ?>
                                        <span class="card-title"><?php /*the_title();*/ echo $short_desc; ?></span>
                                    </div>
                                    </a>
                                    <div class="card-tabs">
                                        <ul class="tabs tabs-fixed-width">
                                            <li class="tab"><a class="active" href="#test<?php echo $loopedNumber; ?>one">ИНФО</a></li>
                                            <li class="tab"><a href="#test<?php echo $loopedNumber; ?>two">О КУРСЕ</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-content grey lighten-4">
                                        <div id="test<?php echo $loopedNumber; ?>one">
                                            <p>
                                                <?php if( have_rows('additional', get_the_ID()) ): $card_counter = 0; ?>

                                                    <?php
                                                    while( have_rows('additional', get_the_ID()) ): the_row(); 
                                                        if($card_counter < 2){
                                                            $name = get_sub_field('name');
                                                            $value = get_sub_field('value'); ?>
                                                            <span class="scheme__item">
                                                                <span class="scheme__name"><strong><?php echo $name; ?> </strong></span>
                                                                <span class="scheme__value new badge blue"> <?php echo $value; ?></span>
                                                            </span>
                                                        <?php
                                                        }
                                                        $card_counter++;
                                                        ?>
                                                            
                                                    <?php endwhile; ?>
                                                        
                                                <?php endif; ?>

                                                <span class="scheme__item">
                                                    <span class="scheme__name"><strong>Цена: </strong></span>
                                                    <span class="scheme__value new badge blue"> от <?php echo $price_from; ?> до <?php echo $price_to; ?></span>
                                                </span>
                                            </p>
                                        </div>
                                        <div id="test<?php echo $loopedNumber; ?>two" class="cardTab-about">
                                            <?php echo $desc; ?>
                                        </div>
                                    </div>
                                    <!-- <div class="card-content">
                                        
                                    </div> -->
                                    <div class="card-action">
                                        <a href="<?php the_permalink(); ?>">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        <?php $loopedNumber++; ?>
                    <?php endwhile; wp_reset_postdata();?>
                
                </div>
                <!-- END CATEGORY PAGES -->
            </div>
            <!--  -->
            
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
 <?php get_footer(); ?>