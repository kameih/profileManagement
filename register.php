<?php


error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1); 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require('core/init.php'); 
$load= new Template();
$data=new Database();
$checked=new Validator();
$imageUploader=new ImageUploader();
$tablename="users";

// Compulsory
$imageUploader->setPath("uploads/images");   // The directory where images will be uploaded

// The rest are optional
//$imageUploader->setSalt("my_application_specific_salt");  // It is used while hashing image names
$imageUploader->setMinFileSize(0);                           // Set minimum file size in bytes
//$imageUploader->setMaxFileSize(100000);  
$randid=rand(1, 1000000);
$date=date('Y-m-d');
	
 	if(isset($_POST['register']))
	 	{	
	 		
	 		$name=isset($_POST['name']) ? $_POST['name']:"";
	 		$phone=isset($_POST['phone']) ? $_POST['phone']:"";
	 		$email=isset($_POST['email']) ? $_POST['email']:"";
	 		$username=isset($_POST['username']) ? $_POST['username']:"";
	 		$password=isset($_POST['password']) ? $_POST['password']:"";
	 		$repassword=isset($_POST['repassword']) ? $_POST['repassword']:"";
	 		$about=isset($_POST['about_me']) ? $_POST['about_me']:"";
	 		$profileimage=isset($_FILES['profileimage']['name']) ? $_FILES['profileimage']['name']:"";
	 		// testing for required fields
	 		$doupload=$imageUploader->upload($_FILES["profileimage"], $randid);

			$userinfo = array();
			$userinfo['name'] = $name;
			$userinfo['phone'] = $phone;
			$userinfo['email'] = $email;
			$userinfo['infousername'] = $username;
			$userinfo['about'] = $about;

			$_SESSION['userinfo'] = $userinfo;

	 		$checkarr=array(

	 			'name'=>$name, 
	 			'phone'=>$phone,
	 			'email'=>$email,
	 			'username'=>$username, 
	 			'password'=>md5($password), 
	 			'profile_image' =>md5($randid));
	 			

	 		if(!$checked->required($checkarr) )
	 		{
	 			//$load->checkfield="req field is missing";
	 			redirect("register.php", "empty", "failure");
	 			//$_POST['register']
	 		}
	 		else
	 		{	
	 			if(!$checked->validateEmail($email) || $data->emailExist($email, $tablename)!="")
	 			{
	 				if (session_status() == PHP_SESSION_NONE) {
							session_start();
							}


	 				$_SESSION["exist_email"]="Email has already exist";
	 				redirect("register.php", "empty", "failure");
	 			}

	 			else
	 			{
	 				

	 				if(!$checked->passwordMatch($password, $repassword))
	 				{
	 					redirect("register.php", "empty", "failure");
	 				}
	 				else
	 				{
	 					if(!$checked->validatePhone($phone))
	 					{
	 						redirect("register.php", "empty", "failure");
	 					}
	 					else
	 					{
	 						//$load->view('success.php');
	 						$checkarr1=array('description'=>$about);
	 						$data1=array_merge($checkarr, $checkarr1);

							
	 						if($data->validateUsername($username, $password, $tablename)!="")
	 						{
	 							
								if(!isset($_SESSION)) 
								{ 
								session_start(); 
								} 

	 							$_SESSION["exist_account"]="Username already Exist.";
	 							redirect("register.php", "empty", "failure");
	 						}
	 						else
	 						{	
	 							
									if(!isset($_SESSION)) 
									{ 
									session_start(); 
									} 

								

								if($doupload && $imageUploader->checkImageType($_FILES['profileimage']['type']))
								{
									unset($_SESSION['exist_account']);
									unset($_SESSION['userinfo']);
									$data->insertFieldData($data1, $tablename);
									$load->view('success.php');
								}
								else
								{
								
									if(!isset($_SESSION)) 
									{ 
									session_start(); 
									} 

		 							$_SESSION["exist_account"]="Image uploading failed. Try different format";
		 							redirect("register.php", "empty", "failure");
								}
								
								
	 						}
	 						
	 					}
	 					
	 				}
	 				
	 			}
	 			
	 		}
	 		
	 	}

	 elseif(isset($_POST['update']))
	 	{
	 		$checked->isLoggedIn();
	 		$checked->sessionTimeOut();

	 		$name=isset($_POST['name']) ? $_POST['name']:"";
	 		$phone=isset($_POST['phone']) ? $_POST['phone']:"";
	 		$email=isset($_POST['email']) ? $_POST['email']:"";
	 		$username=isset($_POST['username']) ? $_POST['username']:"";
	 		//$password=isset($_POST['password']) ? $_POST['password']:"";
	 		//$repassword=isset($_POST['repassword']) ? $_POST['repassword']:"";
	 		$about=isset($_POST['about_me']) ? $_POST['about_me']:"";
	 		
	 		$profileimage=isset($_FILES['profileimage']['name']) ? $_FILES['profileimage']['name']:"";
	 		

	 		$userid=isset($_POST['user_id']) ? $_POST['user_id']:"";


	 		
	 		$_SESSION['settings_dash']="active"." "."show";
	 		
	 		$checkarr1=array(

	 			'name'=>$name, 
	 			'phone'=>$phone,
	 			'email'=>$email,
	 			'username'=>$username, 
	 			//'password'=>md5($password), 
	 			//'profile_image' =>md5($randid)
	 			);

	 		
	 		$userarray=array();
	 		$userarray=$data->selectAll($tablename, $email, $userid);
	 		$password=$userarray[0]->password;
	 		$profile_image_old=$userarray[0]->profile_image;
	 		$description=$userarray[0]->description;
	 		
	 		if(!$checked->required($checkarr1) )
	 		{
	 			
	 			redirect('Dashboard.php?f=myProfile');
	 			
	 		}
	 		else
	 		{
	 			if(!$checked->validateEmail($email) || $data->emailExist($email, $tablename, $userid)!="")
	 			{
	 				$_SESSION['update_email_exist']="Email Already Exist";
	 				redirect('Dashboard.php?f=myProfile');
	 			}
	 			else
	 			{
					if(!$checked->validatePhone($phone))
					{
						//$_SESSION['update_email_exist']="Email Already Exist";
						redirect('Dashboard.php?f=myProfile');
					}
					else

						{
							if($data->validateUsername($username, $password, $tablename, $userid)!="")
	 						{
	 							
	 							$_SESSION["exist_account"]="Username already Exist.";
	 							redirect('Dashboard.php?f=myProfile');
	 						}
	 						else

	 						{
								$checkarr1["description"]=$about;

								if($profileimage!="")
								{
									
									
									// echo "imape upload ";
									// die;

									$doupload=$imageUploader->upload($_FILES["profileimage"], $randid);

									if($doupload && $imageUploader->checkImageType($_FILES['profileimage']['type']))
									{
										$checkarr1["profile_image"]=md5($randid);
										$checkarr1["update_on"]=$date;

										$data->updateAll($userid, $checkarr1, $tablename);

										$_SESSION['sucess_update']="You have updated Your profile successfully.";
										$_SESSION["username"]=$email;
										redirect('Dashboard.php?f=myProfile');

									}
									else
									{
										$_SESSION['sucess_update']="Image Uploading failed.";
										redirect('Dashboard.php?f=myProfile');
									}	


								}	
								else
								{
									
									if($data->updateAll($userid, $checkarr1, $tablename))
									{
										// echo "sucss";
										// print_r($data->updateAll($userid, $checkarr1, $tablename));
										// die;

									$_SESSION['sucess_update']="You have updated Your profile successfully.";
									$_SESSION["username"]=$email;
									$checkarr1["update_on"]=$date;
									redirect('Dashboard.php?f=myProfile');
									}
									else
									{	
										// echo "failed";
										// print_r($data->updateAll($userid, $checkarr1, $tablename));
										// die;
										$_SESSION['sucess_update']="Failed to update profile";
										redirect('Dashboard.php?f=myProfile');
									}
									
							
								}
								
	 						}
							
						}
	 			}
	 			
	 		}
	 		
	 		die;

	 		
	 		
	 	}
 	else
	 	{
	 		$load->view("register.php");
	 	}
 
 