<?php

namespace App\model;

class About extends AbstractModel
{
    public $title =
        [
            'keyone'=> 'many many text',
            'keytwo'=> 'many many two',
            'keythree'=> '3333'

        ];

    public function getAboutByTitle($title)
    {
        if (array_key_exists($title, $this->title)) {
            return $this->title[$title];
        } else {
            return false;
        }
    }


    public function list()
    {
        return $this->title;

    }

}