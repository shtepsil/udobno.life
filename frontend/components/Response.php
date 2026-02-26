<?php
namespace frontend\components;

class Response
{
    /**
     * Отправка успешного JSON-ответа
     * @param array $data Данные для отдачи
     * @param int $status HTTP статус (по умолчанию 200)
     */
    public static function success(array $data = [], int $status = 200)
    {
        self::send($data, $status);
    }

    /**
     * Отправка ошибки в JSON
     * @param string $message Сообщение об ошибке
     * @param int $status HTTP статус (по умолчанию 400)
     */
    public static function error(string $message, int $status = 400)
    {
        self::send(['error' => $message], $status);
    }

    /**
     * Общий метод отправки
     */
    protected static function send(array $data, int $status)
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
