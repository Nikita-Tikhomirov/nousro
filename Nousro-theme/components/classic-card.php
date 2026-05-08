<?php
$card_image = get_field('image', get_the_ID());
$card_name = get_field('course-name', get_the_ID());

$price_from = get_field('price-from', get_the_ID());
$price_to = get_field('price-to', get_the_ID());

$short_desc = get_field('short-desc', get_the_ID());
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
            <div id="test<?php echo $loopedNumber; ?>two">
                Page-2
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