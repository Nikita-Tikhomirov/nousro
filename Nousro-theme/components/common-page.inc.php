<main>

<?php if(!get_field('course-name')): ?>
    <!-- Top Banners -->
    <div class="carousel carousel-slider center hide-on-med-and-down customMainSlider ">
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
                        $s_title = get_sub_field('sld_title');
                        $s_text = get_sub_field('sld_text');
                        $s_pos = get_sub_field('sld_pos');
                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $s_title; ?>" />

                            <div class="qqqs <?php echo $s_pos; ?>">
                                <div class="qqqs__item">
                                    <p class="heading" style="font-size: 38px;font-weight: bold;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                        <?php echo $s_title; ?>
                                    </p>
                                    <p class="subText" style="font-size: 22px;text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                        <?php echo $s_text; ?>
                                    </p>
                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        <?php endif; ?>

    </div>
    <!-- ./Top Banners -->
<?php endif; ?>
    <div class="content">
        <div class="first-screen">
            <?php if(get_field('course-name')): ?>

            <div class="course-preview">
                <div class="course-card scrollspy">
                    <div class="row">
                        <div class="col s12 m12 card-slidein-left">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?php $img = get_field('image'); echo $img['url'];?>" alt="<?php echo $img['alt']?>">
                                    <span class="card-title"><?php the_field('short-desc'); ?></span>
                                </div>
                                <div class="card-content">
                                    <?php if( have_rows('additional') ): ?>

                                    <?php
                                    while( have_rows('additional') ): the_row(); 

                                            $name = get_sub_field('name');
                                            $value = get_sub_field('value'); ?>
                                            <span class="scheme__item">
                                                <span class="scheme__name"><strong><?php echo $name; ?> </strong></span>
                                                <span class="scheme__value new badge blue z-depth-1"> <?php echo $value; ?></span>
                                            </span>
                                            
                                    <?php endwhile; ?>
                                        
                                    <?php endif; ?>

                                    <span class="scheme__item">
                                        <span class="scheme__name"><strong> <?php echo get_field('price-name'); ?>: </strong></span>
                                        
										<?php
                                            $price_from = get_field('price-from');
                                            $price_to = get_field('price-to');
                                            ?>

                                            <span class="scheme__value new badge blue z-depth-1">
                                                от <?php echo $price_from; ?> руб.
                                                <?php if (!empty($price_to)) : ?>
                                                    до <?php echo $price_to; ?> руб.
                                                <?php endif; ?>
                                            </span>

                                    </span>
                                </div>
                                <div class="card-action">
                                    <div class="stacked-buttons" style="display: flex;">
                                         <button class="btn red darken-2 waves-light modal-trigger " data-target="modal1" id="mail-us">Отправить заявку
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_7"><rect width="32" height="32" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_7)"><g transform="matrix(1,0,0,1,0,2.5)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,16,16)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M9.432000160217285,-7.392000198364258 C9.782999992370605,-7.0320000648498535 10,-6.539999961853027 10,-6 C10,-6 10,6 10,6 C10,7.099999904632568 9.100000381469727,8 8,8 C8,8 -8,8 -8,8 C-9.100000381469727,8 -10,7.099999904632568 -10,6 C-10,6 -10,-6 -10,-6 C-10,-6.539999961853027 -9.782999992370605,-7.0320000648498535 -9.432000160217285,-7.392000198364258"></path></g><g opacity="1" transform="matrix(1,0,0,1,16,13.5)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M10,-3.5 C10,-3.5 0,3.5 0,3.5 C0,3.5 -10,-3.5 -10,-3.5"></path></g><g opacity="1" transform="matrix(1,0,0,1,16,13.5)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M9.187999725341797,-5.125 C9.187999725341797,-5.125 0,-12.25 0,-12.25 C0,-12.25 -9.187999725341797,-5.125 -9.187999725341797,-5.125"></path></g><g opacity="1" transform="matrix(1,0,0,1,0,1.2547435760498047)"><g opacity="1" transform="matrix(1,0,0,1,16,13.201000213623047)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M-6.49399995803833,-3.194000005722046 C-6.129000186920166,-3.578000068664551 -5.613999843597412,-3.818000078201294 -5.046000003814697,-3.818000078201294 C-5.046000003814697,-3.818000078201294 5.046000003814697,-3.818000078201294 5.046000003814697,-3.818000078201294 C5.578000068664551,-3.818000078201294 6.063000202178955,-3.6080000400543213 6.421999931335449,-3.2660000324249268"></path></g></g></g></g></svg>
                                        </button>

                                        <?php
                                        $file = get_field('file_link'); // ACF поле "Файл"

                                        if ($file):
                                            // Если ACF вернёт массив (тип поля = "File")
                                            $url = is_array($file) ? $file['url'] : $file;
                                        ?>
                                            <a href="<?php echo esc_url($url); ?>" 
                                            class="btn red darken-2 waves-light" 
                                            target="_blank" 
                                            rel="noopener">
                                                Учебный план
                                                <i class="material-icons right">assignment</i>
                                            </a>
                                        <?php endif; ?>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="course-license scrollspy">
                <div class="row">
                    <div class="col s12 m12 card-slidein-right">
                        <div class="card">
                            <div class="card-image">
                                    <img src="/wp-content/themes/Nousro-theme/images/license-til.webp" alt="Лицензия на образовательную деятельность">
                                    <img src="/wp-content/themes/Nousro-theme/images/license-obr.webp" alt="Лицензия на образовательную деятельность обратная сторона">
                                <span class="card-title">Наша лицензия</span>
                            </div>
                            <div class="card-content">
                                <p>В соответствии с полученной образовательной лицензией, выданной департаментом образования города Москвы, мы имеем право осуществлять обучение по таким направлениям:</p>
                                <ul>
                                    <li>повышение квалификации;</li>
                                    <li>профессиональная переподготовка;</li>
                                    <li>профессиональное обучение.</li>
                                </ul>
                                <p>Регистрационный номер лицензии № Л035-01298-77/00350389</p>
                                <p><b>При оформлении коллективной заявки действуют специальные цены — скидки до 30%. За подробной информацией обращайтесь к нашему специалисту.</b></p>
                            </div>
                            <div class="card-action">
                                <div class="stacked-buttons">
                                    <a href="/doc/" class="btn red darken-2 waves-effect waves-light bookmarks" type="submit" name="action">Учредительные документы
                                        <!-- <i class="material-icons right">send</i> -->
                                    </a>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>

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

                    <article class="page">
                        <h1 class="page__title"><?php the_title(); ?></h1>
                        

                        <?php the_content(); ?>

                        <div class="customAcardeon">
                            <?php if( have_rows('post_acc') ): ?>

                              

                                <?php while( have_rows('post_acc') ): the_row(); 

                                    // переменные
                                    $ac_icon = get_sub_field('ac_icon');
                                    $ac_title = get_sub_field('ac_title');
                                    $ac_text = get_sub_field('ac_text');

                                    ?>

                               

                                        <div class="accardeon">
                                            <div class="accardeon__title">
                                                <i class="material-icons"><?php echo $ac_icon; ?></i>
                                                <h2><?php echo $ac_title; ?></h2>
                                            </div>
                                            <div class="accardeon__content">
                                                <div class="accardeon__content-wrap">
                                                    <?php echo $ac_text; ?>
                                                </div>
                                                
                                            </div>
                                        </div>


                            

                                <?php endwhile; ?>


                            <?php endif; ?>
							<div class="accardeon">
                                <?php 
                                    if ( get_field('dobavit_v_xml') ) {
                                        ?>
                                        <div class="accardeon__title">
                                            <i class="material-icons">book_3</i>
                                            <h2>Учебный план по курсу <?php the_field('course-name'); ?></h2>
                                        </div>
                                        <?php
                                    }
                                ?>



								<div class="accardeon__content">
									<div class="accardeon__content-wrap">
										<?php 
$hoursCounter = 0;
if (have_rows('plan_kursa')): ?>

  <div style="margin-top:20px;margin-bottom:20px;">



    <style>
      tr {
        border-bottom: 0;

      }

      element.style {}

      .table-css td:nth-child(n+2) {
        text-align: center;
      }

      *,
      :after,
      :before {
        box-sizing: border-box;
      }

      td,
      th {
        padding: 15px 5px;
        display: inline-grid;
        text-align: left;
        vertical-align: middle;
        border-radius: 0;
      }
		.new-table tr td:nth-child(2) p{
    text-align: left;
}
		.new-table tr td:nth-child(1){
			padding-left:20px
		}

        .customAcardeon {
    /* border-bottom: 1px solid #e0e0e0; */
    /* border-radius: 8px; */
    overflow: hidden;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.12),0 1px 5px 0 rgba(0,0,0,.2);
}

.accardeon {
    border-bottom: 1px solid #eee;
    overflow: hidden;

}

.accardeon:last-child {
    border-bottom: none;
}

.accardeon__title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    padding: 15px 20px;
    /* font-weight: 600; */
    /* background: #f9f9f9; */
    transition: background 0.3s;
}

.accardeon__title:hover {
    background: #f1f1f1;
    color: red;
}

.accardeon__title i {
    margin-right: 10px;
    font-size: 24px;
    color: #087ccf;
}

.accardeon__title h2 {
    flex: 1;
	font-size:18px !important;
	margin:0;
	
}

.accardeon__title::after {
    content: "expand_more";
    font-family: "Material Icons";
    font-size: 20px;
    transition: transform 0.3s;
}

.accardeon.active .accardeon__title::after {
    transform: rotate(180deg);
}

.accardeon__content {
    max-height: 0;
    overflow: hidden;
    padding: 0 20px;
    background: #fff;
    transition: max-height 0.4s ease, padding 0.3s;
    /* font-size: 14px; */
    color: #5f6368;

}

.accardeon.active .accardeon__content {
    padding: 15px 20px;
    max-height: fit-content; /* достаточно большое значение для плавного раскрытия */
}
.accardeon__content-wrap{
    padding-left: 20px;
    padding-right: 20px;
}
.accardeon.active .accardeon__title{
    background: #f1f1f1;
    color: red;
}
.customTable tr:nth-child(odd){
    background-color: #f1f1f1;
}
    </style>



    <table width="100%" class="new-table customTable">
      <tbody>
        <tr>
          <td width="10%">
            <p>№</p>
          </td>
          <td width="70%">
            <p>Тема</p>
          </td>
          <td width="20%">
            <p>Часы</p>
          </td>
        </tr>

        <?php while (have_rows('plan_kursa')):
          the_row();

          // переменные
          $chasy = get_sub_field('chasy');
          $nazvanie = get_sub_field('nazvanie');
          $hoursCounter =  $hoursCounter + $chasy;

          ?>


          <tr>
            <td width="10%">
              <p><?php echo get_row_index(); ?></p>
            </td>
            <td width="70%">
              <p align="center">
                <?php echo $nazvanie; ?>
              </p>
            </td>
            <td width="20%">
              <p><?php echo $chasy; ?></p>
            </td>
          </tr>



        <?php endwhile; ?>
            <tr>
                <td width="80%">Всего часов</td>
                <td width="20%"><?php echo $hoursCounter; ?></td>
            </tr>
      </tbody>
    </table>
  </div>
<?php endif; ?>
									</div>

								</div>
							</div>

                        </div>

                        <div class="customAcardeon__text">
                            <?php the_field('acc_text'); ?>
                        </div>

                        <style>
                            .post-card-new{
                                display: flex;
                                align-items: center;
                                justify-content: flex-start;
                                gap: 20px;
                            }
                            .post-card__text{
                                line-height: 120%;
                                font-weight: 600;
                            }
                            .post-card__icon{
                                max-width: 100px;
                            }
                        </style>

                        <?php
                        // Только если это страница
                        if (is_page()) {

                            global $post;
                            $categories = wp_get_post_categories($post->ID);

                            // Проверяем категории: если нет категорий или есть 1 или 53 — выходим
                            if (empty($categories) || array_intersect($categories, [1, 53])) {
                                return; // ничего не выводим
                            }

                            // Получаем повторитель из страницы опций
                            if (have_rows('post-card-repeater', 'option')): ?>
                                <div class="post-cards-new">
  
                                            <?php while (have_rows('post-card-repeater', 'option')): the_row();
                                                $text = get_sub_field('text');
                                                $icon = get_sub_field('icon'); // массив с url, alt и т.д.
                                            ?>
                                                <div class="post-card-new">
                                                    <?php if ($icon): ?>
                                                        <div class="post-card__icon">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($text): ?>
                                                        <div class="post-card__text">
                                                            <?php echo wp_kses_post($text); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endwhile; ?>
           
                                </div>
                            <?php endif;
                        }
                        ?>


                    </article>
                </div>
            </div>
        </div>
    </div>
	
	
	
<?php get_template_part('custom/s-request'); ?>

</main>



    <?php require_once('featured-pages.php'); ?>



<div class="last-seen">
    <?php dynamic_sidebar( 'Left Sidebar' ); ?>
</div>
</div>

	<style>
        .parallax-container{
            height: auto !important;
        }

    @media screen and (max-width:1200px) {
        .distanceLearning .remote {
            display: flex;
            flex-direction: column-reverse !important;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-height: fit-content !important;
        }

        .distanceLearning .remote::before {
            display: none;
        }

        .distanceLearning .remote::after {
            display: none;
        }

        .distanceLearning .remote img {
            margin-left: 0 !important;
            margin-right: 0 !important;
            max-width: 100%;
            width: 100%;
        }

        .distanceLearning .remote .remote__text {
            position: relative !important;
            left: auto !important;
            width: 100% !important;
        }
    }


    @media screen and (max-width:1024px) {

		table, th, td {
            border: 1px solid black; /* Чёрная граница для таблицы, заголовков и ячеек */
        }
        .doc-page{
            display: grid !important;
            grid-template-columns: 1fr;
            grid-gap: 20px;
        }
        .doc-page .wp-caption{
            width: auto !important;
        }
        .stackd-images{
            display: grid !important;
            grid-template-columns: 1fr;
            grid-gap: 20px;
        }
        div#n2-ss-3 [data-hide-mobileportrait="1"], div#n2-ss-2 [data-hide-mobileportrait="1"]{
            display: block !important;
        }
        .customAdvantages {
            flex-direction: column;
            align-items: center !important;
            justify-content: flex-start !important;
            width: 100% !important;
            gap: 20px;
        }

        .customAdvantages .sh-card {
            width: 80% !important;
        }

        .customMainSlider {
            height: 450px;
        }

        .customMainSlider .carousel-item>img {
            height: 100%;
            object-fit: cover;
        }

        .customMainSlider .qqqs {
            min-width: auto;
            left: 0 !important;
            padding: 15px;
            position: relative;
            top: 0 !important;
        }

        .customMainSlider .heading {
            font-size: 34px;
        }

        .customMainSlider .subText {
            font-size: 20px;
        }

        .about-us__photo {
            margin-top: 20px;
        }

        .sertsCustom .documents__stall {
            flex-direction: column;
            height: fit-content !important;
        }

        .sertsCustom .stall__item {
            width: 100% !important;

        }

        .sertsCustom .stall-image {
            transform: translateY(0) !important;
        }

        .sertsCustom .stall-image img {
            opacity: 1 !important;
        }
        .clients .carousel{
            height: 150px !important;
        }

        .clients .carousel-item {
            width: 150px !important;
            height: 100px !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .clients .carousel-item>img{
            position: relative !important;
            top: auto !important;
            height: 100%;
            object-fit: contain;
        }
        .questions .content{
            height: auto !important;
        }

    }

    .swiper-slide .card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        min-height: 250px;
    }

    .swiper-slide .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide .card-image {
        max-width: 100% !important;
    }

    .swiper-slide .card-image .material-placeholder {
        height: 100%;
    }

    .swiper-slide .card .card-content {
        padding: 15px;
    }

    .swiper-slide .card .card-action {
        padding-left: 0;
        padding-right: 0;
        text-align: center;
    }
    #wpcf7-f47-o2 .parallax-container{
        height: auto !important;
    }

		.carousel.carousel-slider .carousel-item{
			    

		}
		.carousel.carousel-slider{
			max-height: 400px;
		}
</style>
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
    document.addEventListener("DOMContentLoaded", () => {
    const accardeons = document.querySelectorAll(".accardeon__title");

    accardeons.forEach(title => {
        title.addEventListener("click", () => {
            const parent = title.parentElement;

            // закрываем другие
            document.querySelectorAll(".accardeon").forEach(acc => {
                if (acc !== parent) {
                    acc.classList.remove("active");
                }
            });

            // переключаем текущий
            parent.classList.toggle("active");
        });
    });
});

</script>