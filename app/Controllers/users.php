<?php namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class users extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function login() 
	{
		$mongo = \Config\Services::Mongo();
		$req = $mongo->$_REQUEST;
		echo $req;
		

		//echo "<h1>Welcome to Login Form</h1>";
		//echo view('template/login');
	}

	public function register()
	{
		echo "<h1>Welcome to Register Page";
		//echo view('template/register');
	}

	public function authenticate() 
	{
		//echo "Hello";
		$form_response = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$SECRET_KEY = "Your-API-Secret-Key";   
		$response = file_get_contents($url."?secret=".$SECRET_KEY."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
		$data = json_decode($response);
		//echo $data;
		if(isset($data->success) && $data->success=="true")
		{
			//echo $data;
			echo "Validation Successfully passed through the Captcha";
		}
		else{
			echo "Please Fill captcha";
		}


	}
	
	//--------------------------------------------------------------------

}
