<?php
use App\Controller\HomeController;
require __DIR__.'/../vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/imagecollection/public/list':
        $controller = new HomeController();
        $controller->index();
        break;
    
    default:
        # code...
        break;
}

// var_dump($url);die;