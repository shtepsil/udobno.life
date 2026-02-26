<?php

namespace frontend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends MainController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        return $this->render('contact');
    }
    public function actionPartner()
    {
        return $this->render('partner');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionWhiteLabel()
    {
        return $this->render('white-label');
    }

    public function actionDeleteUdobno()
    {
        $this->layout = 'delete-layout';
        // Ваш код
        return $this->render('delete_udobno');
    }

    public function actionDeleteMoySam()
    {
        $this->layout = 'delete-layout';
        // Ваш код
        return $this->render('delete_moy-sam');
    }

    public function actionDeleteBkfPay()
    {
        $this->layout = 'delete-layout';
        // Ваш код
        return $this->render('delete_bkf-pay');
    }

}//Class
