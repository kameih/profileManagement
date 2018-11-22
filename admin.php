<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1); 

require('core/init.php'); 
$load= new Template();
$data = new Database();
//$dash = new Dashboard();
$checked=new Validator();
$tablename="users";
	
	if(isset($_POST['login']))
	{
		
		$email=isset($_POST['username']) ? $_POST['username']:"";
		$password=md5(isset($_POST['password']) ? $_POST['password']:"");
		$repassword=md5(isset($_POST['repassword']) ? $_POST['repassword']:"");

		$checkarr=array(
	 			'username'=>$email, 
	 			'password'=>$password, );		
			if(!$checked->required($checkarr))
	 		{
	 			//$load->checkfield="req field is missing";
	 			redirect("login.php", "empty", "failure");
	 			//$_POST['register']
	 		}

	 		else
	 		{	

	 			if(!$checked->passwordMatch($password, $repassword))
	 				{
	 					redirect("login.php", "password not match", "failure");
	 				}

	 				else
	 				{
	 					//$load->view('admin/index.php');
	 					if(!$data->loginUser($email, $password, $tablename))
	 					{
	 						session_start();
	 						$_SESSION["not_exist_account"]="Account doesn't Exist Or User email/password is incorrect";	
	 						$_SESSION["email"]=$email;					
	 						redirect("login.php", "Account doesn't exist", "failure");
	 					}
	 					else
	 					{	
							if (session_status() == PHP_SESSION_NONE) {
							session_start();
							}							
							$_SESSION['username']=$email;
							unset($_SESSION["email"]);
							$load->view('admin/index.php');
	 					}
	 				}

	 		}
	}
	else
	{
			$checked->isLoggedIn();	
			$checked->sessionTimeOut();
			$load->view('admin/index.php');
	}
 
 