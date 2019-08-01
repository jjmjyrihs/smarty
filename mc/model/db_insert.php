<?php

require_once 'configs/database.php';

class Db_insert extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_account($account)
    {
        $stmt = $this->db->prepare('INSERT INTO account VALUES (?, ?, ?, ?, ?, ?)');
        $result = $stmt->execute(array(
            $account->email,
            $account->pwd,
            $account->name,
            $account->addr,
            $account->phone,
            $account->identity
        ));

        return $result;
    }
}
