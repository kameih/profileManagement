<?php
/*
*helper for every format
*/

function formatdate($date)
	{
		$date=date("Y-m-d, H:i:s",strtotime($date));
		return $date;
	}

function redirect($page = false, $message = null, $message_type = null){
    if(is_string($page)){
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // Check if there is any message
    if($message != null){
        // Set message to session
        $_SESSION['message'] = $message;
    }

    // Check for the type
    if($message_type != null){
        // Set message type to session
        $_SESSION['message_type'] = $message_type;
    }

    // Redirect
    header('Location: '.$location);
    exit;
}