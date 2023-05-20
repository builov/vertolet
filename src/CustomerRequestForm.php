<?php

namespace Builov\Vertolet;

class CustomerRequestForm extends EmailForm
{
    private $fields = [
        'your-name' => 'string',
        'your-email' => 'email',
        'your-message' => 'text',
        'attachment' => 'document'
    ];
    protected EmailerInterface $emailer;
    private UploaderInterface $uploader;

    public function __construct(EmailerInterface $emailer, UploaderInterface $uploader)
    {
        parent::__construct($emailer);
        $this->uploader = $uploader;
    }

    /**
     * @return string
     */
    public function generate(): string {

        $html = '';
        return $html;
    }

    public function process(): void      //your-name=&your-email=&your-message=
    {
//        exit;
        $attachment = $this->uploader->upload($_FILES['attachment']);

        $this->emailer->setSubject('Форма заявки');
        $this->emailer->setBody('<p>Имя: ' . $_POST['your-name'] . '</p><p>Email: ' . $_POST['your-email'] . '</p><p>Сообщение: ' . $_POST['your-message'] . '</p>');
        $this->emailer->setAltBody('Имя: ' . $_POST['your-name'] . '; Email: ' . $_POST['your-email'] . '; Сообщение: ' . $_POST['your-message']);
        $this->emailer->setAttachment($attachment);
        $this->emailer->mail();

//        echo $_POST['your-name'];
//        echo file_get_contents('php://input');
//        exit;
    }

}