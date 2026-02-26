<?php

use yii\helpers\Html;

?>
<section class="intro">
    <div class="container">
        <div class="intro-inner">

            <div class="intro-info" data-aos="fade-down">
                <h1 class="intro-title">
                    Все преимущества приложения Удобно в вашем фирменном стиле
                </h1>

                <div class="intro-btns">
                    <a class="intro-btn white-label-btn" data-modal="form-modal" href="#">
                        Заказать разработку
                    </a>
                </div>
            </div><!-- ./intro-info -->

            <div class="intro-preview">
                <?= Html::img('/images/offer/tel.png', ['alt' => '', 'class' => 'intro-preview-img']) ?>
            </div><!-- ./intro-preview -->

        </div><!-- ./intro-inner -->
    </div><!-- ./container -->
    <?= Html::img('/images/index/intro-decoration.png', ['alt' => '', 'class' => 'intro-decoration']) ?>
</section><!-- ./intro -->

<section class="offer">
    <div class="container">
        <div class="offer-inner">

            <h2 class="offer-title" data-aos="fade-right">
                Предлагаем вам разработку реплики мобильного приложения “Удобно”
            </h2>

            <span class="offer-subtitle">
                        Что вы получаете
                    </span>

            <div class="offer-grid">
                <div class="offer-item">
                    <?= Html::img('/images/offer/1.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Точная копия приложения "Удобно"</span>
                        в стиле вашего брендбука - с возможностью добавления дополнительного или удаления ненужного функционала
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/2.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Короткие сроки разработки реплики <br></span>
                        Разработка занимает до 1 месяца, создание нового МП - от 8 месяцев
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/3.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Добавленное МП <br></span>
                        На протяжение 3 лет мы усовершенстововали и исправляли все возникающие баги и недочеты
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/4.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Низкая стоимость реплики <br></span>
                        Стоимость нового МП превышает стоимость реплики в 5 раз
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/5.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Бесплатные обновления <br></span>
                        Все измнения в МП Удобно по вашему соглашению реализуются в реплики
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/6.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        Интеграция в стороние мобильные сервисы АЗС ГПН, Яндекс и т.д.
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/7.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Консультирование и сопровождение</span>
                        на всем этапе размещения вашего МП в GooglePlay и Apple Store
                    </div>
                </div>

                <div class="offer-item">
                    <?= Html::img('/images/offer/8.svg', ['alt' => '', 'class' => 'offer-item-icon']) ?>
                    <div class="offer-item-text">
                        <span>Квалифицированный дизайнер,</span>
                        имеющий опыт в создание экранов для МП, поможет вам создать дизайн в стилистике вашего брендбука
                    </div>
                </div>
            </div><!-- ./offer-grid -->

        </div><!-- ./offer-inner -->
    </div><!-- ./container -->
</section><!-- ./offer -->
<section class="partner-operation" id="partner-operation">
    <div class="container">
        <div class="partner-operation-inner">

            <h2 class="partner-operation-title" data-aos="fade-right">
                Наши работы
            </h2>

            <?= Html::img('/images/offer/our-work-img.jpg', ['alt' => '', 'class' => 'partner-operation-img']) ?>

        </div><!-- ./partner-operation-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-operation -->
