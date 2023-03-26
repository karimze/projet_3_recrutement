
<?php
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');

// Check for a valid user session
if(!isset($_SESSION['mdp']) || empty($_SESSION['mdp'])){
  header('Location: connexion.php');
  exit();
}

if(isset($_POST['envoi'])){
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['specialité']) && !empty($_POST['profile']) && !empty($_POST['description'])){
    $titre = htmlspecialchars($_POST['nom']);
    $contenu = nl2br(htmlspecialchars($_POST['prenom']));
    $conte = nl2br(htmlspecialchars($_POST['specialité']));
    $cont = nl2br(htmlspecialchars($_POST['profile']));
    $con = nl2br(htmlspecialchars($_POST['description']));

    $insererArticle = $bdd->prepare('INSERT INTO candidats(nom,prenom,email,nomEnt,description) VALUES (?, ?, ?, ?, ?)');
    $insererArticle->execute(array($titre, $contenu, $conte, $cont, $con));

    echo "L'article a bien été envoyé";
  } else {
    echo "Veuillez compléter tous les champs....";
  }
}
?>
<!DOCTYPE html> 
<html >
<head>
    <title>CANDIDAT</title>
    <meta charset="utf-8">
</head>
<body >
    <form method="POST" action="">

        <input type="text" name="id" >
        <br><br>
        <input type="text" name="nom">
</input><br><br>
        <input type="text" name="prenom">
        </input>
        <br><br><input type="text" name="email">
        </input>
        <br><br>
        <input type="text" name="nomEnt">
        </input>
        <br><br>
        <input type="text" name="description">
        </input>
        <br><br>
        <input type="submit" name="envoi">
    </form>
</body>
</html>