<?php

namespace Builov\Vertolet;

class CustomerRequestForm extends EmailForm
{
    private array $fields = [
        [
            'name' => 'your-name',
            'type' => 'string',
            'value' => null
        ],
        [
            'name' => 'your-email',
            'type' => 'email',
            'value' => null
        ],
        [
            'name' => 'your-message',
            'type' => 'text',
            'value' => null
        ],
        [
            'name' => 'attachment',
            'type' => 'file',
            'value' => null
        ]
    ];

    private UploaderInterface $uploader;

    /**
     * @param EmailerInterface $emailer
     * @param UploaderInterface $uploader
     */
    public function __construct(EmailerInterface $emailer, UploaderInterface $uploader)
    {
        parent::__construct($emailer);
        $this->uploader = $uploader;
        $this->setFields();
    }

    private function setFields()
    {
        foreach ($this->fields as $key => $field) {
            if (!empty($_POST[$field['name']])) {
                $this->fields[$key]['value'] = $_POST[$field['name']];
            } elseif (!empty($_FILES[$field['name']])) {
                $this->fields[$key]['value'] = $_FILES[$field['name']];
            }
        }
    }

    /**
     * @return string
     */
    public function generate(): string
    {

        $html = '';
        return $html;
    }

    public function process(): void      //your-name=&your-email=&your-message=
    {
//        exit;
        $attachment = $this->uploader->upload($this->fieldAttachment);

        $this->emailer
            ->setSubject('Форма заявки')
            ->setBody('<p>Имя: ' . $this->fields[0]['value'] . '</p><p>Email: ' . $this->fieldEmail . '</p><p>Сообщение: ' . $this->fieldMessage . '</p>')
            ->setAltBody('Имя: ' . $this->fieldName . '; Email: ' . $this->fieldEmail . '; Сообщение: ' . $this->fieldMessage)
            ->setAttachment($attachment)
            ->mail();

//        echo $_POST['your-name'];
//        echo file_get_contents('php://input');
//        exit;
    }
}
