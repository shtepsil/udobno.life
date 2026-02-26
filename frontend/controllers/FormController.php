<?php
namespace frontend\controllers;

use frontend\components\Mailer;
use frontend\components\Response;

class FormController extends MainController
{
    public function actionSend()
    {
//        sleep(4);
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            Response::error('Метод не разрешен', 405);
        }

        $emails = $_POST['admin_email'] ?? [];
        $subject = trim($_POST['form_subject'] ?? 'Без темы');

        $mailer = new Mailer();

        $result = $mailer->send(
            $emails,
            $subject,
            $_POST,
            $_FILES
        );

        if ($result) {
            Response::success(['message' => 'Заявка отправлена успешно!']);
        } else {
            Response::error('Ошибка при отправке письма', 500);
        }
    }
}
