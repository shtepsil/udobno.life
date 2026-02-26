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



    public function actionDispatchAction($action)
    {
        // Конвертируем URL в CamelCase для Yii экшена
        // Пример: delete_udobno -> DeleteUdobno
        //         delete-moy-sam -> DeleteMoySam
        $methodName = 'action' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $action)));

        if (method_exists($this, $methodName)) {
            return $this->$methodName(); // Вызываем реальный экшен
        }

        throw new \yii\web\NotFoundHttpException("Страница '$action' не найдена");
    }

}//Class
