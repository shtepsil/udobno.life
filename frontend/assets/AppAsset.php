<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome-4.7.0/css/font-awesome.min.css',
        'css/pretty-print-json.css',
        'css/sweetalert.css',
        'css/style.min.css',
        'css/custom.css',
    ];
    public $js = [
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'js/jquery.js',
//        'js/jquery.input-mask.js',
        'js/notify.js',
        'js/sweetalert.js',
        'js/pretty-print-json.min.js',
        'js/modal.js',
        'js/common.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
