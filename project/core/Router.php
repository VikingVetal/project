<?php

namespace Core;


use App\controllers\ErrorPage404;

final class Router
{
    private $href;
    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"] ?? NULL; // без '?? NULL' выдает ошибку, а так всё работает
    }

    public function run()
    {
        if($this->href){
            $classNamespace = 'App\\Controllers\\' . ucfirst(ltrim($this->href, '/'));

            if(class_exists($classNamespace)){
                $classObj = new $classNamespace;
            } else {
                $classObj = new ErrorPage404();
            }
        }else{

            $classObj = new \App\Controllers\Index;
        }
        $classObj->index();
    }
}


?>



