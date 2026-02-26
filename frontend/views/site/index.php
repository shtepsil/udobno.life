<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>
<section class="intro">
    <div class="container">
        <div class="intro-inner">

            <div class="intro-info" data-aos="fade-down">
                <h1 class="intro-title">
                    Мойте и заправляйте <br>
                    свой автобиль в два клика
                </h1>

                <div class="intro-links">
                    <a class="intro-link" href="https://apps.apple.com/us/app/%D1%83%D0%B4%D0%BE%D0%B1%D0%BD%D0%BE/id1414309568?l=ru">
                        <?= Html::img('/images/index/appstore.png', ['alt' => '']) ?>
                    </a>
                    <a class="intro-link" href="https://play.google.com/store/apps/details?id=ru.swc.udobno">
                        <?= Html::img('/images/index/playmarket.png', ['alt' => '']) ?>
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

<section class="how">
    <div class="container">
        <div class="how-inner">

            <h2 class="how-title" data-aos="fade-right">
                Как это работает
            </h2>

            <ul class="how-list">
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">1</span>
                    <span class="how-item-text">
                                Зарегистрируйтесь в мобильном приложении "Udobno"
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">2</span>
                    <span class="how-item-text">
                                Приезжайте на ближайшую к вам мойку самообслуживания
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">3</span>
                    <span class="how-item-text">
                                Отсканируйте QR-код на терминале мойки или выберите номер поста вручную
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">4</span>
                    <span class="how-item-text">
                                Выберите удобный способ оплаты: банковскую корпоративную карту или Apple/Google Pay
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">5</span>
                    <span class="how-item-text">
                                Укажите сумму
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">6</span>
                    <span class="how-item-text">
                                После подтверждения оплаты денежные стредства появятся на терминале мойки
                            </span>
                </li>
                <li class="how-item" data-aos="fade-right">
                    <span class="how-item-num">7</span>
                    <span class="how-item-text">
                                Приступайте к мойке
                            </span>
                </li>
            </ul>

        </div><!-- ./how-inner -->
    </div><!-- ./container -->
</section><!-- ./how -->
