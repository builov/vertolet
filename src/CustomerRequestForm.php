<?php

namespace Builov\Vertolet;

use Exception;

class CustomerRequestForm extends EmailForm
{
    private array $fields = [
        'your-name' => [
            'name' => 'your-name',
            'type' => 'string',
            'value' => null
        ],
        'your-email' => [
            'name' => 'your-email',
            'type' => 'email',
            'value' => null
        ],
        'your-message' => [
            'name' => 'your-message',
            'type' => 'text',
            'value' => null
        ],
        'attachment' => [
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

    /**
     * @throws Exception
     */
    public function process(): void      //your-name=&your-email=&your-message=
    {
        $attachment = $this->uploader->upload($this->fields['attachment']['value']);

        $this->emailer
            ->setSubject('Форма заявки')
            ->setBody("<p>Имя: {$this->fields['your-name']['value']}</p><p>Email: {$this->fields['your-email']['value']}</p><p>Сообщение: {$this->fields['your-message']['value']}</p>")
            ->setAltBody("Имя: {$this->fields['your-name']['value']}; Email: {$this->fields['your-email']['value']}; Сообщение: {$this->fields['your-message']['value']}");
        if ($attachment) {
            $this->emailer->setAttachment($attachment);
        }
        $this->emailer->mail();
    }
}
