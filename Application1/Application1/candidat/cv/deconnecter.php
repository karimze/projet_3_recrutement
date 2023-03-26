<?php

session_start();

if(!isset($_SESSION['user_idcnd'])){

    header('Location: ..\..\login\index.html');
    
}else{
    unset($_SESSION['user_idcnd']);

    session_destroy();
    header('Location: ..\..\login\index.html');
    exit();
}

?>