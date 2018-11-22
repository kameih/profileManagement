<?php


class Validator{

    public function required($field_array)
    {
       
        foreach($field_array as $field){
            if($field == ''){
                return false;
            }
        }
        return true;
    }

    public function passwordMatch($pa1, $pa2)
    {
        // print_r($pa1);

        //  print_r($pa2);

        if($pa1==$pa2)
        {
            return true;

        }
        else
        {
            return false;
        }
    }

    public function validateEmail($email)
    {
       
      // print_r($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return false;
        }else
        {
            return true;
        }

        

    }

    public function validatePhone($phone)
    {
        if(preg_match("/^[0-9]{1}[0-9]{9}$/i", $phone)) {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function sessionTimeOut()
    {
        // inactive in seconds
            $inactive = 300;
            if( !isset($_SESSION['timeout']) )
            $_SESSION['timeout'] = time() + $inactive; 
            $session_life = time() - $_SESSION['timeout'];          
            if($session_life > $inactive)
            {   
                unset($_SESSION["username"]);
                unset($_SESSION["timeout"]);

                $_SESSION['session_exp']="Your session has expired. Please login again";
                redirect("login.php", "Session Expired", "Login again");
                //die;
            }
        $_SESSION['timeout'] = time();  
    }

    public function isLoggedIn()
    {
        if(!isset($_SESSION["username"]))
        {
            redirect("login.php", "Login", "Login again");
        }
    }


}