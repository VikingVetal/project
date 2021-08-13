<?php


namespace App\controllers\admin;


use Core\View;

class Admin
{
    public function index()
    {
        print_r('qq admin');
        View::view('Admin', 'admin');

    }
}