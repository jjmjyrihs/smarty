<?php

require_once 'configs/database.php';

class Db_update extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_account($email, $pwd, $name, $addr, $phone, $identity)
    { 
        
    }
}