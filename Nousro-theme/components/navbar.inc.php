<style>
    .logo__label span {
        display: block;
        white-space: nowrap;
    }
    .mobileNumber{ 
        display: none;
        align-items: center;
        justify-content: center;
        padding-top: 10px;
        padding-bottom: 10px;
        width: 100%;
    }
    @media(max-width:768px){
        .mobileNumber{
            display: flex;
        }
    }
</style>
<div class="header">
    <div class="header__wrapper">
        <div class="header__info fixed-info" data-aos="fade-down" data-aos-delay="300">
            <div class="fixed-info__wrapper">
                <div class="fixed-info__item mob-top">
                    Лицензия №: <a data-fslightbox="docs1"
                        href="https://nousro.ru/wp-content/themes/Nousro-theme/images/licenziya-na-obrazovatelnuyu-deyatelnost.webp">Л035-01298-77/00350389</a>
                    <span id="feather-menu" data-target="slide-out" class="sidenav-trigger hide-on-med-and-up"></span>
                </div>

                <div class="mobileNumber"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-phone-call">
                        <path
                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg><a href="tel:+7 (958) 709-05-27" style="color:black">+7 (958) 709-05-27</a></div>

                <div class="fixed-info__item hide-on-med-and-down" style="font-size: 28px; font-weight: 800;">Обучение
                    по всей
                    России</div>
                <div class="fixed-info__item fixed-info__buttons">
                    <div class="stacked-buttons">
                        <button class="btn red darken-2 waves-light modal-trigger" data-target="modal1"
                            id="mail-us">Отправить
                            заявку</button>

                        <a href="https://sdo.nousro.ru/" target="_blank"
                            class="btn red darken-2 waves-effect waves-light">Личный кабинет
                            <i class="material-icons right">account_circle</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__logo logo hide-on-med-and-down">
            <div class="logo__wrapper" data-aos="fade-right" data-aos-delay="300">
                <a href="/"><img src="https://nousro.ru/wp-content/uploads/2024/07/logo-nousro-1.png" alt="Логотип МУЦ"
                        class="logo__img"></a>
                <p class="logo__label">
                    <span>Негосударственное образовательное частное учреждение</span>
                    <span>дополнительного профессионального образования</span>
                    <span>«МЕЖРЕГИОНАЛЬНЫЙ УЧЕБНЫЙ ЦЕНТР»</span>
                </p>
            </div>
            <div style="font-size: 16px" class="logo__contacts contacts" data-aos="fade-left" data-aos-delay="300">
                <ul class="contacts__list">
                    <li> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-phone-call">
                            <path
                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg><a href="tel:+7 (958) 709-05-27" style="color:black">+7 (958) 709-05-27</a></li>
                    <li><!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-phone-call">
                            <path
                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg><a href="tel:+7 (495) 137-97-83" style="color:black">+7 (495) 137-97-83</a>--></li>

                </ul>
                <ul class="contacts__list">
                    <!-- <li style="padding-left:25px">

            <g>
              <path style="fill:#00AFF0;" d="M282.966,176.612c2.094-9.495,3.204-19.309,3.204-29.405c0-75.661-62.197-137.011-138.941-137.011
                                    c-8.093,0-16.032,0.692-23.752,2.003C111.061,4.479,96.367,0,80.618,0C36.101,0,0.032,35.577,0.032,79.475
                                    c0,14.657,4.051,28.385,11.07,40.193c-1.848,8.894-2.813,18.107-2.813,27.539c0,75.688,62.197,134.753,138.932,134.753
                                    c8.694,0,17.197-0.792,25.436-2.294c11.352,6.008,24.316,11.698,38.099,11.698c44.508,0,80.577-35.568,80.577-79.466
                                    C291.333,199.235,288.319,187.245,282.966,176.612z" />
              <path style="fill:#FFFFFF;"
                d="M210.6,203.131c-5.362,7.62-13.21,13.61-23.542,17.916c-10.333,4.342-22.568,6.491-36.724,6.491
                                    c-16.978,0-30.98-2.95-42.023-8.858c-7.811-4.242-14.174-9.923-19.072-17.006c-4.88-7.083-7.328-13.983-7.328-20.693
                                    c0-3.878,1.466-7.21,4.397-9.969c2.931-2.795,6.673-4.169,11.198-4.169c3.678,0,6.8,1.065,9.331,3.241
                                    c2.549,2.158,4.725,5.353,6.509,9.604c2.194,5.053,4.552,9.268,7.11,12.645c2.531,3.377,6.118,6.181,10.724,8.375
                                    c4.625,2.176,10.697,3.286,18.198,3.286c10.324,0,18.717-2.203,25.181-6.637c6.445-4.415,9.686-9.959,9.686-16.578
                                    c0-5.244-1.748-9.532-5.226-12.782c-3.487-3.277-7.984-5.781-13.501-7.501c-5.508-1.739-12.882-3.578-22.131-5.517
                                    c-12.354-2.649-22.705-5.781-31.025-9.331c-8.33-3.578-14.957-8.43-19.837-14.575c-4.898-6.172-7.338-13.819-7.338-22.95
                                    c0-8.721,2.576-16.45,7.747-23.214c5.162-6.773,12.618-11.971,22.413-15.613c9.777-3.641,21.285-5.453,34.494-5.453
                                    c10.56,0,19.7,1.211,27.411,3.605c7.711,2.422,14.093,5.626,19.172,9.623c5.089,3.997,8.812,8.184,11.152,12.581
                                    c2.349,4.37,3.523,8.685,3.523,12.836c0,3.814-1.457,7.274-4.388,10.324c-2.931,3.059-6.591,4.597-10.97,4.597
                                    c-3.997,0-7.028-0.929-9.104-2.758c-2.076-1.839-4.324-4.843-6.737-9.022c-3.141-5.972-6.882-10.633-11.27-13.974
                                    c-4.388-3.35-11.416-5.025-21.121-5.025c-8.985,0-16.25,1.803-21.767,5.453c-5.517,3.623-8.284,8.011-8.284,13.118
                                    c0,3.15,0.956,5.899,2.822,8.202c1.866,2.321,4.452,4.279,7.756,5.927c3.268,1.657,6.6,2.95,9.959,3.905
                                    c3.359,0.938,8.922,2.294,16.678,4.097c9.686,2.085,18.471,4.397,26.337,6.91c7.857,2.522,14.557,5.59,20.074,9.167
                                    c5.508,3.605,9.823,8.175,12.909,13.692c3.086,5.499,4.643,12.244,4.643,20.238C218.639,186.899,215.945,195.502,210.6,203.131z" />
            </g>


          </li> -->
                    <li>

                        <a class="socialIconCustom" href="https://max.ru/u/f9LHodD0cOLCD2G1rsDahYI6mBY8uMgAs1YmuMOvXefKPPq2xZCEr3oLgrg" target="_blank"
                            rel="noopener">
							<img src="https://nousro.ru/wp-content/uploads/2025/09/Max_logo.png" alt="Max_logo" width="18" height="18" /> &nbsp; 
                        </a>
                        <a class="socialIconCustom" href="https://wa.me/+79037992641 " target="_blank" rel="noopener">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path style="fill:#EDEDED;"
                                    d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
                            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z" />
                                <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
                            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
                            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z" />
                                <path style="fill:#FEFEFE;"
                                    d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
                            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
                            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
                            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
                            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
                            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945" />

                            </svg>
                        </a>
                        <a class="socialIconCustom" href="tg://resolve?domain=nousro">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 32 32"
                                fill="none">
                                <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)" />
                                <path
                                    d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#37BBFE" />
                                        <stop offset="1" stop-color="#007DBB" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a style="color:black" href="tel:+79037992641 ">8 (903) 799-26-41 </a>
                    </li>

                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg><a href="mailto:info@nousro.ru" style="color:black">info@nousro.ru</a></li>
                </ul>
            </div>
        </div>
        <div class="header__nav hide-on-med-and-down">
            <nav class="navigation nav-wrapper">
                <ul class="navigation__wrapper" id="nav-mobile">

                    <!-- Nav Item -->
                    <li data-aos="fade-down" data-aos-delay="400">
                        <a href="/povyshenie-kvalifikacii.php" class="href"><i class="material-icons" style="top: 5px; position: relative;
margin-right: 5px; display: inline;">call_made</i>Повышение квалификации</a>
                        <ul class="subnav">

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kursy-obucheniya-po-ohrane-truda.php">Охрана труда (программа А)</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kursy-obucheniya-po-ohrane-truda-b.php">Охрана труда (программа Б)</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kursy-obucheniya-po-ohrane-truda-v.php">Охрана труда (программа В)</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pervaya-pomoshch.php">Первая помощь пострадавшим</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ciz.php">Использование СИЗ</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/sosudy-pod-davleniem/">Эксплуатация сосудов под давлением</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ot-na-visote.php">Безопасные методы работ на высоте (1, 2, 3 гр)</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ohrana-truda-zemlyanie-raboty/">Безопасные методы и приемы выполнения земляных работ</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ohrana-truda-v-ognevie-raboty/">Безопасные методы и приемы выполнения огневых работ</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ohrana-truda-v-ruchnoy-instrument/">Безопасные методы и приемы работ с ручным инструментом</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ohrana-truda-v-tehnologicheskoe-oborudovanie/">Безопасные методы при монтаже, обслуживании и ремонте технологического оборудования</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ohrana-truda-ekspluataciya-podyomnika/">Безопасные методы при эксплуатации подъемника (вышки) для рабочих люльки</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/povyshenie-kvalifikacii-po-ohrane-truda.php">Охрана труда специалистов служб охраны труда, членов комиссий по проверке знаний</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-deyatelnost.php">Повышение квалификации по пожарной безопасности, для МЧС 178ч</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pb1-rukovoditel-otvetstvenniy-za-pojarnuyu-bezopasnost/">Пожарная безопасность для руководителей</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pb2-rukovoditel-ekspluatiryyuchih-organizaciy/">Пожарная безопасность для руководителей управляющих организаций</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pb3-otvetstvennoe-lico-pojarnaya-bezopasnost/">Пожарная безопасность для ответственных должностных лиц</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pb4-provedenie-instruktajey/">Пожарная безопасность для лиц проводящих пожарный инструктаж</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/go-i-chs-rukovoditeli.php">ГО и ЧС для руководителей</a>
                                </div>
                            </li>                           
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/povyshenie-kvalifikacii-go-i-chs.php">ГО и ЧС для ответственных</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/go-chs-komissiya/">ГО и ЧС уполномоченных по ЗНТЧС и членов комиссий</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnaya-bezopasnost-kontrol/">Радиационная безопасность и радиационный контроль</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnaya-bezopasnost-iii-gruppa-a/">Радиационная безопасность при работе с ИИИ (персонал группы А)</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnaya-bezopasnost-dosmotrovie-ustanovki/">Радиационная безопасность при эксплуатации досмотовых установок</a>
                                </div>
                            </li>
                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnaya-bezopasnost-tehobslujivanie-uskoritelya/">Техническое обслуживание ускорителя заряженных частицк</a>
                                </div>
                            </li>
                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnaya-bezopasnost-dosmotrovie-sistemy/">Эксплуатация досмотровых систем и установок</a>
                                </div>
                            </li>
                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/eko_bezopasnost.php">Экологическая безопасность для руководителей</a>
                                </div>
                            </li>                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ecobezopasnost-rucovoditelyami-eco-slujb-sistem-ecocontrolya/">Экологическая безопасность для руководителей экологических служб</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/eko_othody.php">Экологическая безопасность области обращения с опасными отходами, 112ч</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ecobezopasnost-sbor-transportirivanie-obrabotka-utilizaciya-obezvrejivanie-razmechenie-othodov/">Экологическая безопасность области обращения с отходами 1-4 кл опасности, 72ч</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/sbor-transportirivanie-obrabotka-utilizaciya-obezvrejivanie-razmechenie-othodov/">Сбор, транспортирование, обработка, утилизация, обезвреживание, размещение отходов</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/to-medtehniki.php">Обслуживание медицинских изделий</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/antiterror.php">Антитеррористическая защищенность объектов</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/antikorrupciya.php">Противодействие коррупции</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/stroitelstvo-zdanij-i-sooruzhenij.php">Строительство зданий и
                                        сооружений</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/stroitelnyj-kontrol.php">Строительный контроль</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/proektirovanie-zdanij-i-sooruzhenij.php">Проектирование зданий и сооружений</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pk-informatsionnaya-bezopasnost.php">Информационная безопасность, 72ч</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-kontrol-loma.php">Контроль лома и отходов металла</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kontrol-loma-vzrivoopasnost/">Контроль лома и отходов металла на взрывоопасность</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ispitanie-izmereniya-v-electroustanovkah/">Качество проведения испытаний и измерений в электроустановках</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ispolzovanie-eo-dot/">Использование электронного обучения и ДОТ</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pk-ekspluataciya-sistem-ventilyacii-kondicionirovaniya-vozduha/">Эксплуатация систем вентиляции и кондиционирования воздуха</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pozharnye-lestnitsy.php">Испытания пожарных лестниц и ограждений
                                        кровли</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-pozhar.php">Монтаж систем пожаротушения</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-ops.php">Монтаж охранно-пожарной сигнализации</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-vod.php">Монтаж противопожарного водоснабжения</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-dym.php">Монтаж противодымной вентиляции</a>
                                </div>
                            </li>


                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-jeva.php">Монтаж оповещения и эвакуации</a>
                                </div>
                            </li>
                        <!--    СТРОКА -->

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-fjes.php">Монтаж передачи извещений о пожаре</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-zanaves.php">Монтаж систем занавесов и завес</a>
                                </div>
                            </li>
                        <!--    СТРОКА -->

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-preg.php">Монтаж систем заполнения проемов</a>
                                </div>
                            </li>
                        <!--    СТРОКА -->


                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-ognez.php">Огнезащита материалов</a>
                                </div>
                            </li>
                        <!--    СТРОКА -->
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/program-perv.php">Монтаж первичных средств пожаротушения</a>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- ./Nav Item  -->

                    <!-- Nav Item -->
                    <li data-aos="fade-down" data-aos-delay="500">
                        <a href="/professionalnaya-perepodgotovka.php" class="href"><i class="material-icons" style="top: 5px; position: relative;
margin-right: 5px; 
display: inline;">school</i>Профпереподготовка</a>
                        <ul class="subnav">
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/perepodgotovka-po-ohrane-truda.php">Специалист по охране труда</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/spetsialist-po-protivopozharnoj-profilaktike.php">Специалист по
                                        пожарной профилактике</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pp-smetnoe-delo/">Сметное дело в строительстве</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/metrolog/">Специалист по метрологии</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/spetsialist-po-zakupkam.php">Специалист в сфере закупок</a>
                                </div>
                            </li>
                             <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/perepodgotovka-informatsionnaya-bezopasnost.php">Информационная
                                        безопасность</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/go-chs-perepodgotovka/">Специалист по ГО и ЧС</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pozharnaja-bezopasnost.php">Переподготовка для лицензии МЧС</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pp-kadastrovyi-inzhener.php">Геодезия и кадастровая деятельность</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/profstandart-ekskursovod.php">Экскурсовод (гид)</a>
                                </div>
                            </li>
                             <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/dogovornaia-rabota.php">Договорная работа</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/tehnosfernaya-bezopasnost/">Техносферная безопасность. Пожарная безопасность</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/zakupki-i-dogovornaya-rabota/">Специалист в сфере закупок и договорной работы</a>
                                </div>
                            </li>

                            <!--  <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/upravlenie-personalom.php">Управление персоналом</a>
                                </div>
                            </li> -->

                            <!-- <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pp-geodezist.php">Специалист в области инженерно-геодезических
                                        изысканий</a>
                                </div>
                            </li> 
							
							<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kursy-kadrovikov.php">Кадровик</a>
                                </div>
                            </li>
							
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/radiacionnyi-kontrol.php">Радиационный контроль</a>
                                </div>
                            </li> -->

                        <!--      <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a
                                        href="/mediko-psihologo-socialno-pedagogicheskoe-soprovozhdenie-detey-invalidov-i-ih-semey.php">Сопровождение
                                        детей инвалидов</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a
                                        href="/socialnyy-pedagog-vospitanie-i-socializaciya-lichnosti-v-sisteme-obrazovaniya.php">Социальный
                                        педагог</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pedagog-psiholog-v-sisteme-obrazovaniya.php">Педагог психолог</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pedagog-vysshego-obrazovaniya.php">Педагог высшего образования</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/profilaktika-i-korrekciya-diviantnogo-povedeniya.php">Девиантное
                                        поведение</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/semeynaya-psihologiya.php">Семейная психология</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/sportivnaya-psihologiya.php">Спортивная психология</a>
                                </div>
                            </li> -->
                        </ul>
                    </li>
                    <!-- ./Nav Item -->
                    <!-- Nav Item -->
                    <li data-aos="fade-down" data-aos-delay="500">
                        <a href="/rabochie-specialnosti.php" class="href"><i class="material-icons" style="top: 5px; position: relative;
margin-right: 5px; display: inline;">account_circle</i>Рабочие профессии</a>
                        <ul class="subnav">
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/administrator-gostinicy.php">Администратор гостиницы</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kamenschik-obuchenie.php">Каменщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/laborant-spectralnogo-analiza/">Лаборант спектрального анализа</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/machinist-holodilnih-ustanovok.php">Машинист холодильных установок</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pomoshnik-vospitatelya-kursy.php">Помощник воспитателя</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/chistilschik-dymohodov.php">Чистильщик дымоходов, боровов и топок</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/defektoskopist-uzk-obuchenie.php">Дефектоскопист по магнитному и ультразвуковому контролю</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/operator-kotelnoy-obuchenie.php">Оператор котельной</a>
                                </div>
                            </li>
                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/laborant-himanaliza.php">Лаборант химического анализа</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/naladchik-avtomatiki.php">Наладчик контрольно-измерительных приборов и автоматики</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kontroler-loma.php">Контролер лома и отходов металла</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/elektromonter-ops-obuchenie.php">Электромонтер охранно-пожарной сигнализации</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/zaryadchik-ognetushiteley.php">Зарядчик огнетушителей</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/malyar.php">Маляр</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/laborant-fizmex.php">Лаборант по физико-механических испытаний</a>
                                </div>
                            </li>
                            
                             <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pressovschik-loma.php">Прессовщик лома и отходов металла</a>
                                </div>
                            </li>

                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/elektromonter-elektrooborudovaniya.php">Электромонтер по ремонту и обслуживанию электрооборудования</a>
                                </div>
                            </li>

                            <!--
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/mladshiy-vospitatel-kursy.php">Младший воспитатель</a>
                                </div>
                            </li>

							<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/montazhnik-sistem-ventilyacii-obuchenie.php">Монтажник систем
                                        вентиляции</a>
                                </div>
                            </li>
							<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-betonshik.php">Бетонщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/montazhnik-sanitarno-tehnicheskih-sistem-obuchenie.php">Монтажник
                                        санитарно-техн систем</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/electrogazosvarchik-obuchenie.php">Электрогазосварщик</a>
                                </div>
                            </li>  -->
                            
                          <!--   <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/pechnik-obuchenie.php">Печник</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ogneuporshik-obuchenie.php">Огнеупорщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/propitschik.php">Пропитчик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/izolirovschik-plenochnik.php">Изолировщик-пленочник</a>
                                </div>
                            </li>-->
                            
                           <!-- 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/lifter.php">Лифтер</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/montazhnik-truboprovodov-obuchenie.php">Монтажник технологических
                                        трубопроводов</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/montajnik-narujnih-truboprovodov.php">Монтажник наружных трубопроводов</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/operator-azs.php">Оператор АЗС</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/slesar-santehnik-obuchenie.php">Слесарь сантехник</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/slesar-ventilyacionschik-obuchenie.php">Слесарь вентиляции</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-slesar-elektromontazhnik.php">Слесарь электромонтажник</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/truboukladchik-promyshlennyh-trub-obuchenie.php">Трубоклад</a>
                                </div>
                            </li> -->
                           
                           <!-- <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-sout.php">Обучение СОУТ</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-jestyanshik.php">Жестянщик</a>
                                </div>
                            </li> -->
                           
                           <!-- <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-stolyar-stroitelniy.php">Столяр строительный</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-krovelshik.php">Кровельщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/akkumulyatorshik-obuchenie.php">Аккумуляторщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/apparatchik-stochnih-vod.php">Аппаратчик сточных вод</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/apparatchik-himvodoochistki.php">Аппаратчик химводоочистки</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-armaturshik.php">Обучение арматурщика</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-oblisovshik-plitochnik.php">Облицовщик-плиточник</a>
                                </div>
                            </li>
                             <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-peskostruyshik.php">Пескоструйщик-Абразивоструйщик</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-napolnitel-ballonov.php">Наполнитель баллонов</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-slesar-instrumentalshik.php">Слесарь инструментальщик</a>
                                </div>
                            </li> -->
                            
                             <!-- <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/mashinist-ventustanovok-obuchenie.php">Вентиляционная и аспирационная
                                        установки</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/mashinist-nasosnih-ustanovok.php">Машинист насосных установок</a>
                                </div>
                            </li>
                            
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/rabochiy-po-remontu-zdaniy.php">Рабочий по комплексному обслуживанию и
                                        ремонту зданий</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/obuchenie-slesar-remontnik.php">Слесарь ремонтник</a>
                                </div>
                            </li>-->
                             <!--<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/parketchik-obuchenie.php">Паркетчик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/slesar-po-sborke-metallokonstrukciy-obuchenie.php">Слесарь по сборке
                                        металлоконструкций</a>
                                </div>
                            </li> 
							<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/kontroler-otk/">Контролер ОТК (порошковая металлургия)</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a
                                        href="/vozhatyy-sovremennaya-metodologiya-vospitaniya-i-socializacii.php">Вожатый</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/stanochnik-shirokogo-profilya-obuchenie.php">Станочник</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/electromehanik-konveerov-obuchenie.php">Электромеханик эскалаторов и
                                        пассажирских
                                        конвейеров</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/promalp-obuchenie.php">Промышленный альпинизм</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/electromontajnik-po-vtorichnim-cepyam-obuchenie.php">Электромонтажник по
                                        вторичным цепям</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/termist-obuchenie.php">Термист</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/avtomoischik-obuchenie.php">Автомойщик</a>
                                </div>
                            </li> 
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/stropalshik-obuchenie.php">Стропальщик</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/ozelenitel-obuchenie.php">Озеленитель</a>
                                </div>
                            </li>
                           <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/volochilschik-obuchenie.php">Волочильщик</a>
                                </div>
                            </li> 


                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/gazospasatel-obuchenie.php">Газоспасатели</a>
                                </div>
                            </li>-->
                        </ul>
                    </li>
                    <!-- ./Nav Item -->
                    <!-- Nav Item -->
                  <!--   МЕДИЦИНА ЗАКОМЕНТИЛ 5 строк
                    <li data-aos="fade-down" data-aos-delay="700">
                        <a href="https://nousro.ru/obuchenie-medicinskih-rabotnikov/" class="href">
                            <i class="material-icons"
                                style="top: 5px; position: relative; margin-right: 5px;display: inline;">local_hospital</i>Медицина
                        </a>
                      -->
                        <!-- <ul class="subnav">
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/vrachi-pk/">Повышение квалификации для врачей</a>
                                </div>
                                <ul class="subnav-item__deeperLinks">
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/starshaya-medsestra/">Старшая медицинская сестра</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/akusherstvo-ginekologiya/">Акушерство и гинекология</a>
                                    </li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/dermatolog/">Дерматовенерология</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/terapevt/">Терапия</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/urologiya/">Урология</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/vrachi-pk/endokrinologiya/">Эндокринология</a></li>
                                </ul>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/sredniy-medpersonal-pk/">Повышение квалификации для среднего медицинского
                                        персонала</a>
                                </div>
                                <ul class="subnav-item__deeperLinks">
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/sestrinskoe-delo/">Сестринское дело</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/operacionnoe-delo/">Операционное дело</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/sestrinskoe-delo-pediatriya/">Сестринское дело
                                            в педиатрии</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/anesteziologiya-reanimatologiya/">Анестезиология
                                            и реаниматология</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/funcsionalnaya-diagnostika/">Функциональная
                                            диагностика</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/organizaciya-sestrinskogo-dela/">Организация
                                            сестринского дела</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/feldsher/">Фельдшер</a></li>
                                    <li><i class="material-icons">chevron_right</i><a
                                            href="/sredniy-medpersonal-pk/akusherskoe-delo/">Акушерское дело</a></li>
                                </ul>
                            </li>
                        </ul> -->
                        <?php
                        if (has_nav_menu('medical-menu')) {
                            wp_nav_menu(array(
                                'theme_location' => 'medical-menu',
                                'menu_class' => 'subnav medical',
                                'container' => false,
                            ));
                        } else {
                            // echo '<p>Меню еще не создано. Добавьте элементы в разделе "Меню" админ-панели.</p>';
                        }
                        ?>
                    </li>
                    <!-- ./Nav Item -->

                    <!-- Nav Item -->
                    
          <!--<li data-aos="fade-down" data-aos-delay="600">
            <a href="/obuchenie-mchs.php" class="href"><i class="material-icons" style="top: 5px; position: relative;
margin-right: 5px; 
display: inline;">work</i>Лицензии</a>
            <ul class="subnav">
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/obuchenie-mchs.php">Для лицензии МЧС</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-pozhar.php">Монтаж систем пожаротушения</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/obuchenie-ops.php">Монтаж охранно-пожарной сигнализации</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-vod.php">Монтаж противопожарного водоснабжения</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-dym.php">Монтаж противодымной вентиляции</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-jeva.php">Монтаж оповещения и эвакуации</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-fjes.php">Монтаж фотолюминисцентных эвакуационных систем</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-zanaves.php">Монтаж систем занавесов и завес</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-preg.php">Монтаж систем заполнения проемов</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-ognez.php">Монтаж по огнезащите материалов</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/program-perv.php">Монтаж первичных средств пожаротушения</a>
                </div>
              </li>
             <!-- <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/licenziya-to-medtehniki-obuchenie.php">Для лицензии на медтехнику</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/licenziya-na-othody-obuchenie.php">Для лицензии на отходы</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/licenziya-fstek-obuchenie.php">Для лицензии ФСТЭК</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/gkh.php">Для лицензии ЖКХ</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/licenziya-na-lom-obuchenie.php">Для лицензии на металлолом</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/licenziya-na-restavraciu-obuchenie.php">Для лицензии на реставрацию</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/stroitelnoe-sro.php">Для СРО строителей</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/sro-proektirovshikov.php">Для СРО проектирования</a>
                </div>
              </li>
              <li class="subnav-item">
                <div class="subnav-item__link">
                  <i class="material-icons">chevron_right</i>
                  <a href="/sro-izyskaniya-obuchenie.php">Для СРО изысканий</a>
                </div>
              </li>
            </ul>
          </li> -->

                    <!-- ./Nav Item -->
                    <!-- Nav Item -->
                    <!-- ./Nav Item -->
                    
                    <li data-aos="fade-down" data-aos-delay="700">
                        <a href="/about/" class="href"><i class="material-icons" style="top: 5px; position: relative; margin-right: 5px; display: inline;">account_balance</i>О нас</a>
                        <ul class="subnav">
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/clients/">Наши клиенты</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/clients/otzyvy.php">Отзывы наших клиентов</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/doc/">Документы НОЧУ ДПО МУЦ</a>
                                </div>
                            </li>
							<li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/blog/">Блог</a>
                                </div>
                            </li>
                            <li class="subnav-item">
                                <div class="subnav-item__link">
                                    <i class="material-icons">chevron_right</i>
                                    <a href="/photogalery.php">Фото галерея</a>
                                </div>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="navigation__item" data-aos="fade-down" data-aos-delay="700">

                        <a href="/price.php"><i class="material-icons" style="top: 5px; position: relative; margin-right: 5px; display: inline;">currency_ruble</i>Прайс</a>
                    </li>
                    <!-- ./Nav Item -->
                    <li class="navigation__item" data-aos="fade-down" data-aos-delay="800">

                        <a href="/contacts/">Контакты</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>