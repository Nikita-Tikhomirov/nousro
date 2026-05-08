<?php 
$Ppage = get_queried_object();
// print_r($Ppage);
$posts = get_field('featured', $Ppage->ID);

// echo $Ppage->ID;
// print_r($posts);
if( $posts ): ?>
    <div class="last-seen">
        <h3 class="lastSeenTitle">Вам так же будет интересно:</h3>
        <hr>
        <div class="row">
            <?php $loopedNumber = 0; ?>
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <?php 
                    // The Loop
                    $price_from = get_field('price-from');
                    $price_to = get_field('price-to');
                    $desc = get_field('description', get_the_ID());

                ?>
                <!--  -->
                <div class="col s12 m3 last-seen-card customCutCard">
                    <div class="card hoverable category-card">
                        <a href="<?php the_permalink(); ?>" class="card-image">
                            
                            <?php 
                            $altPost = get_the_title();
                            $size ='';
                            $default_attr = array(
                                'alt'   => $altPost,
                            );
                            the_post_thumbnail($size,$default_attr); 
                            
                            ?>
                            <span class="card-title"><?php the_title(); ?></span>
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
            <?php endforeach; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
<style>
    .lastSeenTitle{
        font-size: 29px;
    }
    .customCutCard .card-image{
        display: block;
        margin-left: 0;
    }

    .customCutCard .card-title{
        font-size: 18px !important;
    }
</style>