<?php

namespace App\Controllers\Home;

use Core\View;

class Gallery{
//    public function __construct() {
//        echo ' Мы сейчас на странице <b>Gallery</b>, перейдите на страницу<a href="About">About</a>
//';
//    }

    public function index()
    {
        View::view('Gallery', 'home');
    }
}
?>