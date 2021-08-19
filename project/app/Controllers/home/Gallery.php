<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use Core\View;

class Gallery extends AbstractController
{
//    public function __construct() {
//        echo ' Мы сейчас на странице <b>Gallery</b>, перейдите на страницу<a href="About">About</a>
//';
//    }

    public function index()
    {
        View::view('Gallery', 'home');
    }

    public function more()
    {
        $modelObjContent = new \App\model\Gallery;
        $getContent = $modelObjContent->getContent('book');
        var_dump($getContent);
        //$this->gener('model', $getContent);
    }
}

?>