<?php

namespace Builov\Vertolet;

class Form
{
    private $fields = [
        'your-name' => 'string',
        'your-email' => 'email',
        'your-message' => 'text',
        'attachment' => 'document'
    ];

    public function generate()
    {

    }

    public function process(): void      //your-name=&your-email=&your-message=
    {
        $uploader = new Uploader();
        $attachment = $uploader->upload($_FILES['attachment']);

//        $mailData = [];
//        $mailData['attachment']

        $emailer = new Emailer();
        $emailer->setSubject('Форма заявки');
        $emailer->setBody('<p>Имя: ' . $_POST['your-name'] . '</p><p>Email: ' . $_POST['your-email'] . '</p><p>Сообщение: ' . $_POST['your-message'] . '</p>');
        $emailer->setAltBody('Имя: ' . $_POST['your-name'] . '; Email: ' . $_POST['your-email'] . '; Сообщение: ' . $_POST['your-message']);
        $emailer->setAttachment($attachment);
        $emailer->mail();

//        echo $_POST['your-name'];
//        echo file_get_contents('php://input');
//        exit;
    }
}