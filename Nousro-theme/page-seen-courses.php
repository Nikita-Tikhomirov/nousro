<?php
/*
Template Name: Просмотренные курсы

*/
?>
<?php get_header(); ?>

<style>
    .seenCources {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .seenCources__title {
        font-size: 32px;
        color: #5F6368;
    }

    .seenCources__wrap {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 30px;
    }

    .courseItemCustom {
        border-radius: 8px;
        background: #d4d4d477;
        padding: 20px;
        box-shadow: 1px 1px 3px #00000038;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
    }

    .courseItemCustom__title {
        color: #5F6368;
        font-weight: 600;
        line-height: 120%;
        padding-right: 20px;
        height: 100%;
        border-right: 4px solid #087ccf;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .courseItemCustom__title a {
        color: #5F6368;
    }

    .courseItemCustom__info {
        padding-left: 20px;
    }
    .courseItemCustom__time{
        margin-bottom: 10px;
    }
    .courseItemCustom__time, .courseItemCustom__price{
        display: flex;
        align-items: center;
        justify-content: flex-start; gap: 8px;
    }
    .courseItemCustom__time i, .courseItemCustom__price i{
        color: #087ccf;
    }
      @media screen and (max-width: 768px) {
        .seenCources__wrap{
            grid-template-columns: 1fr;
        }
        .courseItemCustom{
            grid-template-columns: 1fr;
 
            
        }
        .courseItemCustom__title{
           border-right: none;
            border-bottom: 4px solid #087ccf;
            padding-right: 0;
            padding-bottom: 10px;
        }
        .courseItemCustom__info{
            padding-left: 0;
            padding-top: 10px;
        }
      }
</style>

<section class="seenCources">
    <div class="content">
        <h1 class="seenCources__title"><?php the_title(); ?></h1>
        <div class="seenCources__wrap">
            <?php
            $viewed = isset($_COOKIE['viewed_courses']) ? explode(',', $_COOKIE['viewed_courses']) : [];

            if (!empty($viewed)) {

                $args = [
                    'post_type' => 'page',
                    'post__in' => $viewed,
                    'orderby' => 'post__in',
                    'posts_per_page' => -1,
                    'category__not_in' => [1, 53],
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'operator' => 'EXISTS', // у поста должна быть хотя бы одна категория
                        ]
                    ]
                ];

                $query = new WP_Query($args);

                if ($query->have_posts()): ?>



                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>

                        <div class="courseItemCustom">
                            <div class="courseItemCustom__title"><a href="<?php the_permalink(); ?>"><?php the_field('course-name'); ?></a></div>
                            <div class="courseItemCustom__info">
                                <div class="courseItemCustom__time">
                                    <i class="material-icons">access_time</i>
                                    <span><?php the_field('time'); ?></span>
                                </div>

                                <div class="courseItemCustom__price">
                                    <i class="material-icons">payments</i>
                                    <span>От </span>
                                    <span><?php the_field('price-from'); ?></span>
                                    <span> до </span>
                                    <span><?php the_field('price-to'); ?></span>
                                    <span> руб.</span>
                                </div>

                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php else: ?>
                    <p>Вы еще не просматривали курсы.</p>
                <?php endif;
                wp_reset_postdata();
            } else {
                echo '<p>Вы еще не просматривали курсы.</p>';
            }
            ?>
        </div>


    </div>
</section>


<?php get_footer(); ?>