<?php

class User
{
    public $passcode;
    function __construct(public $name, public $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function get_passcode()
    {
        $pcode = '122333';
        $this->passcode = $pcode;
        return "Passcode is $pcode <br>";
    }

    public function access_secret($passcode)
    {
        try {
            if (!$this->passcode) {
                throw new  Exception("You don't have a passcode");
            }
            if ($passcode !== $this->passcode) {
                throw new Exception('incorrect passcode');
            }
            echo "The secret of the organization is 'No Secret'. Ha ha ha! <br>";
            return;
        } catch (Exception $e) {
            echo $e->getMessage() . "<br>";
        }
    }
}

$user1 = new User('Emmanuel', 'emgee@gmail.com');
echo $user1->get_passcode();
echo $user1->access_secret('122333');
