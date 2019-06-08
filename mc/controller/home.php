<?php

require 'admin.php';


class Home extends Admin
{


    public function __construct()
    {

        parent::__construct();

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $action = $_POST['action'];
            $this->$action();           
        } else {
            $this->index();
        }

    }    

    public function index()
    {

        define('NDB_API_KEY', 'oQTteXhD34Vi366d5gPdw7ExaxJbwtHlWV8v5QuE');

        $params = array(
            'api_key' => NDB_API_KEY,
            'q' => 'black pepper',
            'format' => 'json'
        );

        $url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);

        $data = file_get_contents($url);

        $decode = json_decode($data);



        $accounts = $this->get_account();
        $this->smarty->assign('accounts', $accounts);
        $this->smarty->display('../v/html/home/home.tpl');
    }

    public function get_account()
    {
        return $this->select->get_account();
    }

    public function insert_account()
    {        
        echo json_encode(true);
        
        // $account = new Account(array(
        //     'email' => $_POST['email'],
        //     'pwd' => $_POST['pwd'],
        //     'name' => $_POST['name'],
        //     'addr' => $_POST['addr'],
        //     'phone' => $_POST['phone'],
        //     'identity' => $_POST['identity']
        // ));

        // $result = $this->insert->insert_account($account);
        // echo json_encode($result);
    }




}


