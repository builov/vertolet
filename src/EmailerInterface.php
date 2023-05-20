<?php

namespace Builov\Vertolet;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

interface EmailerInterface
{
    public function setSubject($str);

    public function setBody($str);

    public function setAltBody($str);

    public function setAttachment($path);

    public function mail();
}