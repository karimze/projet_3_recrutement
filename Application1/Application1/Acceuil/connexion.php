<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location:adm.php');
}else{header('Location:membre.php');}

