<?php

error_reporting(E_ALL);
ini_set('display_errors', 1); 

require('core/init.php'); 
$load= new Template();

    ?>
<!DOCTYPE HTML>
<html>

<?php

  //include('views/header.php');
  //base("header.php");
  $load->view('index.php');
  //include('views/footer.php');
  ?>

  </div>
</body>
</html>