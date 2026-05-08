<style>
    .sectionBlog__wrap {
        position: relative;
    }

    .sectionBlog__title {
        font-size: 24px;
    }

    .sectionBlog__controlsWrap {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        position: absolute;
        top: 0;
        right: 0;
    }

    .sectionBlog__controls {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 20px;
        margin-left: 20px;

    }
    .sectionBlog__link{
        color: #5F6366;
        padding: 5px 10px;
        border-radius: 5px;
        box-shadow: 1px 1px 2px #00000025;
    }
    

    .sectionBlog__slider {}

    .sectionBlogCard__title {
        font-size: 18px;
        line-height: 130%;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .sectionBlogCard__text {
        margin-bottom: 20px;
    }

    .sectionBlogCard__more {
        font-size: 18px;
        
    }
</style>

<?php
// WP Query — получаем посты из рубрики с ID 53
$args = array(
    'cat' => 53,
    'post_type' => 'page'
);
$query = new WP_Query($args);

if ($query->have_posts()): ?>
    <section class="content sectionBlog">
        <div class="sectionBlog__wrap">
            <h2 class="sectionBlog__title section__title">Блог</h2>

            <div class="sectionBlog__controlsWrap">
                <a href="<?php echo get_category_link(53); ?>" class="sectionBlog__link">Все новости</a>
                <div class="sectionBlog__controls">
                    <div class="sectionBlog__controls-prev">←</div>
                    <div class="sectionBlog__controls-next">→</div>
                </div>
            </div>

            <div class="sectionBlog__slider">
                <div class="swiper sectionBlog__swiper">
                    <div class="swiper-wrapper">

                        <?php while ($query->have_posts()):
                            $query->the_post();
                            // Получаем описание из Yoast SEO
                            $yoast_description = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);
                            // Если Yoast-поля нет, можно взять excerpt
                    
                            ?>
                            <div class="sectionBlogCard swiper-slide">
                                <div class="sectionBlogCard__ImgWrap">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="sectionBlogCard__title"><?php the_title(); ?></div>

                                <div class="sectionBlogCard__text">
                                    <?php echo esc_html($yoast_description); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="sectionBlogCard__more">Подробнее</a>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata();
?>





<script>
    document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper('.sectionBlog__swiper', {
            // Optional parameters

            // Default parameters
            slidesPerView: 1,
            spaceBetween: 20,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px

                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            },

            // Navigation arrows
            navigation: {
                nextEl: '.sectionBlog__controls-next',
                prevEl: '.sectionBlog__controls-prev',
            },

        });

    })


</script>