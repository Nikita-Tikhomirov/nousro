<section class="sectionRequest">
    <div class="sectionRequestWrap content">
        <h3 class="sectionRequestTitle">Оставьте заявку – мы с вами свяжемся </h3>

        <div class="sectionRequestFormWrap">
            <?php echo do_shortcode('[contact-form-7 id="c16292c" title="requestForm"]');?>
        </div>

        <div href="" class="sectionRequestPolicy">
            Отправляя форму вы соглашаетесь с <a href="https://nousro.ru/konf.php">политикой обработки персональных данных</a>
        </div>

    </div>
</section>

<style>
    .sectionRequest{
        background: #087ccf;
        padding-top: 40px;
        padding-bottom: 40px;
        color: #fff;
    }
    .sectionRequestTitle{
        text-align: center;
        font-size: 24px;
        color: #fff;
    }
    .sectionRequestInputs{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
    }
    .sectionRequestInput{
        /* width: 45%; */

    }
    .sectionRequestInput p{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
    }
    .sectionRequestInput input{
        border: none !important;
        background: #fff !important;
        border-radius: 4px;
        color: #5F6368;
        padding-left: 20px !important;
        margin-bottom: 0 !important;
    }
    .sectionRequestInput input{

    }
    .sectionRequestInput input::placeholder{
        color: #5F6368;
    }
    .sectionRequestInput i{
        /* margin-right: 10px; */
    }
    .sectionRequest .red{
        height: 49px;
    }
    .sectionRequestPolicy{
        text-align: center;
        margin-top: 20px;
    }
    .sectionRequestPolicy a{
        color: #fff;
        text-decoration: underline;
    }
    @media screen and (max-width: 768px) {
       .sectionRequest .sectionRequestInputs .wpcf7-form-control{
        width: 85% !important;
       }
       .sectionRequest .sectionRequestInputs .wpcf7-form-control.btn{
        width: fit-content !important;
       } 
       .customIcon {
        width: 24px;
        text-align: center;
       }
    }
</style>