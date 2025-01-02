<?php

namespace App\Controllers\UserController;

use App\Classes\User;



require 'vendor/autoload.php';

class UserController
{
    public function __construct()
    {
        echo 'UserController class loaded';
    }

    public function create ($usename, $password)
    {
        $user = new App\Classes\User();
    }
}