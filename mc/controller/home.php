<?php

require 'admin.php';
require '../vendor/autoload.php';


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

		/*
			$to =" 1104137128@gm.kuas.edu.tw"; //收件者
			$subject = "test"; //信件標題
			$msg = "smtp發信測試";//信件內容
			$headers = "From: admin@your.com"; //寄件者
			mail("$to", "$subject", "$msg", "$headers");
		*/
		/*
			$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
			->setUsername('1104137128@nkust.edu.tw')
			->setPassword('E124816774')
			;
			$mailer = new Swift_Mailer($transport);
			$message = (new Swift_Message('Wonderful Subject'))
			->setFrom('admin@your.com')
			->setTo('1104137128@gm.kuas.edu.tw')
			->setBody('Here is the message itself');
			$mailer->send($message);
		*/
		// $f = new MessageFormatter('en_US', "ÄäÖöÜüßÀàÂâÇçÉéÈèÊêËëÔôŸÿÛûकीकऊक्न्य~!@#$%^&()_+}{,.;'[]=-");
		// var_dump($f->format(array()));


		// $test = $this->callpy();

		$a = 'a';

		if (true || $b = $a) {
			echo 'qq';
		}

		phpinfo();

		$accounts = $this->get_account();

        $this->smarty->assign('accounts', $accounts);
		$this->smarty->display('../v/html/home/home.tpl');
        // $this->smarty->display('../v/html/home/test.tpl');

	}

	public function callpy() {
		// $jsondata = exec("python V6.py");
		// $jsondata = exec('V6.py');
		exec('V6.py', $out);
		var_dump($out);
		$jsondata = json_decode($out, true);
	   return $jsondata ;
	}

	public function download($url, $path = 'images/') {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		$file = curl_exec($ch);
		curl_close($ch);
		$filename = pathinfo($url, PATHINFO_BASENAME);
		$resource = fopen($path . $filename, 'a');
		fwrite($resource, $file);
		fclose($resource);
	}

    public function get_account()
    {
        return $this->select->get_account();
    }

    public function insert_account()
    {

        $account = new Account(array(
            'email' => $_POST['email'],
            'pwd' => $_POST['pwd'],
            'name' => $_POST['name'],
            'addr' => $_POST['addr'],
            'phone' => $_POST['phone'],
            'identity' => $_POST['identity']
        ));

        $result = $this->insert->insert_account($account);
        echo json_encode($result);
	}

	public function update_account()
	{
		$account = new Account(array(
            'email' => $_POST['email'],
            'pwd' => $_POST['pwd'],
            'name' => $_POST['name'],
            'addr' => $_POST['addr'],
            'phone' => $_POST['phone'],
            'identity' => $_POST['identity']
        ));

        $result = $this->update->update_account($account);
        echo json_encode($result);
	}

	public function get_ajax($date = null)
	{

		echo '<br><button>test</button>';
	}




}


