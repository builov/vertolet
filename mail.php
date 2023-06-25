<?php

use Builov\Vertolet\Application\CustomerRequestForm;
use Builov\Vertolet\Infrastructure\Emailer;
use Builov\Vertolet\Infrastructure\Uploader;

require 'vendor/autoload.php';
require 'config.php';

$emailer = new Emailer();
$uploader = new Uploader();
$form = new CustomerRequestForm($emailer, $uploader);

if (!empty($_POST)) {
    $form->process();
}

//print_r($_POST);


