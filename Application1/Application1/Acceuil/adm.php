<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
      $pseudo_par_defaut = "admin";
      $mdp_par_defaut = "admin1234";

      $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
      $mdp_saisi = htmlspecialchars($_POST['mdp']);
      if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
          $_SESSION['mdp'] = $mdp_saisi;
          header('Location: connexion.php');
      }  else {
        $message = "votre mot de passe ou pseudo est incorrect";
    }
}else{
  $message ="veuillez completer tous les champs....";
    }}
?>
<!DOCTYPE html> 
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPACE ADMIN</title>
    <link rel="stylesheet" href="test.css" >
    <meta charset="utf-8">
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form method="POST" action="" style="text-align:center;" class="box">
    <div class="user-box">
      <input type="text" name="pseudo" autocomplete="on" placeholder="Saisir votre nom">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="mdp" placeholder="Mot de passe">
      <label>Password</label>
    </div>
  
    <input type="submit" name="valider" >

  </form>
</div>
  <?php if(!empty($message)){ ?> 
        <div class="erreur" style="background-color: #ddd; color:white; padding:10px;">
            <?php echo $message; ?>
        </div>
    <?php } ?>
  </body>
</html>


