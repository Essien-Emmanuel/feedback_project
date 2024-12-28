<?php

class User
{
    public $passcode;
    function __construct(public $name, public $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function get_name()
    {
        echo $this->name;
    }
}

class Employer extends User
{
    public function __construct($name, $email, public $title)
    {
        parent::__construct($name, $email);
        $this->title = $title;
    }

    public function get_title()
    {
        echo $this->title;
    }
}

$employer = new Employer('Emmanuel', 'emgee@gmail.com', 'manager');
$employer->get_name();
