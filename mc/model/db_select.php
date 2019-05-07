<?php

require_once 'configs/database.php';

class Db_select extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_account()
    {
        return $this->db->query('SELECT * FROM account')->fetchAll(PDO::FETCH_ASSOC);
    }
}