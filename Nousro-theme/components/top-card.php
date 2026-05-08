<?php if(get_field('card-sostav')): ?>
<div class="row who-need" data-aos="fade-left"  data-aos-delay="150" data-aos-duration="1000">
    <div class="col s12 m12">
        <div class="card blue-grey darken-1">
        <div class="card-content">
            <h3 class="card-title">
                <?php
                    if(get_field('card-title'))
                    {
                        echo get_field('card-title');
                    }
                ?>
            </h3>
            <!--  -->
            <!--  -->
            <!--  -->
                <div>
                    <ul> 
                        <li>
                            <?php
                                if(get_field('card-desc'))
                                {
                                    echo get_field('card-desc');
                                }
                            ?>
                        </li>
                    </ul>
            
                    <ul class="collapsible expandable">
                        <li class="active">
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>В составе курса изучаются:</div>
                            <div class="collapsible-body">
                            <?php
                                if(get_field('card-sostav'))
                                {
                                    echo get_field('card-sostav');
                                }
                            ?>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">schedule</i>Формы обучения:</div>
                            <div class="collapsible-body">
                            <?php
                                if(get_field('card-form'))
                                {
                                    echo get_field('card-form');
                                }
                            ?>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">school</i>Результат обучения:</div>
                            <div class="collapsible-body">
                                <?php
                                    if(get_field('card-result'))
                                    {
                                        echo get_field('card-result');
                                    }
                                ?>    
                            </div>
                        </li>
                    </ul>
                </div>
            <!--  -->
            <!--  -->
            <!--  -->
        </div>
        <div class="card-action">
            <div class="course-duration">
                <p>Время обучения:&nbsp;</p>
                <p> 
                    <?php
                        if(get_field('time'))
                        {
                            echo get_field('time');
                        }
                    ?>
                </p>
            </div>
            <div class="stacked-buttons">
                <button class="btn red darken-2 waves-light modal-trigger" href="#modal1" id="mail-us">Подать заявку
                    <i class="material-icons right">send</i>
                </button>
                
            </div>
        </div>
        </div>
    </div>
</div>
<?php endif; ?>