<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use Core\View;

class About extends AbstractController
{
//    public function __construct() {
//        echo ' Мы сейчас на странице <b>About</b>, перейдите на страницу<a href="Gallery">Gallery</a>
//';
//    }

    public function index()
    {
        $modelObgAbout = new \App\model\About;
        $list = $modelObgAbout ->list();
        $arr = [
            'name'=> 'Mike',
            'age '=> 43,
            'city' => 'London'
        ];
       View::view('About', 'home', $list);
    }

    public function about()
    {
        $modelObgAboutByTitle = new \App\Model\About;
        $byTitle = $modelObgAboutByTitle ->getAboutByTitle('keyone');
        var_dump($byTitle);
        $this->gener('model','$byTitle' );
    }

    public function test()
    {
        print_r('it is new page for methood test');
    }


}
?>