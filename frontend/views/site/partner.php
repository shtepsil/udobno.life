<?php

use yii\helpers\Html;

?>
<section class="partner-top">
    <div class="container">
        <div class="partner-top-inner">

            <div class="partner-top-info" data-aos="fade-down">
                <ul class="partner-top-nav">
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-benefits">Преимущества</a>
                    </li>
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-part">Наши партнеры</a>
                    </li>
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-how">Как это работает?</a>
                    </li>
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-bonus">Бонусная система</a>
                    </li>
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-operation">Статистика</a>
                    </li>
                    <li class="partner-top-nav-item">
                        <a class="partner-top-nav-item-link" href="#partner-buh">Для бухгалтерии</a>
                    </li>
                </ul>

                <h1 class="partner-top-title">
                    Мы предлагаем каждому партнеру индивидуальный подход, круглосуточную поддержку водителей, систему бонусов и привилегий. Но главное - постоянный поток клиентов.
                </h1>

                <a class="partner-top-btn" data-modal="form-modal" href="#">СТАТЬ ПАРТНЕРОМ</a>
            </div><!-- ./partner-top-info -->

            <div class="partner-top-preview">
                <?= Html::img('/images/partner/partner-top-img.png', ['alt' => '', 'class' => 'partner-top-preview-img']) ?>
            </div><!-- ./partner-top-preview -->

        </div><!-- ./partner-top-inner -->
    </div><!-- ./container -->

    <?= Html::img('/images/index/intro-decoration.png', ['alt' => '', 'class' => 'intro-decoration']) ?>
</section><!-- ./partner-top -->

<section class="partner-benefits" id="partner-benefits">
    <div class="container">
        <div class="partner-benefits-inner">

            <h2 class="partner-benefits-title" data-aos="fade-right">
                Преимущества для моек и АЗС
            </h2>

            <div class="partner-benefits-grid">
                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/1.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Привлечение новых клиентов</span>
                        <ul class="partner-benefits-item-list">
                            <li>
                                Корпоративные клиенты топливных компаний
                            </li>
                            <li>
                                Клиенты классических моек
                            </li>
                            <li>
                                Клиенты со смежных секторов рынка (например ,сети АЗС)
                            </li>
                        </ul>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/2.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Подключение к мойкам сервиса ЯндексGo </span>
                        <p class="partner-benefits-item-p">
                            Водитель такси может оплатить мойку  со своего корпоративного счета  из таксометра
                        </p>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/3.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Возможность продаж услуг моек МСО корпоративному сектору</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/4.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Подключение Системы Быстрых Платежей</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/5.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Отображение всех операций в режиме онлайн в личном кабинете 24 часа в сутки</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/6.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Анализ и отчет за любой период по разным мойкам в Excel</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/7.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Push-уведомления клиента о рекламных акциях</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/8.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Бонусная система скидок в виде кешбэка</span>
                    </div>
                </div><!-- ./partner-benefits-item -->

                <div class="partner-benefits-item">
                    <?= Html::img('/images/partner/benefits/9.svg', ['alt' => '', 'class' => 'partner-benefits-item-icon']) ?>
                    <div class="partner-benefits-item-text">
                        <span class="partner-benefits-item-title">Промокоды на мойку Совместные акции с торговыми сетями</span>
                    </div>
                </div><!-- ./partner-benefits-item -->
            </div><!-- ./partner-benefits-grid -->

        </div><!-- ./partner-benefits-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-benefits -->

<section class="partners-part" id="partner-part">
    <div class="container">
        <div class="partners-part-inner">

            <h2 class="partners-part-title" data-aos="fade-right">
                Партнеры
            </h2>

            <div class="partners-part-grid">
                <div class="partners-part-item">
                    <?= Html::img('/images/partner/part/1.png', ['alt' => '', 'class' => 'partners-part-item-img']) ?>
                    <span class="partners-part-item-text">
                                Мобильный сервис по оплате услуг моек самообслуживания интегрирован в приложение "Газпромнефть"
                            </span>
                </div>

                <div class="partners-part-item">
                    <?= Html::img('/images/partner/part/2.png', ['alt' => '', 'class' => 'partners-part-item-img']) ?>
                    <span class="partners-part-item-text">
                                Раздел "Мойка самоблуживания" интегрирован в приложение Яндекс "Танкер"
                            </span>
                </div>

                <!--<div class="partners-part-item">
                    <img class="partners-part-item-img" src="assets/images/partner/part/3.png" alt="">
                    <span class="partners-part-item-text">
                        В ходе привлечения партнеров в мобильные сервисы (Яндекс, АЗС «Газпромнефть», Топливная Компания «ПТК»), компанией было установлена потребность партнеров в собственном мобильном приложении и продвижении своего бренда
                    </span>
                </div>-->

                <div class="partners-part-item">
                    <?= Html::img('/images/partner/part/4.png', ['alt' => '', 'class' => 'partners-part-item-img']) ?>
                    <span class="partners-part-item-text">
                                Мы сотрудничаем с командами Яндекс.Навигатора и Яндекс.Заправки
                            </span>
                </div>
            </div>

        </div><!-- ./partners-part-inner -->
    </div><!-- ./container -->
</section><!-- ./partners-part -->

<section class="partner-how" id="partner-how">
    <div class="container">
        <div class="partner-how-inner">

            <h2 class="partner-how-title" data-aos="fade-right">
                Как это работает
            </h2>

            <div class="partner-how-wrapper">
                <div class="partner-how-center">
                    <?= Html::img('/images/partner/center-img.png', ['alt' => '', 'class' => 'partner-how-center-img']) ?>
                    <span class="partner-how-center-text">
                                СЕРВЕР «UDOBNO»
                            </span>

                    <?= Html::img('/images/partner/arrows-1.svg', ['alt' => '', 'class' => 'partner-how-center-arrow _1']) ?>
                    <?= Html::img('/images/partner/arrows-1.svg', ['alt' => '', 'class' => 'partner-how-center-arrow _2']) ?>
                    <?= Html::img('/images/partner/arrows-2.svg', ['alt' => '', 'class' => 'partner-how-center-arrow _3']) ?>
                    <?= Html::img('/images/partner/arrows-3.svg', ['alt' => '', 'class' => 'partner-how-center-arrow _4']) ?>

                    <?= Html::img('/images/partner/arrow-4.png', ['alt' => '', 'class' => 'partner-how-center-arrow _5']) ?>
                    <?= Html::img('/images/partner/arrow-4.png', ['alt' => '', 'class' => 'partner-how-center-arrow _6']) ?>
                </div>

                <div class="partner-how-item _1">
                    Клиент отправляет заказ через приложение Udobno
                </div>
                <div class="partner-how-item _2">
                    Сервер делает запрос в банк клиента. При достаточном балансе,æ сумма списывается с карты
                </div>
                <div class="partner-how-item _3">
                    Запрошенная сумма отправляется натерминал мойки
                </div>
                <div class="partner-how-item _4">
                    Сервер направляет информацию о платеже  оператору фискальных данных (ОФД)
                </div>
                <div class="partner-how-item _5">
                    После окончании мойки клиент получает фискальный чек на e-mail и квитанцию в историю покупок в приложении
                </div>
            </div>

        </div><!-- ./partner-how-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-how -->

<section class="partner-bonus" id="partner-bonus">
    <div class="container">
        <div class="partner-bonus-inner">

            <h2 class="partner-bonus-title" data-aos="fade-right">
                Бонусная система скидок в виде кешбэка
            </h2>

            <div class="partner-bonus-wrapper">
                <div class="partner-bonus-info">
                    <h3 class="partner-bonus-info-title">
                        УПРАВЛЯЮЩИЙ МОЙКИ МСО В ЛИЧНОМ КАБИНЕТЕ:
                    </h3>

                    <ul class="partner-bonus-info-list">
                        <li class="partner-bonus-info-li">
                            Устанавливает размер кешбэка
                        </li>
                        <li class="partner-bonus-info-li">
                            Выбирает адрес мойки, на которой Планирует ввести акцию
                        </li>
                        <li class="partner-bonus-info-li">
                            Вводит период проведения  дисконтной программы
                        </li>
                        <li class="partner-bonus-info-li">
                            Формирует push-уведомления о происходящей акции
                        </li>
                    </ul>

                    <div class="partner-bonus-info-card">
                        <?= Html::img('/images/partner/partner-bonus-card-img.svg', ['alt' => '', 'class' => 'partner-bonus-info-card-img']) ?>
                        <span class="partner-bonus-info-card-text">
                                    Пользователь приложения «Udobno» может потратить накопленные бонусные баллы только  на той мойке, где ему был начислен кешбэк
                                </span>
                    </div>
                </div><!-- ./partner-bonus-info -->

                <div class="partner-bonus-preview">
                    <?= Html::img('/images/partner/partner-bonus-img.png', ['alt' => '', 'class' => 'partner-bonus-preview-img']) ?>
                </div><!-- ./partner-bonus-preview -->
            </div><!-- ./partner-bonus-wrapper -->

        </div><!-- ./partner-bonus-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-bonus -->

<section class="partner-operation" id="partner-operation">
    <div class="container">
        <div class="partner-operation-inner">

            <h2 class="partner-operation-title" data-aos="fade-right">
                Отображение всех операций в режиме онлайн
            </h2>

            <?= Html::img('/images/partner/partner-operation-img.jpg', ['alt' => '', 'class' => 'partner-operation-img']) ?>

        </div><!-- ./partner-operation-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-operation -->

<section class="partner-buh" id="partner-buh">
    <div class="container">
        <div class="partner-buh-inner">

            <h2 class="partner-buh-title" data-aos="fade-right">
                Все необходимое для бухгалтерии
            </h2>

            <div class="partner-buh-wrapper">
                <div class="partner-buh-info">
                    <div class="partner-buh-item">
                        <?= Html::img('/images/partner/buh/1.svg', ['alt' => '', 'class' => 'partner-buh-item-img']) ?>
                        <span class="partner-buh-item-text">
                                    Своевременное предоставление первичных документов (акты выполненных работ, акты сверок)
                                </span>
                    </div>
                    <div class="partner-buh-item">
                        <?= Html::img('/images/partner/buh/2.svg', ['alt' => '', 'class' => 'partner-buh-item-img']) ?>
                        <span class="partner-buh-item-text">
                                    Подтверждение каждой транзакции за отчетный период
                                </span>
                    </div>
                    <div class="partner-buh-item">
                        <?= Html::img('/images/partner/buh/3.svg', ['alt' => '', 'class' => 'partner-buh-item-img']) ?>
                        <span class="partner-buh-item-text">
                                    Электронный документооборот с возможностью подписания первичных бухгалтерских документов
                                </span>
                    </div>
                </div><!-- ./partner-buh-info -->

                <div class="partner-buh-preview">
                    <?= Html::img('/images/partner/buh/partner-buh-img.png', ['alt' => '', 'class' => 'partner-buh-preview-img']) ?>
                </div><!-- ./partner-buh-preview -->
            </div><!-- ./partner-buh-wrapper -->

        </div><!-- ./partner-buh-inner -->
    </div><!-- ./container -->
</section><!-- ./partner-buh -->
