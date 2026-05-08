<?php
/*
Template Name: Медицина
*/
?>

<?php get_header(); ?>
<!-- <section class="content section medical"> -->
<main class="category-page" style="padding-top:30px">

    <div class="content-screen">
        <div class="content-screen__wrapper">
            <div class="content-screen__sidebar sidebar hide-on-med-and-down">
                <div class="sidebar__wrapper">

                    <?php get_sidebar('main'); ?>

                </div>
            </div>
            <div class="content-screen__content medical">
                
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <style>
                    .medical .row {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        grid-gap: 20px;
                    }

                    .subcources .col {
                        min-height: auto !important;
                    }

                    .subcource .card-title {
                        font-size: 18px;
                        text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;
                    }

                    .medical h1 {
                        font-size: 32px;
                    }

                    .medical h2 {
                        font-size: 24px;
                    }

                    .aboutMedCat {
                        margin-bottom: 20px;
                    }
                </style>

                <?php
                // Рубрики, которые нужно обрабатывать
                $target_categories = [36, 43];


                $up_qual_doctors = get_field('up_qual_doctors');
                $up_qual_sisters = get_field('up_qual_sisters');


                foreach ($target_categories as $category_id) {
                    // Получаем объект категории
                    $category = get_category($category_id);
                    if ($category) {
                        // Выводим заголовок категории со ссылкой
                        echo '<h2><a href="' . get_category_link($category_id) . '">' . esc_html($category->name) . '</a></h2>';
                        // Вставляем соответствующее поле ACF
                        // Вставляем соответствующее поле ACF
                        if ($category_id === 36 && $up_qual_doctors) {

                            echo '<div class="aboutMedCat">' . $up_qual_doctors . '</div>';
                        } elseif ($category_id === 43 && $up_qual_sisters) {
                            echo '<div class="aboutMedCat">' . $up_qual_sisters . '</div>';

                        }

                        // Получаем дочерние рубрики
                        $args1 = array(
                            'child_of' => $category_id, // Родительская рубрика
                            'taxonomy' => 'category',   // Таксономия
                            'hide_empty' => false       // Показывать пустые рубрики
                        );
                        $child_categories = get_categories($args1);

                        // Проверяем, есть ли подрубрики
                        if (!empty($child_categories)) {
                            echo '<div class="row">';
                            foreach ($child_categories as $child_category) {
                                // Получаем данные ACF
                                $image = get_field('image', 'category_' . $child_category->term_id);
                                $course_name = get_field('course-name', 'category_' . $child_category->term_id);

                                // Выводим карточку
                                ?>
                                <div class="subcource">
                                    <div class="card hoverable">
                                        <div class="card-image">
                                            <?php if ($image): ?>
											<a href="<?php echo get_category_link($child_category->term_id); ?>"><img src="<?php echo esc_url($image['url']); ?>"
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
                            echo '</div>'; // Закрываем row
                        } else {
                            echo '<p>Нет подрубрик</p>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

</main>
<!-- </section> -->
<?php get_footer(); ?>