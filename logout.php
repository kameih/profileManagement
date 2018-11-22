<?php 
session_start();
//session_destroy();

error_reporting(E_ALL);
ini_set('display_errors', 1); 

require('core/init.php'); 
$load= new Template();

unset($_SESSION['username']);
redirect('login.php');

?>