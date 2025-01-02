<?php


class Admin extends User {


public function __construct($nom,$number_phone,$email_addresse,$password,$role)
{
    
    parent :: __construct($nom,$number_phone,$email_addresse,$password,$role);
}

}