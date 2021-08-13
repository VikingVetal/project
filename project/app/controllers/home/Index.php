<?php

namespace App\Controllers\Home;

use Core\View;

class Index{
//    public function __construct() {
//        echo "Мы в контроллере INDEX";
//    }

    public function index()
    {
        View::view('Index', 'home');
    }
}
?>