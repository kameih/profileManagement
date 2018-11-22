<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1); 

require_once("config/config.php");
require_once('helpers/format_helper.php');

// require_once('library/Database.php');
// require_once('library/Template.php');
// require_once('library/Validator.php');
// Auto-loader

// function my_autoload ($class_name) {
//         // include(__DIR__ . "/" . $pClassName . ".php");
// 	 require_once('library/'.$class_name.'.php');

//     }
// spl_autoload_register("my_autoload");

function __autoload($class_name){
    require_once('library/'.$class_name.'.php');
}
