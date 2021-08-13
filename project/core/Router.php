<?php

namespace Core;

use App\Controllers\ErrorPage404;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"] ?? NULL;
    }

    public function run()
    {
        if($this->href){
            $classNamespace = 'App\\Controllers\\Home\\' . ucfirst(ltrim($this->href, '/'));
            $classNamespaceAdmin = 'App\\Controllers\\Admin\\' . ucfirst(ltrim($this->href, '/'));

            if(class_exists($classNamespace)){
                $classObj = new $classNamespace;
            } else if(class_exists($classNamespaceAdmin)) {
                $classObj = new $classNamespaceAdmin;
            } else {
                $classObj = new ErrorPage404();
            }

         }else{
            $classObj = new \App\Controllers\Home\Index;
        }

        $classObj->index();
    }
}




?>



