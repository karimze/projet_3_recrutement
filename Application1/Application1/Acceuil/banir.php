<?php
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM recrutteur WHERE id= ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
$bannirUser = $bdd->prepare('DELETE FROM recrutteur WHERE id= ?');
$bannirUser->execute(array($getid));
  header('Location: try.php');
    }else{
        echo "Aucun candidat n'a pas été trouvé";
    }
}
else{
    echo "L'identifiant n'a pas été récupéré";
}
?>