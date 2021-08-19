<?php

namespace App\model;

class Admin extends AbstractModel
{
    public $register =
        [
            'name'=> 'admin',
            'password'=> 'admin_admin',
            'phone'=> '1234567'

        ];

    public function getPassword($register)
    {
        if (array_key_exists($register, $this->register)) {
            return $this->register[$register];
        } else {
            return false;
        }
    }
}