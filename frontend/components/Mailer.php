<?php

namespace frontend\components;

use PHPMailer;

class Mailer
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true); // PHPMailer 5.2

        $this->mailer->CharSet = 'UTF-8';
        $this->mailer->IsHTML(true);

        // От кого
        $this->mailer->SetFrom('adm@' . $_SERVER['HTTP_HOST'], 'Your best site');
    }

    public function send(array $to, string $subject, array $data = [], array $files = []): bool
    {
        try {
            foreach ($to as $email) {
                $this->mailer->AddAddress($email);
            }

            $this->mailer->Subject = $subject;
            $this->mailer->MsgHTML($this->buildBody($data));

            // Вложения
            if (!empty($files) && isset($files['file'])) {
                foreach ($files['file']['tmp_name'] as $key => $tmpPath) {
                    if ($tmpPath) {
                        $this->mailer->AddAttachment($tmpPath, $files['file']['name'][$key]);
                    }
                }
            }

            return $this->mailer->Send();

        } catch (\Exception $e) {
            return false;
        }
    }

    protected function buildBody(array $data): string
    {
        $rows = '';
        foreach ($data as $key => $value) {
            if ($value === '' || $key === 'admin_email' || $key === 'form_subject') continue;
            if (is_array($value)) $value = implode(', ', array_filter($value));

            $rows .= "
                <tr>
                    <td style='padding:10px;'><b>{$key}:</b></td>
                    <td style='padding:10px;'>{$value}</td>
                </tr>
            ";
        }
        return "<table style='width:50%;'>{$rows}</table>";
    }
}
