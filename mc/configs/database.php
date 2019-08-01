<?php

class Database
{

    /**
     * @var
     */
    protected $db;

    public function __construct()
    {
        $this->db = $this->getDB();
    }

    public static function getDB()
    {
        try {
			$db = new PDO('mysql:host=db.mis.kuas.edu.tw;dbname=s1104137128', 's1104137128', 'Ss860228');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->query("SET NAMES utf8");
            return $db;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}
