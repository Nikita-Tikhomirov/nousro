<!-- ============================================ -->
<!-- НОВЫЙ ПЕРВЫЙ ЭКРАН -->
<!-- ============================================ -->
<?php
$hero_bg    = get_field('hero_bg');
$hero_title = get_field('hero_title');
$hero_desc  = get_field('hero_desc');
$hero_btns  = get_field('hero_buttons');
$services   = get_field('services_cards');
$cat_items  = get_field('cat_items');
$popular_tabs = get_field('popular_tabs');
?>

<section class="hero-section"<?php if ($hero_bg): ?> style="background-image: url('<?php echo esc_url($hero_bg['url']); ?>');"<?php endif; ?>>
    <div class="hero-section__overlay"></div>
    <div class="hero-section__content content">
        <?php if ($hero_title): ?>
            <h1 class="hero-section__title"><?php echo esc_html($hero_title); ?></h1>
        <?php endif; ?>

        <?php if ($hero_desc): ?>
            <p class="hero-section__desc"><?php echo esc_html($hero_desc); ?></p>
        <?php endif; ?>

        <?php if ($hero_btns): ?>
            <div class="hero-section__buttons">
                <?php foreach ($hero_btns as $btn): ?>
                    <?php
                    $btn_class = 'hero-btn';
                    if (!empty($btn['btn_style']) && $btn['btn_style'] === 'secondary') {
                        $btn_class .= ' hero-btn--secondary';
                    }
                    ?>
                    <a href="<?php echo esc_url($btn['btn_link']); ?>" class="<?php echo $btn_class; ?>">
                        <?php echo esc_html($btn['btn_text']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php if ($services): ?>
        <div class="hero-section__slider content">
            <div class="swiper servicesSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($services as $card): ?>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <?php if (!empty($card['service_icon'])): ?>
                                    <div class="service-card__icon">
                                        <img src="<?php echo esc_url($card['service_icon']['url']); ?>"
                                             alt="<?php echo esc_attr($card['service_title']); ?>">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($card['service_title'])): ?>
                                    <h3 class="service-card__title"><?php echo esc_html($card['service_title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($card['service_desc'])): ?>
                                    <p class="service-card__desc"><?php echo esc_html($card['service_desc']); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($card['service_link'])): ?>
                                    <a href="<?php echo esc_url($card['service_link']); ?>" class="service-card__link">Подробнее</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    <?php endif; ?>
</section>

<!-- ============================================ -->
<!-- КАТЕГОРИИ (сетка иконок) -->
<!-- ============================================ -->
<?php if ($cat_items): ?>
<section class="section categories-grid-section" style="background: #fff;">
    <div class="content">
        <div class="categories-grid">
            <?php foreach ($cat_items as $item): ?>
                <a href="<?php echo esc_url($item['cat_url']); ?>" class="categories-grid__item">
                    <?php if (!empty($item['cat_icon'])): ?>
                        <span class="categories-grid__icon">
                            <img src="<?php echo esc_url($item['cat_icon']['url']); ?>" alt="<?php echo esc_attr($item['cat_label']); ?>" loading="lazy">
                        </span>
                    <?php endif; ?>
                    <span class="categories-grid__label"><?php echo esc_html($item['cat_label']); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================ -->
<!-- ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ (табы + слайдеры) -->
<!-- ============================================ -->
<?php if ($popular_tabs): ?>
<section class="section popular-section" style="background: #f6f7f9;">
    <div class="content">
        <h2 class="section__title" data-aos="fade-up">Популярные направления</h2>

        <div class="popular-tabs">
            <div class="popular-tabs__nav">
                <?php $tab_index = 0; foreach ($popular_tabs as $tab): ?>
                    <button class="popular-tabs__btn <?php echo $tab_index === 0 ? 'active' : ''; ?>" data-tab="<?php echo $tab_index; ?>">
                        <?php echo esc_html($tab['tab_title']); ?>
                    </button>
                <?php $tab_index++; endforeach; ?>
            </div>

            <div class="popular-tabs__panels">
                <?php $tab_index = 0; foreach ($popular_tabs as $tab): ?>
                    <div class="popular-tabs__panel <?php echo $tab_index === 0 ? 'active' : ''; ?>" data-tab="<?php echo $tab_index; ?>">
                        <?php if (!empty($tab['tab_courses'])): ?>
                            <div class="swiper popularSwiper popularSwiper-<?php echo $tab_index; ?>">
                                <div class="swiper-wrapper">
                                    <?php foreach ($tab['tab_courses'] as $course): ?>
                                        <div class="swiper-slide">
                                            <div class="popular-card">
                                                <?php if (!empty($course['course_img'])): ?>
                                                    <div class="popular-card__image">
                                                        <img src="<?php echo esc_url($course['course_img']['url']); ?>" alt="<?php echo esc_attr($course['course_title']); ?>" loading="lazy">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="popular-card__body">
                                                    <?php if (!empty($course['course_title'])): ?>
                                                        <h3 class="popular-card__title"><?php echo esc_html($course['course_title']); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if (!empty($course['course_hours'])): ?>
                                                        <span class="popular-card__hours"><?php echo esc_html($course['course_hours']); ?> ч.</span>
                                                    <?php endif; ?>
                                                    <?php if (!empty($course['course_link'])): ?>
                                                        <a href="<?php echo esc_url($course['course_link']); ?>" class="popular-card__btn">Подробнее</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php $tab_index++; endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================ -->
<!-- ОСТАЛЬНЫЕ СЕКЦИИ (из оригинальной главной) -->
<!-- ============================================ -->

<section class="section about-us-compact" style="background: #fff;">
    <div class="content">
        <div class="about-us-compact__frame" data-aos="fade-up">
            <div class="about-us-compact__left">
                <p class="about-us-compact__label">О нашем учебном центре</p>
                <div class="about-us-compact__desc">
                    <p>Поможем получить необходимое профильное образование или повысить квалификацию. С 2011 года мы разработали сотни программ по всем актуальным направлениям. Более того, мы готовы написать и согласовать программу обучения для вас.</p>
                    <ul>
                        <li>Очный и дистанционный формат, выездные занятия</li>
                        <li>Скидки для постоянных клиентов и групп</li>
                        <li>Уникальные разработки в онлайн обучении</li>
                        <li>Опытные практики-преподаватели</li>
                    </ul>
                    <a href="/about/" target="_blank" class="about-us-compact__link">Сведения об образовательной организации →</a>
                </div>
            </div>
            <div class="about-us-compact__right">
                <img src="/wp-content/themes/Nousro-theme/images/nochu-dpo-muc.webp" alt="Сведения об образовательной организации" loading="lazy">
            </div>
        </div>
    </div>
</section>

<style>
    .distanceLearning__wrap {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 80px;
        align-items: center;
    }
    @media screen and (max-width:1024px) {
        .distanceLearning__wrap {
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            justify-content: center;
        }
    }
</style>

<section class="distanceLearning">
    <div class="content">
        <div class="distanceLearning__wrap">
            <div class="distanceLearning__imgWrap">
                <img src="/wp-content/themes/Nousro-theme/assets/images/distancionnoe-obuchenie.webp"
                    alt="Дистанционное образование" id="remote-img">
            </div>
            <div class="distanceLearning__textWrap">
                <p class="remote__heading">Дистанционное обучение</p>
                <p>Дистанционное образование – удобная форма обучения для людей, привыкших рационально использовать
                    свое время. Качество и результат обучения ничем не отличаются от очного обучения. Мы оказываем
                    услуги не только физическим лицам, но и юридическим субъектам для профессиональной подготовки и
                    повышения квалификации их сотрудников.</p>
                <p>Дистанционное обучение в Межрегиональном Учебном Центре – это прекрасная возможность получить
                    дополнительное профессиональное образование или специальность. Вам предоставляется персональный
                    доступ в личный кабинет, где хранится вся информация о необходимом курсе. Проходить обучение вы
                    можете в удобное для Вас время. Даже после обучения доступ в личный кабинет остается открытым, и
                    вы всегда можете зайти на сайт и освежить свои знания.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- ДОКУМЕНТЫ (Swiper) -->
<!-- ============================================ -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<section class="section documents customDocs">
    <div class="documents__wrapper content" style="white-space: nowrap;">
        <h3 class="section__title aos-init aos-animate" data-aos="fade-up-right" data-aos-delay="400"
            data-aos-offset="200">У нас есть все законные основания</h3>

        <div class="swiper docsCustom">
            <div class="swiper-wrapper">
                <div class="swiper-slide col s12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <div class="material-placeholder">
                                <a data-fslightbox="docs"
                                    href="/wp-content/themes/Nousro-theme/images/licenziya-na-obrazovatelnuyu-deyatelnost.webp"
                                    class="material-placeholder"><img alt="Лицензия на образовательную деятельсность" class=""
                                        src="/wp-content/themes/Nousro-theme/images/licenziya-na-obrazovatelnuyu-deyatelnost-small.webp"></a>
                            </div>
                        </div>
                        <div class="card-stacked" style="flex: 1;">
                            <div class="card-content">
                                <p>Лицензия на <br>профессиональное<br> обучение от <br>Департамента<br> образования
                                    Москвы</p>
                            </div>
                            <div class="card-action">
                                <a href="/doc/">Все документы</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col s12 m6 ">
                    <div class="card horizontal">
                        <div class="card-image">
                            <div class="material-placeholder">
                                <a href="/wp-content/themes/Nousro-theme/images/akkreditaciya-ohrana-truda.webp"
                                    data-fslightbox="docs" class="material-placeholder"><img alt="Аккредитация по охране труда" class=""
                                        src="/wp-content/themes/Nousro-theme/images/akkreditaciya-ohrana-truda-small.webp">
                                </a>
                            </div>
                        </div>
                        <div class="card-stacked" style="flex: 1;">
                            <div class="card-content">
                                <p>Аккредитация от<br> Министерства труда и<br> социальной защиты<br> Российской
                                    Федерации</p>
                            </div>
                            <div class="card-action">
                                <a href="/doc/">Все документы</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col s12 m6 ">
                    <div class="card horizontal">
                        <div class="card-image">
                            <div class="material-placeholder">
                                <a data-fslightbox="docs"
                                    href="/wp-content/themes/Nousro-theme/images/soglasovanie-program-mchs.webp"
                                    class="material-placeholder"><img alt="Согласования программ" class=""
                                        src="/wp-content/themes/Nousro-theme/images/soglasovanie-program-mchs-small.webp"></a>
                            </div>
                        </div>
                        <div class="card-stacked" style="flex: 1;">
                            <div class="card-content" style="font-size: 13px">
                                <p>Разработанные<br> программы обучения<br> согласованы<br> Управлением<br> ГПН ГУ
                                    МЧС
                                    РФ,<br> департаментом<br> образования<br> города Москвы и др.</p>
                            </div>
                            <div class="card-action">
                                <a href="/doc/">Все документы</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col s12 m6 ">
                    <div class="card horizontal">
                        <div class="card-image">
                            <div class="material-placeholder">
                                <a data-fslightbox="docs"
                                    href="/wp-content/themes/Nousro-theme/images/sanitarnoe-zakluchenie.webp"
                                    class="material-placeholder"><img alt="Санитарное заключение" class=""
                                        src="/wp-content/themes/Nousro-theme/images/sanitarnoe-zakluchenie-small.webp"></a>
                            </div>
                        </div>
                        <div class="card-stacked" style="flex: 1;">
                            <div class="card-content" style="font-size: 14px">
                                <p>Наши<br> учебные помещения<br> имеют<br> положительные<br> заключения<br> ГПН
                                    и<br>
                                    СЭС Роспотребнадзора</p>
                            </div>
                            <div class="card-action">
                                <a href="/doc/">Все документы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display:flex; gap:25px; justify-content:center">
                <div class="next-arrow" style="
                                       background-image:url('https://static.tildacdn.com/tild3232-6361-4565-b366-373464613938/Group_2.svg');
                                       background-size:cover;
                                       background-repeat:no-repeat;
                                       width:25px;
                                       height:38px;
                                       cursor:pointer;
                                       user-select: none;
                                       "></div>
                <div class="prev-arrow" style="
                                       background-image:url('https://static.tildacdn.com/tild3232-6361-4565-b366-373464613938/Group_2.svg');
                                       background-size:cover;
                                       background-repeat:no-repeat;
                                       width:25px;
                                       height:38px;
                                       transform:rotate(180deg);
                                       cursor:pointer;
                                       user-select: none;
                                       "></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- ФОРМА ЗАЯВКИ -->
<!-- ============================================ -->
<?php get_template_part('custom/s-request'); ?>

<!-- ============================================ -->
<!-- ПРЕИМУЩЕСТВА (Вы ничем не рискуете) -->
<!-- ============================================ -->
<section class="section documents" style="background: white;">
    <div class="documents__wrapper content">
        <h3 class="section__title" data-aos="fade-up-right" data-aos-delay="400" data-aos-offset="200">Вы ничем не
            рискуете</h3>
        <div class="customAdvantages"
            style="width:750px; margin:0 auto;display:flex;justify-content:space-between;">
            <div class="sh-card z-depth-3">
                <img src="/wp-content/themes/Nousro-theme/images/dogovor.webp" alt="Мы вернем деньги,
                        если вас не устроил учебный процесс" style="margin-top: 10px;"
                    align="center">
                <img src="number.png" alt="Мы вернем деньги,
                        если вас не устроил учебный процесс" width="180px" align="center">
                <p>НАДЕЖНО</p>
                <p style="padding-left:8px;padding-right:8px;font-size:10pt;text-align:center;">Мы вернем деньги,
                    если вас не устроил учебный процесс</p>
            </div>
            <div class="sh-card z-depth-3">
                <img src="/wp-content/themes/Nousro-theme/images/postopata.webp"  alt="Мы являемся
                        участником государственных тендеров" style="margin-top: 10px;"
                    align="center">
                <img src="number2.png" width="180px" align="center" alt="участники тендеров">
                <p>УДОБНО</p>
                <p style="padding-left:8px;padding-right:8px;font-size:10pt;text-align:center;">Мы являемся
                    участником государственных тендеров, поэтому все условия подписанного договора соблюдаются
                    беспрекословно</p>
            </div>
            <div class="sh-card z-depth-3">
                <img src="/wp-content/themes/Nousro-theme/images/vozvrat.webp" alt="Есть возможность
                        пройти обучение по 100% постоплате" style="margin-top: 10px;"
                    align="center">
                <img src="number3.png" width="180px" align="center" alt="Есть возможность
                        пройти обучение по 100% постоплате">
                <p>БЕЗОПАСНО</p>
                <p style="padding-left:8px;padding-right:8px;font-size:10pt;text-align:center;">Есть возможность
                    пройти обучение по 100% постоплате</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- СЕРТИФИКАТЫ (В результате обучения вы получаете) -->
<!-- ============================================ -->
<section class="section documents sertsCustom" style="background: white;">
    <div class="content">
        <h3 class="section__title" data-aos="fade-up">В результате обучения вы получаете</h3>
        <div class="documents__stall stall" data-aos="fade-up">
            <a href="/povyshenie-kvalifikacii.php" class="stall__item">
                <div class="stall-image">
                    <img src="/wp-content/themes/Nousro-theme/images/udostoverenie-povishenie-kvalifikacii.webp"
                        alt="Удостоверение о повышении квалификации">
                </div>
                <div class="stall__heading">
                    Удостоверение о повышении квалификации
                </div>
                <div class="stall__button">
                    <span class="stall__more">+</span>Подробнее
                </div>
            </a>
            <a href="/povyshenie-kvalifikacii.php" class="stall__item">
                <div class="stall-image">
                    <img src="/wp-content/themes/Nousro-theme/images/sertificat.webp" alt=" Сертификат о прохождении курсов ">
                </div>
                <div class="stall__heading">
                    Сертификат о прохождении курсов
                </div>
                <div class="stall__button">
                    <span class="stall__more">+</span>Подробнее
                </div>
            </a>

            <a href="/rabochie-specialnosti.php" class="stall__item">
                <div class="stall-image">
                    <img src="/wp-content/themes/Nousro-theme/images/svidetelstvo.webp" alt="Свидетельство о присвоении профессии">
                </div>
                <div class="stall__heading">
                    Свидетельство о присвоении профессии
                </div>
                <div class="stall__button">
                    <span class="stall__more">+</span>Подробнее
                </div>
            </a>

            <a href="/professionalnaya-perepodgotovka.php" class="stall__item">
                <div class="stall-image">
                    <img src="/wp-content/themes/Nousro-theme/images/diplom.webp" alt="Диплом о профессиональной переподготовке">
                </div>
                <div class="stall__heading">
                    Диплом о профессиональной переподготовке
                </div>
                <div class="stall__button">
                    <span class="stall__more">+</span>Подробнее
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- КЛИЕНТЫ -->
<!-- ============================================ -->
<style>
    .clients{
        padding-bottom: 25px;
    }
    .clients .carousel{
        height:80px !important;
    }
</style>

<section class="section" style="background: white;">
    <div class="clients content">
        <h3 class="section__title">Благодарные клиенты</h3>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/1client.webp" alt="OOO Дайхманн"
                    title="OOO Дайхманн"></a>
            <a class="carousel-item" href="#two!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/2client.webp"
                    alt="ООО АйДи-Технологии управления" title="ООО АйДи-Технологии управления"
                    style="height: 60px;"></a>
            <a class="carousel-item" href="#three!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/3client.webp"
                    alt="Акционерное общество Нокиа Солюшнз энд Нетворкс"
                    title="Акционерное общество Нокиа Солюшнз энд Нетворкс"></a>
            <a class="carousel-item" href="#four!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/4client.webp"
                    alt="ООО БАЗИС ДЕВЕЛОПМЕНТ" title="ООО БАЗИС ДЕВЕЛОПМЕНТ"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/5client.webp"
                    alt="ФГУП РФЯЦ-ВНИИЭФ" title="ФГУП РФЯЦ-ВНИИЭФ"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/6client.webp"
                    alt="ООО Банк БЦК-Москва" title="ООО Банк БЦК-Москва"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/7client.webp"
                    alt="ООО БЕБЕЛЬ" title="ООО БЕБЕЛЬ"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/8client.webp"
                    alt="ООО Аякс" title="ООО Аякс"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/9client.webp" alt="АО НИКИЭТ"
                    title="АО НИКИЭТ"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/10client.webp"
                    alt="СтомАтриум" title="СтомАтриум"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/11client.webp"
                    alt="ООО Медстрой" title="ООО Медстрой"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/12client.webp"
                    alt="ООО ЭРА" style="height: 40px;"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/13client.webp"
                    alt="Эко-Город" title="Эко-Город"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/14client.webp"
                    alt="АО Металлургический завод ЭЛЕКТРОСТАЛЬ" title="АО Металлургический завод ЭЛЕКТРОСТАЛЬ"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://nousro.ru/wp-content/themes/Nousro-theme/images/15client.webp"
                    alt="ООО АЭГ" title="ООО АЭГ"></a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- НАШИ ПРЕИМУЩЕСТВА -->
<!-- ============================================ -->
<section class="section questions">
    <div class="content">
        <section class="section first-screen" style="padding-bottom: 0px;padding-top:25px;">
            <div class="content">
                <div class="row" style="margin-bottom: 0px;">
                    <div class="col s12 m12">
                        <div class="card horizontal"
                            style="background: transparent;margin-top: 0px;margin-bottom: 0px;box-shadow:none;">
                            <div class="card-image hide-on-med-and-down aos-init aos-animate"
                                data-aos="fade-up-right" data-aos-delay="300"
                                style="position: relative;background: white;">
                                <img src="/wp-content/themes/Nousro-theme/assets/images/monitor.png" alt="Онлайн запись">
                                <iframe class="iv-i" style="display:block;margin:0;padding:0;border:0;"
                                    src="//open.ivideon.com/embed/v2/?server=100-df51ed894c1e20f0d1ccd6e9d091a676&amp;camera=0&amp;width=&amp;height=&amp;lang=ru&amp;ap"
                                    allowfullscreen="" width="100%" height="150" frameborder="0"></iframe>
                            </div>
                            <div class="questions__advatages advatages">
                                <h3 class="questions__title">Наши преимущества</h3>
                                <div class="advatages__item">
                                    <div class="advatages__image"><img
                                            src="/wp-content/themes/Nousro-theme/assets/images/adv-ico1.png" alt="250 учебных программ">
                                    </div>
                                    <div class="advatages__text"><strong>Более 250 учебных программ,</strong>в том
                                        числе курсы, согласованные в МЧС, Министерстве труда и ФСТЭК.</div>
                                </div>
                                <div class="advatages__item">
                                    <div class="advatages__image"><img
                                            src="/wp-content/themes/Nousro-theme/assets/images/adv-ico2.png" alt="Соответствие профстандартам">
                                    </div>
                                    <div class="advatages__text"><strong>Соответствие образовательных программ
                                            профстандартам, </strong>федеральным государственным требованиям и
                                        требованиям национальных объединений.</div>
                                </div>
                                <div class="advatages__item">
                                    <div class="advatages__image"><img
                                            src="/wp-content/themes/Nousro-theme/assets/images/adv-ico3.png" alt="Опытные профессоры преподователи">
                                    </div>
                                    <div class="advatages__text"><strong>Опытный профессорско-преподавательский
                                            состав, </strong>состоящий из экспертов и ведущих специалистов в своей
                                        области.</div>
                                </div>
                                <div class="advatages__item">
                                    <div class="advatages__image"><img
                                            src="/wp-content/themes/Nousro-theme/assets/images/adv-ico4.png" alt="Дистанционное обучение">
                                    </div>
                                    <div class="advatages__text"><strong>Использование современных дистанционных
                                            образовательных технологий,</strong>позволяющих слушателям проходить
                                        обучение в индивидуальном темпе, находясь в любой точке России.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- ============================================ -->
<!-- ОТЗЫВЫ -->
<!-- ============================================ -->
<section class="section reviews-section" style="background: #fff;">
    <div class="content">
        <h2 class="section__title" data-aos="fade-up">Отзывы о Межрегиональном Учебном Центре</h2>
        <div class="reviews-grid">
            <div class="review-card" data-aos="fade-up" data-aos-delay="0">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Нужно было срочно обучить сотрудников по охране труда перед проверкой. Сделали всё за 2 дня, документы получили без проблем. Проверку прошли. Спасибо за оперативность.</p>
                <p class="review-card__author"><strong>Алексей</strong>, ООО «СтройГарант»</p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Работаю с разными учебными центрами, но здесь понравилось, что всё четко и без лишней бюрократии. Быстро отвечают, помогают подобрать программу. Уже не первый раз обращаемся.</p>
                <p class="review-card__author"><strong>Ирина</strong>, специалист по кадрам</p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="200">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Проходил повышение квалификации дистанционно. Удобно, что можно учиться в своем темпе. Материалы нормальные, без воды. Документы пришли вовремя.</p>
                <p class="review-card__author"><strong>Дмитрий</strong></p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="0">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Нужно было обучить сразу 12 человек по пожарной безопасности. Все оформили дистанционно, сделали скидку за объем. Очень удобно, будем сотрудничать дальше.</p>
                <p class="review-card__author"><strong>Ольга</strong>, HR</p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Искал, где быстро пройти обучение по ГО и ЧС. Здесь объяснили, что нужно именно под мою должность, оформили за короткий срок. Всё официально, без проблем.</p>
                <p class="review-card__author"><strong>Сергей</strong>, инженер</p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="200">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Честно, сначала сомневалась из-за дистанционного формата, но в итоге всё прошло нормально. Документы настоящие, приняли без вопросов. Спасибо менеджеру за консультацию.</p>
                <p class="review-card__author"><strong>Марина</strong></p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="0">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Заказывал обучение для себя и сотрудника. Всё сделали быстро, без лишних звонков и навязывания. Удобный формат, рекомендую.</p>
                <p class="review-card__author"><strong>ИП Кузнецов</strong></p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Помогли разобраться, какое обучение нужно для нашей компании. До этого вообще не понимали, что требуется по закону. Сейчас всё закрыли и спокойно работаем.</p>
                <p class="review-card__author"><strong>Екатерина</strong>, бухгалтер</p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="200">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Нормальный учебный центр. Без лишнего пафоса, просто делают свою работу. Сроки соблюдают, документы выдают.</p>
                <p class="review-card__author"><strong>Андрей</strong></p>
            </div>
            <div class="review-card" data-aos="fade-up" data-aos-delay="0">
                <div class="review-card__stars">★★★★★</div>
                <p class="review-card__text">Работаем уже второй год. Закрываем через них все вопросы по обучению сотрудников. Удобно, что есть разные направления и не нужно искать нескольких подрядчиков.</p>
                <p class="review-card__author"><strong>Виктор</strong>, руководитель отдела</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- FAQ (Часто задаваемые вопросы) -->
<!-- ============================================ -->
<section class="section faq-section" style="background: #f6f7f9;">
    <div class="content">
        <h2 class="section__title" data-aos="fade-up">Часто задаваемые вопросы</h2>
        <div class="faq-accordion" data-aos="fade-up">
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Какие направления обучения доступны в НОЧУ ДПО МУЦ?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Мы проводим обучение по основным направлениям: повышение квалификации, профессиональная переподготовка, рабочие профессии. А также по специализированным программам: охрана труда, пожарная безопасность, ГО и ЧС, экология, радиационная и информационная безопасность, строительство, металлолом, а также обучение для получения лицензии МЧС.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Сколько длится обучение?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Длительность обучения зависит от программы: от 16 академических часов (повышение квалификации) до 600 академических часов (профессиональная переподготовка и расширенные программы).</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Какие категории слушателей могут пройти обучение?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Обучение доступно для: руководителей и специалистов, работников предприятий, сотрудников, ответственных за охрану труда, пожарную и промышленную безопасность, рабочих профессий.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Какие документы выдаются после обучения?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>По итогам обучения выдаются: удостоверение о повышении квалификации, диплом о профессиональной переподготовке, свидетельство о присвоении рабочей профессии. Все документы оформляются в соответствии с требованиями законодательства РФ.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Можно ли пройти обучение дистанционно?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Да. Основной формат обучения — дистанционный. Обучение можно пройти полностью онлайн из любого региона без отрыва от работы.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Подходит ли обучение для проверок и надзорных органов?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Да. Все программы соответствуют действующим нормативным требованиям и подходят для проверок Роструда, МЧС и других надзорных органов.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Какие направления наиболее востребованы?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Чаще всего обучаются по направлениям: охрана труда, пожарная безопасность, гражданская оборона, экологическая безопасность, обучение для лицензии МЧС, повышение квалификации руководителей.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Можно ли обучить сразу сотрудников компании?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Да. Мы работаем с организациями и можем обучать группы сотрудников с оформлением полного пакета документов.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>Есть ли у учебного центра лицензия?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Да, образовательная деятельность осуществляется на основании действующей лицензии на дополнительное профессиональное образование.</p>
                </div>
            </div>
            <div class="faq-item-custom">
                <button class="faq-item-custom__header">
                    <span>От чего зависит выбор программы обучения?</span>
                    <i class="material-icons">expand_more</i>
                </button>
                <div class="faq-item-custom__body">
                    <p>Программа подбирается исходя из должности сотрудника, требований законодательства и целей обучения (допуск к работе, повышение квалификации или переподготовка).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- БЛОГ -->
<!-- ============================================ -->
<?php get_template_part('custom/s-blog'); ?>

<section class="pre-footer"></section>

<!-- ============================================ -->
<!-- SWIPER ИНИЦИАЛИЗАЦИИ -->
<!-- ============================================ -->

<script>
// Swiper для документов
document.addEventListener('DOMContentLoaded', () => {
    const swiperDocs = new Swiper('.docsCustom', {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: '.docsCustom .prev-arrow',
            prevEl: '.docsCustom .next-arrow',
        },
    });
});

// Табы Популярные направления
document.addEventListener('DOMContentLoaded', () => {
    const tabBtns = document.querySelectorAll('.popular-tabs__btn');
    const tabPanels = document.querySelectorAll('.popular-tabs__panel');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');

            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanels.forEach(p => p.classList.remove('active'));

            btn.classList.add('active');
            const panel = document.querySelector('.popular-tabs__panel[data-tab="' + tabId + '"]');
            if (panel) panel.classList.add('active');

            // Обновить Swiper после показа панели
            const swiperEl = panel ? panel.querySelector('.swiper') : null;
            if (swiperEl && swiperEl.swiper) {
                swiperEl.swiper.update();
            }
        });
    });

    // Инициализация Popular Swipers
    document.querySelectorAll('.popularSwiper').forEach(el => {
        new Swiper(el, {
            slidesPerView: 1,
            spaceBetween: 16,
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev'),
            },
            breakpoints: {
                480: { slidesPerView: 2, spaceBetween: 16 },
                768: { slidesPerView: 3, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 24 },
            }
        });
    });
});

// FAQ аккордеон
document.addEventListener('DOMContentLoaded', () => {
    const faqHeaders = document.querySelectorAll('.faq-item-custom__header');

    faqHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const isActive = item.classList.contains('active');

            // Закрыть все
            document.querySelectorAll('.faq-item-custom').forEach(el => el.classList.remove('active'));

            // Открыть текущий, если был закрыт
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});

// Swiper для карточек услуг
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.servicesSwiper', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
            nextEl: '.servicesSwiper .swiper-button-next',
            prevEl: '.servicesSwiper .swiper-button-prev',
        },
        pagination: {
            el: '.servicesSwiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            480: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 24 },
            1024: { slidesPerView: 4, spaceBetween: 24 },
            1280: { slidesPerView: 5, spaceBetween: 30 },
        }
    });
});
</script>
