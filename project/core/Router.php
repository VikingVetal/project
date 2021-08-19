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
        if ($this->href) {
            $href = ltrim($this->href, '/');
            $segments = explode('/', $href);

            if ($segments[0] === 'admin') {
                $classNamespace = 'App\\Controllers\\Admin\\' . ucfirst($segments[0]);
            } else {
                $classNamespace = 'App\\Controllers\\Home\\' . ucfirst($segments[0]);
            }

            if (class_exists($classNamespace)) {
                $classObj = new $classNamespace;

                if ($segments[0] === 'admin') {
                    $methodName = $segments[1] ?? NULL;
                } else {
                    $methodName = $segments[1] ?? NULL;
                }

                //
                if ($methodName === NULL) {
                    $methodName = 'Index';
                }
                if (method_exists($classObj, $methodName)) {
                    $classObj->$methodName();
                } else {
                    $classObj = new ErrorPage404();
                }
                //

            } else {
                $classObj = new ErrorPage404();
            }

        } else {
            $classObj = new \App\Controllers\Home\Index;
            $classObj->index();
        }

        $classObj->index();
    }

}
