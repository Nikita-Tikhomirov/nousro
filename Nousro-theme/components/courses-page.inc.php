<main>
<?php if(!get_field('course-name')): ?>
    <!-- Top Banners -->
    <div class="carousel carousel-slider center hide-on-med-and-down">
        <div class="carousel-fixed-item center middle-indicator">
            <!-- <div class="left">
            <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
            </div>
        
            <div class="right">
            <a href="#" class="moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
            </div> -->
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
                            <div class="card customCatCard">
                                <a href="<?php the_permalink()?>" class="card-image ">
                                    <img src="<?php $img = get_field('image'); echo $img['url'];?>" alt="<?php echo $img['alt']?>">
                                    <span class="card-title"><?php the_field('short-desc'); ?></span>
                                </a>
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
                                        <span class="scheme__value new badge blue z-depth-1"> от <?php echo get_field('price-from'); ?> до <?php echo get_field('price-to'); ?></span>
                                    </span>
                                </div>
                                <div class="card-action">
                                    <div class="stacked-buttons">
                                        <button class="btn red darken-2 waves-light modal-trigger " href="#modal1" id="mail-us">Отправить заявку
                                            <!-- <i class="material-icons right">send</i> -->
                                        </button>
                                       
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
                                    <img src="/wp-content/themes/Nousro-theme/images/license-til.webp" alt="Лицензия на образовательную деятельность обратная сторона">
                                    <img src="/wp-content/themes/Nousro-theme/images/license-obr.webp" alt="Лицензия на образовательную деятельность обратная сторона">
                                <span class="card-title">Наша лицензия</span>
                            </div>
                            <div class="card-content">
                                <p>В соответствии с полученной образовательной лицензией, выданной департаментом образования города Москвы, мы на законном основании имеем право осуществлять обучение по таким направлениям:</p>
                                <ul>
                                    <li>повышение квалификации;</li>
                                    <li>профессиональная переподготовка;</li>
                                    <li>профессиональное обучение.</li>
                                </ul>
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
                        <h3 class="page__title interestedCourcesTitle"><?php the_title(); ?></h3>
                        
                        <?php the_content(); ?>

                        <div class="courses-page">
                        <div class="row">
                            <!-- Category pages -->
                            <div class="last-seen">
                                <hr>
                            <?php 
                            // параметры по умолчанию
                            $posts = get_posts( array(
                                'numberposts' => 499,
                                'category'    => "6,8,9",
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'page',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            $loopedNumber = 0;
                            foreach( $posts as $post ){
                                setup_postdata($post); ?>
                                
                                <!--  -->
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
                                        
                                        <div class="card hoverable category-card customCatCard">
                                            <a href="<?php the_permalink(); ?>">
                                            <div class="card-image">
                                                <!-- <img src="<?php echo $card_image['url'] ?>"> -->
                                                <!-- <img src="<?php echo $featured_img_url = get_the_post_thumbnail_url('full'); ?>" alt=""> -->
                                                <?php the_post_thumbnail(); ?>
                                                <span class="card-title "><?php /*the_title();*/ echo $short_desc; ?></span>
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
                                                            <span class="scheme__value new badge blue"> от <?php echo $price_from; ?> <?php echo $price_to; ?></span>
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
                                <!--  -->

                            <?php }

                            wp_reset_postdata(); // сброс
                            ?>
                            </div>
                            </div>
                        </div>
                        <!-- <div class="page__footerText">
                            Some special footer text! Is a representing the location of the resource to import. The URL may be absolute or relative. Note that the URL for a Mozilla package need not actually specify a file; it can just specify the package name and part, and the appropriate file is chosen automatically (e.g. chrome://communicator/skin/). See here for more information.
                        </div> -->
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="/wp-content/themes/Nousro-theme/assets/images/parralax.jpg"></div>
        <div class="rellax-form">
            <div class="row">
                <div class="col s12 m7">
                    <span class="rellax-form__title">Оставьте заяку и мы с вами свяжемся!</span>
                </div>
                <form class="col s12 m5 card rellax-form__card">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Ваше имя" id="first_name" type="text" class="validate">
                <label for="first_name" class="active">Имя</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Телефон</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
    <input type="text" placeholder="Введите цифрами: Пятьдесят пять">
        <div class="row" style="display: flex; justify-content: flex-end;">
            <button class="btn red darken-2 modal-trigger" href="#" id="mail-us" style="padding: 8px 16px; background-color: #c62828; color: white; border: none; border-radius: 4px; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                <span style="vertical-align: middle; margin-right: 8px;">Отправить заявку</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" preserveAspectRatio="xMidYMid meet" style="width: 20px; height: 20px;">
                    <defs>
                        <clipPath id="__lottie_element_7">
                            <rect width="32" height="32" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#__lottie_element_7)">
                        <g transform="matrix(1,0,0,1,0,2.4599266052246094)" opacity="1" style="display: block;">
                            <g opacity="1" transform="matrix(1,0,0,1,16,16)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M9.402999877929688,-7.421000003814697 C9.770999908447266,-7.058000087738037 10,-6.554999828338623 10,-6 C10,-6 10,6 10,6 C10,7.099999904632568 9.100000381469727,8 8,8 C8,8 -8,8 -8,8 C-9.100000381469727,8 -10,7.099999904632568 -10,6 C-10,6 -10,-6 -10,-6 C-10,-6.554999828338623 -9.770999908447266,-7.058000087738037 -9.402999877929688,-7.421000003814697"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,16,13.5)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M10,-3.5 C10,-3.5 0,3.5 0,3.5 C0,3.5 -10,-3.5 -10,-3.5"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,16,13.5)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M9.20101547241211,-5.098952293395996 C9.20101547241211,-5.098952293395996 0,-11.997538566589355 0,-11.997538566589355 C0,-11.997538566589355 -9.20101547241211,-5.098952293395996 -9.20101547241211,-5.098952293395996"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,0,5.280731201171875)">
                                <g opacity="1" transform="matrix(1,0,0,1,16,13.201000213623047)">
                                    <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(65025,65025,65025)" stroke-opacity="1" stroke-width="2" d=" M-3.377000093460083,-3.818000078201294 C-1.5420000553131104,-3.818000078201294 1.3960000276565552,-3.818000078201294 3.2720000743865967,-3.818000078201294"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </form>
            </div>
        </div>
    </div>
</main>


<!-- FEATURED -->
    <?php require_once('featured-pages.php'); ?>
<!-- END FEATURED -->

<div class="last-seen">
    <!--<?php dynamic_sidebar( 'Left Sidebar' ); ?>-->
</div>

<style>
    .interestedCourcesTitle{
        font-size: 29px !important;
    }
    .customCatCard .card-title{
        font-size: 18px !important;
    }
	.parallax-container{
		height: auto !important;
	}
</style>