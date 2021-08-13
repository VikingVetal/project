<?php

namespace App\Controllers\Home;

use Core\View;

class About{
//    public function __construct() {
//        echo ' Мы сейчас на странице <b>About</b>, перейдите на страницу<a href="Gallery">Gallery</a>
//';
//    }

    public function index()
    {
        $arr = [
            'name'=> 'Mike',
            'age '=> 43,
            'city' => 'London'
        ];
       View::view('About', 'home', $arr);
    }
}
?>