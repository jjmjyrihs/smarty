<?php

require 'controller/home.php';

class Index extends Home
{

    public function __construct()
    {
        parent::__construct();
    }


//$smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->display('index.tpl');

}


$obj = new Index;
