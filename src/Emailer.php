<?php

namespace Builov\Vertolet;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Emailer implements EmailerInterface
{
    private EmailSubject $subject;
    private EmailBody $body;
    private string $altBody;
    private EmailAttachment $attachment;

    public function setSubject($str)
    {
        $this->subject = $str;
        return $this;
    }

    public function setBody($str)
    {
        $this->body = $str;
        return $this;
    }

    public function setAltBody($str)
    {
        $this->altBody = $str;
        return $this;
    }

    public function setAttachment($path)
    {
        $this->attachment = $path;
        return $this;
    }

    public function mail(): void
    {
        $mail = new PHPMailer(true);

        try {
//          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASSWORD;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = SMTP_PORT;

            $mail->setFrom(SMTP_FROM_DEFAULT, 'Mailer');
//            $mail->addAddress('5905@lst.gr', 'Joe User');
            $mail->addAddress(SMTP_TO_DEFAULT);               //Name is optional
            $mail->addReplyTo(SMTP_FROM_DEFAULT, 'Information');
//          $mail->addCC('cc@example.com');
//          $mail->addBCC('bcc@example.com');

            if ($this->attachment) {
                $mail->addAttachment($this->attachment);
//              $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            }

            $mail->isHTML(true);
            $mail->Subject = $this->subject;
            $mail->Body    = $this->body;
            $mail->AltBody = $this->altBody;

            $mail->send();
            echo 'Message has been sent'; exit;

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}