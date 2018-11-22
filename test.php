 
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1); 

require('core/init.php'); 
$load= new Template();

$data=new Database();

$table="users";
// $array=array('title' => 'Header Title');


    ?>
<!DOCTYPE HTML>
<html>

<?php
	
	
	$load->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);

	$load->view("test.php");

	$date=date("m-d-y");

	echo "<br>";
	echo $date;
	echo "<br>";
	echo (formatdate($date));

	print_r($data->selectAll($table));
	
  ?>

  </div>
</body>
</html>