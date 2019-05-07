<?php

class Account
{
    private $email;
    private $pwd;
    private $name;
    private $addr;
    private $phone;
    private $identity;

    public function __construct($account)
    {
        $this->email = $account['email'];
        $this->pwd = $account['pwd'];
        $this->name = $account['name'];
        $this->addr = $account['addr'];
        $this->phone = $account['phone'];
        $this->identity = $account['identity'];
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}