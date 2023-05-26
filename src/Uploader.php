<?php

namespace Builov\Vertolet;

use Exception;

class Uploader implements UploaderInterface
{
    private $uploaddir;

    public function __construct()
    {
        $this->uploaddir = __DIR__ . '/../' . UPLOAD_DIR;
    }

    /**
     * @param array $file Элемент массива $_FILES
     * @throws Exception
     */
    public function upload(array $file): ?string
    {
        if ($file['error'] > 0) {
            switch ($file['error']) {
                case 1:
                case 2:
                    throw new Exception("Превышение допустимого размера файла.");
                case 4:
                    return null;
                case 3:
                case 6:
                case 7:
                case 8:
                    throw new Exception("Ошибка выгрузки файла: {$file['error']}");
            }
        }

        $savedfile = $this->uploaddir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $savedfile)) {
            $message = "Файл успешно загружен.\n";
            return $savedfile;
        } else {
            $message = "Ошибка сохранения файла!\n";
            return null;
        }
    }

}