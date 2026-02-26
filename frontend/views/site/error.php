<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="error-container">
    <div class="error-code"><?= Html::encode($exception->statusCode ?? 500) ?></div>
    <div class="error-title"><?= Html::encode($this->title) ?></div>
    <div class="error-message">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <a href="<?= Yii::$app->homeUrl ?>" class="btn-home">Вернуться на главную</a>
</div>
