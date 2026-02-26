<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\components\Debugger as d;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\components\Menu;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<header class="header">
    <div class="container wide">
        <div class="header-inner">

            <a class="header-logo" href="/">
                <?= Html::img('/images/header/logo.svg', ['alt' => '']) ?>
            </a><!-- ./header-logo -->

            <?= Menu::widget([
                'items' => [
                    ['label' => 'Пользователям', 'url' => ['/site/index']],
                    ['label' => 'Партнерам', 'url' => ['/site/partner']],
                    ['label' => 'White label', 'url' => ['/site/white-label']],
                    ['label' => 'О компании', 'url' => ['/site/about']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                ]
            ]) ?>

            <div class="header-right">
                <a class="header-login" href="#" data-modal="login-modal">Войти</a>
            </div><!-- ./header-right -->

            <button class="burger" type="button" id="burger">
                <span>Открыть навигацию</span>
            </button>

            <div class="mobile-header" id="mobileHeader">
                <nav class="mobile-nav">
                    <ul class="mobile-nav-list">
                        <li class="mobile-nav-item special">
                            <a href="#" data-modal="login-modal">Войти</a>
                        </li>
                        <li class="mobile-nav-item">
                            <a href="<?= Url::to(['/']) ?>">Пользователям</a>
                        </li>
                        <li class="mobile-nav-item">
                            <a href="<?= Url::to(['site/partner']) ?>">Партнерам</a>
                        </li>
                        <li class="mobile-nav-item">
                            <a href="<?= Url::to(['site/white-label']) ?>">White label</a>
                        </li>
                        <li class="mobile-nav-item">
                            <a href="<?= Url::to(['site/about']) ?>">О компании</a>
                        </li>
                        <li class="mobile-nav-item">
                            <a href="<?= Url::to(['site/contact']) ?>">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- ./mobile-header -->
        </div><!-- ./header-inner -->
    </div><!-- ./container -->
</header><!-- ./header -->

<div class="page">
    <?= $content ?>
</div>

<footer class="footer">
    <div class="container wide">
        <div class="footer-inner">

            <div class="footer-top">
                <a class="footer-logo" href="#">
                    <?= Html::img('/images/footer/footer-logo.svg', ['alt' => '']) ?>
                </a>

                <nav class="footer-nav">
                    <ul class="footer-nav-list">
                        <li class="footer-nav-item">
                            <a class="footer-nav-link" href="<?= Url::to(['site/index']) ?>">Пользователям</a>
                        </li>
                        <li class="footer-nav-item">
                            <a class="footer-nav-link" href="<?= Url::to(['site/partner']) ?>">Партнерам</a>
                        </li>
                        <li class="footer-nav-item">
                            <a class="footer-nav-link" href="<?= Url::to(['site/white-label']) ?>">White Label</a>
                        </li>
                        <li class="footer-nav-item">
                            <a class="footer-nav-link" href="<?= Url::to(['site/about']) ?>">О компании</a>
                        </li>
                        <li class="footer-nav-item">
                            <a class="footer-nav-link" href="<?= Url::to(['site/contact']) ?>">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- ./footer-top -->

            <div class="footer-bottom">
                <a class="footer-terms" href="/doc/ПОЛЬЗОВАТЕЛЬСКОЕ-СОГЛАШЕНИЕ-Ньютек.docx">Пользовательское соглашение</a></br>
                <a class="footer-terms doc-link" href="/files/Polzovatelskoe_soglashenie_shablon_Moiki.pdf">Пользовательское соглашение для клиентов "Т-Банка"</a><br>
                <a class="footer-terms" href="/doc/ПОЛИТИКА-ОБРАБОТКИ-ПЕРСОНАЛЬНЫХ-ДАННЫХ-Ньютек.pdf">Политика обработки персональных данных</a>
            </div>


            <!--                <div class="footer-bottom">-->
            <!--                    <a class="footer-terms" href="https://udobno.life/assets/doc/ПОЛЬЗОВАТЕЛЬСКОЕ-СОГЛАШЕНИЕ-Ньютек.docx">Пользовательское соглашение</a> </br>-->
            <!--                    <a class="footer-terms" href="https://udobno.life/assets/doc/ПОЛИТИКА-ОБРАБОТКИ-ПЕРСОНАЛЬНЫХ-ДАННЫХ-Ньютек.pdf">Политика обработки персональных данных</a>-->
            <!--                </div>-->

        </div><!-- ./footer-inner -->
    </div><!-- ./container -->
</footer><!-- ./footer -->
<div class="modal" id="form-modal">
    <div class="modal-dialog">
        <div class="loader"></div>
        <div class="modal-path">
                <span class="modal-title">
                    Оставьте заявку и мы перезвоним вам в ближайшее время
                </span>
            <form class="modal-form" id="contact-form" action="<?= Url::to(['form/send']) ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="admin_email[]" value="boris.topkosov@gmail.com">
                <input type="hidden" name="form_subject" value="Тема письма">

                <input class="modal-input" type="text" name="name" placeholder="Имя" value="">
                <input class="modal-input phone-input" type="tel" name="tel" id="phone" placeholder="+7 (___) ___-__-__" value="">


                <button class="modal-btn" type="submit">Оставить заявку</button>
            </form>

            <?= d::res() ?>
            <div id="form-result"></div>

        </div>

        <a class="modal-close" href="#">
            <?= Html::img('/images/modal/close.svg', ['alt' => '']) ?>
        </a>
    </div><!-- ./modal-dialog -->
</div><!-- ./modal -->
<div class="modal" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-login">

            <a class="modal-login-btn" target="_blank" href="http://mobtech.fvds.ru/">Транзакции онлайн</a>
            <a class="modal-login-btn" target="_blank" href="http://iotmt78.ru/login">Акции, промокоды, бонусы</a>
            <a class="modal-login-btn" target="_blank" href="https://flexoil.ru:8443/login">Корпоратив</a>

        </div>

        <a class="modal-close" href="#">
            <?= Html::img('/images/modal/close.svg', ['alt' => '']) ?>
        </a>
    </div><!-- ./modal-dialog -->
</div><!-- ./modal -->    <div class="message">
        <span class="message-icon-btn">
                        <?= Html::img('/images/message-white.svg', ['alt' => '', 'class' => 'message-icon-img']) ?>
        </span>

    <div class="message-content">
            <span class="message-content-title">
                Свяжитесь с нами
            </span>

        <div class="message-content-group">
            <a class="message-content-link" href="#">
                <?= Html::img('/images/wsp.svg', ['alt' => '']) ?>
            </a>
            <a class="message-content-link" href="#">
                <?= Html::img('/images/email.svg', ['alt' => '']) ?>
            </a>
            <a class="message-content-link" href="#">
                <?= Html::img('/images/phone.svg', ['alt' => '']) ?>
            </a>
        </div>
    </div>
</div><!-- ./message -->
<?php
$urlUserAgreement = Url::to(['site/docx-test']);
$this->registerJs(<<<JS
$('#contact-form').on('submit', function(e) {
    e.preventDefault(); // отменяем стандартную отправку

    const body = $('body');
    const modal = $('#form-modal');
    const form = $(this)[0];

    // Сначала проверяем все поля input с классом .modal-input
    let hasEmpty = false;
    $(form).find('.modal-input').each(function() {
        if (!$(this).val().trim()) {
            const placeholder = $(this).attr('placeholder') || 'Поле';
            n.error(`Поле "\${placeholder}" не может быть пустым!`);
            hasEmpty = true;
            return false; // выход из each
        }
    });

    if (hasEmpty) return; // не отправляем форму

    // Собираем данные формы
    const formData = new FormData(form);

    // Добавляем CSRF автоматически
    formData.append(yii.getCsrfParam(), yii.getCsrfToken());

    res('result');

    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            loader.show();
        },
        success: function(response) {
            res(response);
            if (!response?.error && response.message) {
                n.success(response.message);
            } else {
                n.error(response.error || 'Произошла ошибка');
            }
            form.reset();
            closeModal('#form-modal');
        },
        error: function(xhr, status, error) {
            // cl(xhr);
            n.error('Что-то пошло не так!');
        },
        complete: function() {
            loader.hide();
            body.removeClass('no-scroll');
        }
    });
});

JS
);

$this->registerJs(<<<JS
let selector = document.querySelectorAll('input[type="tel"]');
let im = new Inputmask('+7 (999) 999-99-99');
im.mask(selector);

JS
);

?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
