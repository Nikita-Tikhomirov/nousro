<?php
/*
Template Name: Цены

*/
?>
<?php get_header(); ?>


<?php
// Получаем данные текущего термина (рубрики)
$term = get_queried_object();
// print_r($term);
// Получаем значения произвольных полей
$desc2 = get_field('cat-tt', $term);
$quote = get_field('cat-desciption', $term);
?>

<!--  -->
<!--  -->
<!--  -->
<main class="category-page">

    <div class="carousel carousel-slider center customMainSlider">
        <?php
        $category_id = get_queried_object_id();
        $cat_banner_count = 0;

        if (have_rows('cat-banner', 'category_' . $category_id)) {
            while (have_rows('cat-banner', 'category_' . $category_id)) {
                the_row();
                $cat_banner_count++;
            }
        }
        ?>

        <div class="carousel-fixed-item center middle-indicator"
            style="<?php echo ($cat_banner_count === 1) ? 'display: none;' : ''; ?>">
            <div class="left">
                <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator">
                    <i class="material-icons left middle-indicator-text">chevron_left</i>
                </a>
            </div>
            <div class="right">
                <a href="#" class="moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator">
                    <i class="material-icons right middle-indicator-text">chevron_right</i>
                </a>
            </div>
        </div>

        <?php
        if ($cat_banner_count > 0):
            // Выводим слайды из 'cat-banner'
            while (have_rows('cat-banner', 'category_' . $category_id)):
                the_row(); ?>
                <div class="carousel-item red white-text">
                    <?php
                    $image = get_sub_field('image');
                    $mobbanner = get_sub_field('mobbanner');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $s_pos = get_sub_field('sld_pos');
                    if (!empty($image)): ?>
                        <picture>
                            <img src="<?php echo $image['url']; ?>" alt="">
                            <source media="(max-width: 768px)" srcset="<?php echo $mobbanner['url']; ?>">
                        </picture>
                        <div class="qqqs <?php echo $s_pos; ?>">
                            <div class="qqqs__item">
                                <p class="heading"
                                    style="font-size: 38px;font-weight: bold;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                    <?php echo $title; ?>
                                </p>
                                <p class="subText"
                                    style="font-size: 22px;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                    <?php echo $text; ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile;
        else:
            // Если 'cat-banner' нет, выводим слайды из 'slider'
            if (have_rows('slider', 'option')): ?>
                <?php while (have_rows('slider', 'option')):
                    the_row();
                    $link = get_sub_field('link'); ?>
                    <a class="carousel-item red white-text" href="<?php echo $link ?>">
                        <?php
                        $image = get_sub_field('slide');
                        $s_title = get_sub_field('sld_title');
                        $s_text = get_sub_field('sld_text');
                        $s_pos = get_sub_field('sld_pos');
                        if (!empty($image)): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <div class="qqqs <?php echo $s_pos; ?>">
                                <div class="qqqs__item">
                                    <p class="heading"
                                        style="font-size: 38px;font-weight: bold;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                        <?php echo $s_title; ?>
                                    </p>
                                    <p class="subText"
                                        style="font-size: 22px;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                        <?php echo $s_text; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endwhile; ?>
            <?php endif;
        endif; ?>
    </div>



    <div class="content-screen">
        <div class="content-screen__wrapper">
            <div class="content-screen__sidebar sidebar hide-on-med-and-down">
                <div class="sidebar__wrapper">

                    <?php get_sidebar('main'); ?>

                </div>
            </div>
            <div class="content-screen__content">


                <h1><?php the_title(); ?></h1>

                <style>
                    .subcources {
                        display: flex;
                        flex-wrap: wrap;
                    }

                    .subcources .col {
                        min-height: auto !important;
                    }

                    .subcource .card-title {
                        font-size: 18px;
                        text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;
                    }

                    .customTubsNav {
                        display: flex;
                        align-items: center;
                        justify-content: flex-start;
                        gap: 20px;
                        margin-bottom: 20px;
                    }     
                    .customTubBtn {
                        padding: 7px 20px;
                        border: 1px solid #087ccf;
                        border-radius: 4px;
                        font-size: 16px;
                        font-weight: bold;
                        cursor: pointer;
                        color: #5f6368;
                    }
                    .customTubBtn .active {
                        background: #087ccf;
                        color: #fff;
                    }
                    .customTubBtn:hover {
                        background: #087ccf;
                        color: #fff;
                    }
                    .customTub {
                        display: none;
                    }
                    .customTub.active {
                        display: block;
                    }
                    .customTubHeader {
                        display: grid;
                        grid-template-columns: 3fr 1fr 1fr;
                        font-size: 18px;
                        font-weight: bold;
                        margin-bottom: 15px;
                        border-bottom: 1px solid #087ccf;
                        padding-bottom: 5px;
                    }
                    .cistomPriceCard{
                        display: grid;
                        grid-template-columns: 3fr 1fr 1fr;
                        padding: 10px;
                        margin-bottom: 5px;
                    }
                    .cistomPriceCard a{
                        text-decoration: underline;
                        color: #5f6368;
                    }
                    .cistomPriceCard a:hover{
                        color: #087ccf;
                    }
                    .cistomPriceCard:nth-child(odd){
                        background: #f5f5f5;
                    }
                    .customTubBtn.active{
                        background: #087ccf;
                        color: #fff;
                    }
                    @media only screen and (max-width: 768px){
                        .cistomPriceCard{
                            grid-template-columns: 1fr;
                            grid-gap: 5px;
                        }
                        .customTubsNav {
                            flex-direction: column;
                            gap: 5px;
                        }
                        .customTubBtn {
                            width: 100%;
                        }
                    }
                </style>
                
                <div class="row ">
                    <!-- Category pages -->
                    <div class="priceCustomWrap">
                        <div class="customTubsNav">
                            <div class="customTubBtn active">Повышение квалификации</div>
                            <div class="customTubBtn">Профессиональная переподготовка</div>
                            <div class="customTubBtn">Рабочие профессии</div>
                        </div>
                        <div class="customTubs">
                            <div class="customTubHeader">
                                <span>Название курса</span><span>Срок</span><span>Цена</span>
                            </div>
                            <div class="customTub active">
                                <?php
                                
                                $args = array(
                                    'post_type' => 'page',
                                    'posts_per_page' => -1,
                                    'meta_key' => 'course-name', // Сортируем по 'course-name' сначала
                                    'orderby' => 'meta_value',
                                    'order' => 'ASC',
                                    'cat' => 8,
                                );

                                $query = new WP_Query($args);

                                // Если записи найдены
                                if ($query->have_posts()) {
                                    $posts = $query->posts;

                                    // Сортировка по рейтингу с сохранением предыдущей сортировки по 'course-name'
                                    usort($posts, function ($a, $b) {
                                        $ratingA = get_post_meta($a->ID, 'rtng', true);
                                        $ratingB = get_post_meta($b->ID, 'rtng', true);

                                        // Сравниваем по рейтингу в порядке убывания
                                        if ($ratingA == $ratingB) {
                                            return 0;
                                        }
                                        return ($ratingA > $ratingB) ? -1 : 1;
                                    });

                                    // Переопределяем посты в WP_Query
                                    $query->posts = $posts;
                                    $query->post_count = count($posts);
                                }

                                // Цикл вывода постов
                                if ($query->have_posts()) {
                                    $loopedNumber = 0;
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $card_name = get_field('course-name', get_the_ID());
                                        $price_from = get_field('price-from', get_the_ID());
                                        $price_to = get_field('price-to', get_the_ID());
                                        $short_desc = get_field('short-desc', get_the_ID());
                                        $desc = get_field('description', get_the_ID());
                                        ?>
                                        <!-- Ваш HTML-код -->

                                        <div class="cistomPriceCard">
                                            <div class="cistomPriceCard__name">
                                                <div>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo $card_name; ?>
                                                    </a>
                                                    
                                                </div>

                                            </div>
                                  
                                                <div>
                                                    <?php if (have_rows('additional', get_the_ID())): ?>
                                                        <?php
                                                        $card_counter = 0;
                                                        while (have_rows('additional', get_the_ID())):
                                                            the_row();
                                                            if ($card_counter === 0) {
                                                                $name = get_sub_field('name');
                                                                $value = get_sub_field('value');
                                                                echo  $value;
                                                            }
                                                            $card_counter++;
                                                        endwhile;
                                                        ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    от <?php echo $price_from; ?> до <?php echo $price_to; ?></span>
                                                </div>
                                       
                                            <?php $loopedNumber++; ?>
                                        </div>


                                        
                                        <?php
                                    }
                                }
                            wp_reset_postdata();
                                ?>
                            </div>
                            <div class="customTub">
                                <?php
                                
                                $args = array(
                                    'post_type' => 'page',
                                    'posts_per_page' => -1,
                                    'meta_key' => 'course-name', // Сортируем по 'course-name' сначала
                                    'orderby' => 'meta_value',
                                    'order' => 'ASC',
                                    'cat' => 9,
                                );

                                $query = new WP_Query($args);

                                // Если записи найдены
                                if ($query->have_posts()) {
                                    $posts = $query->posts;

                                    // Сортировка по рейтингу с сохранением предыдущей сортировки по 'course-name'
                                    usort($posts, function ($a, $b) {
                                        $ratingA = get_post_meta($a->ID, 'rtng', true);
                                        $ratingB = get_post_meta($b->ID, 'rtng', true);

                                        // Сравниваем по рейтингу в порядке убывания
                                        if ($ratingA == $ratingB) {
                                            return 0;
                                        }
                                        return ($ratingA > $ratingB) ? -1 : 1;
                                    });

                                    // Переопределяем посты в WP_Query
                                    $query->posts = $posts;
                                    $query->post_count = count($posts);
                                }

                                // Цикл вывода постов
                                if ($query->have_posts()) {
                                    $loopedNumber = 0;
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $card_name = get_field('course-name', get_the_ID());
                                        $price_from = get_field('price-from', get_the_ID());
                                        $price_to = get_field('price-to', get_the_ID());
                                        $short_desc = get_field('short-desc', get_the_ID());
                                        $desc = get_field('description', get_the_ID());
                                        ?>
                                        <!-- Ваш HTML-код -->

                                        <div class="cistomPriceCard">
                                            <div class="cistomPriceCard__name">
                                                <div>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo $card_name; ?>
                                                    </a>
                                                    
                                                </div>

                                            </div>
                                  
                                                <div>
                                                    <?php if (have_rows('additional', get_the_ID())): ?>
                                                        <?php
                                                        $card_counter = 0;
                                                        while (have_rows('additional', get_the_ID())):
                                                            the_row();
                                                            if ($card_counter === 0) {
                                                                $name = get_sub_field('name');
                                                                $value = get_sub_field('value');
                                                                echo  $value;
                                                            }
                                                            $card_counter++;
                                                        endwhile;
                                                        ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    от <?php echo $price_from; ?> до <?php echo $price_to; ?></span>
                                                </div>
                                       
                                            <?php $loopedNumber++; ?>
                                        </div>


                                        
                                        <?php
                                    }
                                }
                            wp_reset_postdata();
                                ?>
                            </div>
                            <div class="customTub">
                                <?php
                                
                                $args = array(
                                    'post_type' => 'page',
                                    'posts_per_page' => -1,
                                    'meta_key' => 'course-name', // Сортируем по 'course-name' сначала
                                    'orderby' => 'meta_value',
                                    'order' => 'ASC',
                                    'cat' => 11,
                                );

                                $query = new WP_Query($args);

                                // Если записи найдены
                                if ($query->have_posts()) {
                                    $posts = $query->posts;

                                    // Сортировка по рейтингу с сохранением предыдущей сортировки по 'course-name'
                                    usort($posts, function ($a, $b) {
                                        $ratingA = get_post_meta($a->ID, 'rtng', true);
                                        $ratingB = get_post_meta($b->ID, 'rtng', true);

                                        // Сравниваем по рейтингу в порядке убывания
                                        if ($ratingA == $ratingB) {
                                            return 0;
                                        }
                                        return ($ratingA > $ratingB) ? -1 : 1;
                                    });

                                    // Переопределяем посты в WP_Query
                                    $query->posts = $posts;
                                    $query->post_count = count($posts);
                                }

                                // Цикл вывода постов
                                if ($query->have_posts()) {
                                    $loopedNumber = 0;
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $card_name = get_field('course-name', get_the_ID());
                                        $price_from = get_field('price-from', get_the_ID());
                                        $price_to = get_field('price-to', get_the_ID());
                                        $short_desc = get_field('short-desc', get_the_ID());
                                        $desc = get_field('description', get_the_ID());
                                        ?>
                                        <!-- Ваш HTML-код -->

                                        <div class="cistomPriceCard">
                                            <div class="cistomPriceCard__name">
                                                <div>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php echo $card_name; ?>
                                                    </a>
                                                    
                                                </div>

                                            </div>
                                  
                                                <div>
                                                    <?php if (have_rows('additional', get_the_ID())): ?>
                                                        <?php
                                                        $card_counter = 0;
                                                        while (have_rows('additional', get_the_ID())):
                                                            the_row();
                                                            if ($card_counter === 0) {
                                                                $name = get_sub_field('name');
                                                                $value = get_sub_field('value');
                                                                echo  $value;
                                                            }
                                                            $card_counter++;
                                                        endwhile;
                                                        ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    от <?php echo $price_from; ?> до <?php echo $price_to; ?></span>
                                                </div>
                                       
                                            <?php $loopedNumber++; ?>
                                        </div>


                                        
                                        <?php
                                    }
                                }
                            wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- END CATEGORY PAGES -->
                </div>



                <article class="page">
                    <?php echo $desc2; ?>
                </article>

            </div>
        </div>
    </div>
    </div>
</main>
<script>
    setTimeout(() => {
        // move next carousel
        jQuery('.moveNextCarousel').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            jQuery('.carousel').carousel('next');
        });

        // move prev carousel
        jQuery('.movePrevCarousel').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            jQuery('.carousel').carousel('prev');
        });
    }, 1000);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const customTubBtns = document.querySelectorAll('.customTubBtn')
        const customTubs = document.querySelectorAll('.customTub')
        customTubBtns.forEach((btn, i) => {
            btn.addEventListener('click', () => {
                // Удалить у всех других кнопок  класс active.
                customTubBtns.forEach(btn => btn.classList.remove('active'))
                // Добавить класс active к текущей кнопке.
                btn.classList.add('active')
                // Удалить у всех табов класс active.
                customTubs.forEach(tub => tub.classList.remove('active'))
                // Добавить класс active к текущему табу.
                customTubs[i].classList.add('active')
            })

        })
    })
</script>

<style>
    .category-page article.page {
        margin-top: 30px
    }

    .category-page {
        box-sizing: border-box;

    }

    .catCardCustom {
        margin-bottom: 40px;
    }

    .catCardCustom .card-image {}

    .catCardCustom .catCardImgWrap {
        display: block;
        margin-left: 0;
    }

    .catCardCustom .card-title {
        font-size: 18px !important;
    }
</style>


<?php get_footer(); ?>