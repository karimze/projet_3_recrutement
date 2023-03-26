<?php
$username ="root";
$pass= "";
$host="localhost";
$db="kimz";
$dsn = "mysql:host=$host;dbname=$db";

try{
    $cnx = new PDO($dsn,$username,$pass);
    if($cnx)
    {
       // echo "Connected to the $db database successfully!"; 
    }
   
}catch(PDOEXception $e){
    $error_cnx = $e->getMessage();
    echo $error_cnx;
    exit();
}
?>
