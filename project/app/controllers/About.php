<?php

namespace App\Controllers;

class About{
    public function __construct() {
        echo ' Мы сейчас на странице <b>About</b>, перейдите на страницу<a href="Gallery">Gallery</a>
';
    }

    public function index()
    {
        print_r('About');
    }
}
?>