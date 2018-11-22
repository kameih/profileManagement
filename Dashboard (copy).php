<?php
/*
* Deveoper: jai
*/
//require('core/init.php'); 

Class Dashboard{

	protected $load;
	protected $data;
	protected $checked;

	 public function __construct()
	{

		$this->load= new Template();
		$this->data = new Database();
		$this->checked=new Validator();
	}

	public function loadDashboard()
	{
		$this->load->view("admin/table.php");
	}
}