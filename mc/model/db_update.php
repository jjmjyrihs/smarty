<?php

require_once 'configs/database.php';

class Db_update extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_account($account)
    {

		$stmt = ("UPDATE account SET `name` = :name WHERE email = :email");
		$sth = $this->db->prepare($stmt);
		$sth->bindValue(':name', $account->name, PDO::PARAM_STR);
		$sth->bindValue(':email', $account->email, PDO::PARAM_STR);

		$sth->execute();


    }
}
