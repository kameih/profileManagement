<?php
/*
* Developer: jai
*/

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1); 

require('core/init.php'); 

class Dashboard{

	private $load;
	private $data;
	private $checked;
	private $tablename="users";

	public function __construct()
	{
		$this->load= new Template();
		$this->data = new Database();
		$this->checked=new Validator();
	}

	function loadDashboard()
	{
		$this->checked->isLoggedIn();
			$usrs=array();
			$this->checked->sessionTimeOut();
			$this->load->usrs = $this->data->selectAll($this->tablename);
			$this->load->view("admin/table.php");
		
	}

	function deleteUser()
	{

		$this->checked->isLoggedIn();
		
			$this->checked->sessionTimeOut();
			$id=$_POST['id'];
			$delete=$this->data->deleteAll($id, $this->tablename);
			if($delete)
			{
			return true;
			}
	}

	function activeuser()
	{

		$this->checked->isLoggedIn();
		
			$this->checked->sessionTimeOut();
			$id=$_POST['id'];
			$data=array(
				"status"=>1
				);
			$active=$this->data->updateAll($id,  $data, $this->tablename);
			if($active)
			{
				return true;
			}
	}

	function inactiveuser()
	{

		$this->checked->isLoggedIn();
		
			$this->checked->sessionTimeOut();
			//echo "inactive";
			$id=$_POST['id'];
			$data=array(
				"status"=>0
				);
			$inactive=$this->data->updateAll($id,  $data, $this->tablename);
			if($inactive)
			{
				echo "updated";
			}
	}



	function myProfile()
	{	
		$this->checked->isLoggedIn();
			$usrs=array();
			$this->checked->sessionTimeOut();
			$this->load->usrs = $this->data->selectAll($this->tablename, $_SESSION["username"]);
			$this->load->view("admin/profile1.php");
	}

}
 
$dash=new Dashboard();
$fname=$_GET['f'];

 switch($fname)
{
	case "loadDashboard":
	$dash->loadDashboard();
	break;

	case "deleteUser":
	$dash->deleteUser();
	break;

	case "activeuser":
	$dash->activeuser();
	break;

	case "inactiveuser":
	$dash->inactiveuser();
	break;

	case "myProfile":
	$dash->myProfile();
	break;

}

