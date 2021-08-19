<?php

namespace App\model;

class Index extends AbstractModel
{
    public $text = 'Index model';

    public function list()
    {
       return $this->text;
    }

}