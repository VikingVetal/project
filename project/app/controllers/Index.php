<?php

namespace App\Controllers;

class Index{
    public function __construct() {
        echo "Мы в контроллере INDEX";
    }

    public function index()
    {
        print_r('Index');
    }
}
?>