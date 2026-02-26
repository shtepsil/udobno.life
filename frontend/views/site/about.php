<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>
<section class="intro">
    <div class="container">
        <div class="intro-inner">

            <div class="intro-info mw700" data-aos="fade-down">
                <h1 class="intro-title mb30">
                    Компания активно использует и продвигает технологии дистанционного управления оборудованием
                </h1>

                <h2 class="intro-subtitle">
                    Мы предлагаем 2 варианта сотрудничества
                </h2>

                <div class="intro-btns">
                    <a class="intro-btn" data-modal="form-modal" href="#">
                        Стать партнером
                    </a>

                    <a class="intro-btn" data-modal="form-modal" href="#">
                        Разработка реплики
                    </a>
                </div>
            </div><!-- ./intro-info -->

            <div class="intro-preview">
                <?= Html::img('/images/index/intro-tel.png', ['alt' => '', 'class' => 'intro-preview-img']) ?>
            </div><!-- ./intro-preview -->

        </div><!-- ./intro-inner -->
    </div><!-- ./container -->
    <?= Html::img('/images/index/intro-decoration.png', ['alt' => '', 'class' => 'intro-decoration']) ?>
</section><!-- ./intro -->

<section class="about">
    <div class="container">
        <div class="about-inner">

            <h2 class="about-title" data-aos="fade-right">
                О компании
            </h2>

            <p class="about-maintext">
                ООО «Ньютек» осуществляет свою деятельность на рынке предоставления услуг Интернета вещей для автомобилистов
            </p>

            <p class="about-aftertext">
                Разработано собственное мобильное приложение «Удобно», в котором реализованы 2 направления на рынке услуг для автомобилистов направления мобильная заправка на АЗС и оплата услуг моек со смартфона
            </p>

            <div class="about-partners">
                <div class="about-partners-icons">
                    <?= Html::img('/images/about/partner-1.svg', ['alt' => '', 'class' => 'about-partners-icon']) ?>
                    <?= Html::img('/images/about/partner-2.svg', ['alt' => '', 'class' => 'about-partners-icon']) ?>
                    <?= Html::img('/images/about/partner-3.svg', ['alt' => '', 'class' => 'about-partners-icon']) ?>
                </div>
                <span class="about-partners-text">
                            В ходе привлечения партнеров в мобильные сервисы (Яндекс, АЗС «Газпромнефть», Топливная Компания «ПТК»), компанией было установлена потребность партнеров в собственном мобильном приложении и продвижении своего бренда
                        </span>
            </div>

            <div class="about-mso">
                <div class="about-mso-icons">
                    <?= Html::img('/images/about/mso-1.svg', ['alt' => '', 'class' => 'about-mso-icon']) ?>
                    <?= Html::img('/images/about/mso-2.svg', ['alt' => '', 'class' => 'about-mso-icon']) ?>
                </div>
                <span class="about-mso-text">
                            Реализованы сервисы для автомобилистов по заправке нефтепродуктами и оказанию услуг моек самообслуживания МСО
                        </span>
            </div>

        </div><!-- ./about-inner -->
    </div><!-- ./container -->
</section><!-- ./about -->

