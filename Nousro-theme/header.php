<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1;">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php wp_head(); ?>





	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?>

<body>

    <?php
    if (is_front_page()) { ?>
        <div class="underlay" data-aos="fade-up" data-aos-delay="1400">
            <video src="/wp-content/themes/Nousro-theme/assets/bg_balls_1080.mp4" class="underlay__video" autoplay loop
                muted></video>
        </div>
    <?php }
    ?>

    <!--Main Navigation-->
    <header>

        <?php require_once('components/navbar.inc.php'); ?>

    </header>
    <!--Main Navigation-->
    <style>
        .bvi-shortcode {
            z-index: 9999;
            position: absolute;
        }

        article.page h1 {
            font-size: 32px;
        }

        article.page h2 {
            font-size: 24px;
        }

        .wpcf7-list-item.first {
            margin-right: 10px
        }

        .wpcf7-form-control-wrap input::placeholder {
            color: #fff
        }

        .last-seen h2 {
            font-size: 29px
        }

        .table-css {
            color: #ffffff;
        }

        .table-css td:nth-child(n+2) {
            text-align: center;
        }

        .table-css th {
            text-align: center;
        }

        .table-css tr:nth-child(odd) {
            background-color: #42a5f5;
            /* Ñ„Ð¾Ð½ Ð½ÐµÑ‡ÐµÑ‚Ð½Ñ‹Ñ… ÑÑ‚Ð¾Ð»Ð±Ñ†Ð¾Ð² */
        }

        .table-css tr:nth-child(even) {
            background-color: #1976d2;
            /* Ñ„Ð¾Ð½ Ñ‡ÐµÑ‚Ð½Ñ‹Ñ… ÑÑ‚Ð¾Ð»Ð±Ñ†Ð¾Ð² */
        }

        .table-css tr:hover {
            background-color: #8dc6ff;
            /* Ð³Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ ÑÑ‚Ñ€Ð¾ÐºÐ¸ Ð¿Ñ€Ð¸ Ð½Ð°Ð²ÐµÐ´ÐµÐ½Ð¸Ð¸ */
        }
        .navigation__wrapper li:hover .medical{
            display: grid !important;

        }
        .medical {
            grid-template-columns: 1fr;
            grid-gap: 25px;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .medical li ul {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .medical .menu-item {
            align-items: flex-start;
            justify-content: center;
        }

        .medical li {
            width: auto;
        }

        .medical li ul li {
            border-right: none !important;
            border-bottom: none !important;
        }

        .medical li a {
            text-align: center;
            width: 100%;
            display: block;
            font-size: 20px;
            margin-bottom: 10px;
			padding:  12px 15px;
        }

        .medical li ul li a {
            text-align: left;
            font-size: 14px;
            margin-bottom: 0;
        }
        .medical .subnav-item{
            border-right: none;
            border-bottom: 2px solid #087ccf;
            padding-bottom: 10px;
        }
		
		.numbersQuiz .wpcf7-quiz-label{ display: none;}
        #wpcf7-f47-o2 .policyCheck p:first-child span{
            color: #fff !important;
        }
.carousel .material-icons {
    font-size: 80px !important;
}
		@media(max-width:768px){
			 .carousel .material-icons {
    font-size: 75px !important;
}
		}
    </style>

