<?php


namespace Core;


class View
{
     public static function view($name, $dir = 'home', $data = NULL)
    {
        require 'view/'. $dir .'/' . $name . '.php';
    }

}