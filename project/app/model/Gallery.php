<?php

namespace App\model;

class Gallery extends AbstractModel
{
    public $content =
        [
            'book'=> 'read php',
            'video'=> 'watch php',
            'photo'=> 'photo'

        ];

    public function getContent($content)
    {
        if (array_key_exists($content, $this->content)) {
            return $this->content[$content];
        } else {
            return false;
        }
    }

    public function list()
    {
        return $this->content;

    }
}