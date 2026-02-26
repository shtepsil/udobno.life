<?php

namespace frontend\controllers;

use backend\models\Debug;
use common\components\Debugger as d;
use Yii;
use yii\web\Controller;

class MainController extends Controller
{

    public function init()
    {
        parent::init();
        Yii::$app->debug_detect->run(Debug::createInit());
    }

}//
