<?php

require_once 'configs/database.php';

class Db_select extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    /** 測試衝突 */
    
    public function get_account()
    {
        return $this->db->query('SELECT  FROM account')->fetchAll(PDO::FETCH_ASSOC);
    }
}
