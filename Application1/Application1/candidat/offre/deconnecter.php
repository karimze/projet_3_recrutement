<?php
 session_start();

 error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_id'])){

header('Location: ..\..\login\index.html');

}else{

 unset($_SESSION['user_id']);
 session_destroy();
 
 header('Location: ..\..\login\index.html');
 exit();

}
 ?>