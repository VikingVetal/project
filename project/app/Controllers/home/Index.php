<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use Core\View;

class Index extends AbstractController
{
//    public function __construct() {
//        echo "Мы в контроллере INDEX";
//    }

    public function index()
    {
        View::view('Index', 'home');
    }

    public function list()
    {
        $modelObjText = new \App\model\Index();
        $getText = $modelObjText->list('book');
        var_dump($getText);
        $this->gener('model', $getText);
    }
}
?>