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
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $s_title; ?>" />
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

                <?php require_once('breadcrumps.php'); ?>

                <h1><?php echo $term->name; ?></h1>

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
                </style>
                <div class="row ">
                    <!-- Category pages -->
                    <div class="last-seen">
                        <hr>

                        <?php
                        // Получаем текущую рубрику
                        $category = get_queried_object();
                        $category_id = $category->term_id;

                        // Проверяем, является ли текущая рубрика одной из нужных (36 или 43)
                        if (in_array($category_id, [36, 43])) {
                            // Получаем дочерние рубрики для текущей рубрики
                            $args1 = array(
                                'child_of' => $category_id, // Указываем родительскую категорию
                                'taxonomy' => 'category',   // Указываем таксономию (категории)
                                'hide_empty' => false       // Показывать даже пустые рубрики
                            );
                            $child_categories = get_categories($args1);

                            // Проверяем, есть ли дочерние рубрики и выводим их
                            if (!empty($child_categories)) {
                                echo '<div class="row subcources">';
                                foreach ($child_categories as $child_category) {
                                    // Получаем данные ACF для рубрики
                                    $course_name = get_field('course-name', 'category_' . $child_category->term_id);
                                    $image = get_field('image', 'category_' . $child_category->term_id);

                                    // Вывод карточки
                                    ?>
                                    <div class="col s12 m4 subcource">
                                        <div class="card hoverable">
                                            <div class="card-image">
                                                <?php if ($image): ?>
                                                    <a href="<?php echo get_category_link($child_category->term_id); ?>">
                                                        <img src="<?php echo esc_url($image['url']); ?>"
                                                            alt="<?php echo esc_attr($course_name); ?>">
                                                    </a>

                                                <?php endif; ?>
                                                <span class="card-title"><?php echo esc_html($course_name); ?></span>
                                            </div>
                                            <div class="card-action">
                                                <a href="<?php echo get_category_link($child_category->term_id); ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                echo '</div>';
                            } else {
                                echo '<p>Нет дочерних рубрик</p>';
                            }
                        }




                        // Запрос для постов, если рубрика не 36 или 43
                        if (!in_array($category_id, [36, 43])) {

                            $args = array(
                                'post_type' => 'page',
                                'posts_per_page' => -1,
                                'meta_key' => 'course-name', // Сортируем по 'course-name' сначала
                                'orderby' => 'meta_value',
                                'order' => 'ASC',
                                'cat' => $category_id,
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
                                    $card_image = get_field('image', get_the_ID());
                                    $card_name = get_field('course-name', get_the_ID());
                                    $price_from = get_field('price-from', get_the_ID());
                                    $price_to = get_field('price-to', get_the_ID());
                                    $short_desc = get_field('short-desc', get_the_ID());
                                    $desc = get_field('description', get_the_ID());
                                    ?>
                                    <!-- Ваш HTML-код -->
                                    <div class="col s12 m4 catCardCustom">
                                        <div class="card hoverable category-card">
                                            <a class="catCardImgWrap" href="<?php the_permalink(); ?>">
                                                <div class="card-image">
                                                    <?php the_post_thumbnail(); ?>
                                                    <span class="card-title"><?php echo $short_desc; ?></span>
                                                </div>
                                            </a>
                                            <div class="card-tabs">
                                                <ul class="tabs tabs-fixed-width">
                                                    <li class="tab"><a class="active"
                                                            href="#test<?php echo $loopedNumber; ?>one">ИНФО</a></li>
                                                    <li class="tab"><a href="#test<?php echo $loopedNumber; ?>two">О КУРСЕ</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-content grey lighten-4">
                                                <div id="test<?php echo $loopedNumber; ?>one">
                                                    <p>
                                                        <?php if (have_rows('additional', get_the_ID())): ?>
                                                            <?php
                                                            $card_counter = 0;
                                                            while (have_rows('additional', get_the_ID())):
                                                                the_row();
                                                                if ($card_counter < 2) {
                                                                    $name = get_sub_field('name');
                                                                    $value = get_sub_field('value');

                                                                    // 🔄 Подмена текста в $value
                                                                    $replacements = [
                                                                        'диплом о профессиональной переподготовке' => 'диплом о переподготовке',
                                                                        'свидетельство о присвоении профессии' => 'свидетельство рабочего',
                                                                        'удостоверение о повышении квалификации' => 'удостоверение о пов. квалиф.'
                                                                    ];

                                                                    $value_lower = mb_strtolower($value); // для надёжного сравнения
                                                                    foreach ($replacements as $old => $new) {
                                                                        if ($value_lower === $old) {
                                                                            $value = $new;
                                                                            break;
                                                                        }
                                                                    }

                                                                    if ($name != "Лицензирующий орган:") { ?>
                                                                        <span class="scheme__item">
                                                                            <span class="scheme__name"><strong><?php echo esc_html($name); ?>
                                                                                </strong></span>
                                                                            <span
                                                                                class="scheme__value new badge blue"><?php echo esc_html($value); ?></span>
                                                                        </span>
                                                                    <?php }
                                                                }
                                                                $card_counter++;
                                                            endwhile;
                                                            ?>
                                                        <?php endif; ?>

                                                        <span class="scheme__item">
                                                            <span class="scheme__name"><strong>Цена: </strong></span>
                                                            <span class="scheme__value new badge blue"> от
                                                                <?php echo $price_from; ?> до <?php echo $price_to; ?></span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div id="test<?php echo $loopedNumber; ?>two" class="cardTab-about">
                                                    <?php echo $desc; ?>
                                                </div>
                                            </div>
                                            <div class="card-action">
                                                <a href="<?php the_permalink(); ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $loopedNumber++; ?>
                                    <?php
                                }
                            }
                            wp_reset_postdata();

                        }
                        ?>

                    </div>
                    <!-- END CATEGORY PAGES -->
                </div>



                <article class="page customPadding">
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

<style>
    .customPadding{
        padding-bottom: 40px;
    }
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