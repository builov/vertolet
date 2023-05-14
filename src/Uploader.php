<?php

namespace Builov\Vertolet;

class Uploader
{
    private $uploaddir;

    public function __construct()
    {
        $this->uploaddir = __DIR__ . '/../' . UPLOAD_DIR;
    }

    public function upload($file)
    {
        $savedfile = $this->uploaddir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $savedfile)) {
            $message = "Файл был успешно загружен.\n";
            return $savedfile;
        } else {
            $message = "Ошибка загрузки файла!\n";
            return null;
        }

//        echo '<pre>';
//        echo $message;
//        echo 'Некоторая отладочная информация:';
//        print_r($_FILES);
//        print "</pre>";
    }

}