<?php


//connection à la bdd
$servername="localhost";
$DB="kimz";
$username="root";
$password="";

$dsn = "mysql:host=$servername;dbname=$DB";

try{

    $conn = new pdo($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}



?>