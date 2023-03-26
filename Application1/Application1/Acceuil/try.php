<?php
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin', 'root', '');

// Check for a valid user session


// Check if form was submitted
if(isset($_POST['envoi'])){
  $nom = trim($_POST['nom']);
  $prenom = trim($_POST['prenom']);
  $email = trim($_POST['email']);
  $nomEnt = trim($_POST['nomEnt']);
  $description = trim($_POST['description']);

  // Check if form fields are not empty
  if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($nomEnt) && !empty($description)){
    // Sanitize form inputs
    $titre = htmlspecialchars($nom);
    $contenu = htmlspecialchars($prenom);
    $conte = htmlspecialchars($email);
    $cont = htmlspecialchars($nomEnt);
    $con = htmlspecialchars($description);

    // Insert form data into database
    $insererArticle = $bdd->prepare('INSERT INTO recrutteur(nom,prenom,email,nomEnt,description) VALUES (?, ?, ?, ?, ?)');
    if($insererArticle->execute(array($titre, $contenu, $conte, $cont, $con))){
      echo "L'article a bien été envoyé";
    } else {
      echo "Une erreur est survenue lors de l'envoi de l'article";
    }
  } else {
    echo "Veuillez compléter tous les champs.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> this is my project </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="admin.css" >
        <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    </head>
<body
style="
    background-image: url(4k-phone-background-blue-stars-in-space-o6jc5dh5iubz5h5m.jpg);
    background-size:cover;
">
  <div style="padding-bottom: 20px;
  margin-top: -40px;"
  >
  <nav class="navbar navbar-expand navbar-dark  text-light py-1">
      <div class="container">
          <a class="navbar-brand" href="#"><h1 style="color:rgb(1, 11, 21);margin-top:5px;">
              <img  src="bbcd6dab-1a47-41da-9cc2-5efe1ef84fde.jpg" alt="this is my img" style="width:60px; height:60px;margin-top:-25px;padding-right: 10px;">
              <strong style="font-family:verdara;margin-left:-20px;color:rgb(255, 255, 255);">IMZjob</h1></a>
      
                  <form class="navbar-form navbar-right">
                      <div class="form-group d-flex">
                        <li class="nav-item dropdown" style="margin-top:-10px;">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="margin-left:20px;">Dropdown</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                          </ul>
                        </li>
                        <button class="btn "  type="button">
                          <i
                          class=
                          "fi fi-br-search"
                          ></i>
                        </button>
                      </div>
                      
                    </form></div>
      <ul class="navbar-nav m-2">
          <li class="nav-item p-3" style="margin-top: 75px;" ><div class="btn " style="color:rgb(253, 250, 250)"><strong>HOME</strong></div></li>
<li class="nav-item p-3" style="margin-top:20px;" ><button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" style="background-color:rgb(43, 41, 83);color:rgb(248, 244, 244);margin-top:40px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
 <strong> ADMIN PROFILE</strong>
</button></li>
      </ul>
  </nav>



  <h1 class="ml5" style="margin-left:35%;">
    <span class="text-wrapper">
      <span class="line line1"></span>
      <span class="letters letters-left">Dash</span>
      <span class="letters ampersand">&amp;</span>
      <span class="letters letters-right">Board</span>
      <span class="line line2"></span>
    </span>
  </h1>

  <div class="offcanvas offcanvas-start text-bg-dark" id="demo">
    <div class="offcanvas-header"><img  src="computer-icons-clip-art-portable-network-graphics-system-administrator-user-png-favpng-P8LVNtfaNewQkVVxgSgqiy0Tk.jpg" alt="this is my img" style="width:60px; height:60px;padding-right: 10px;">
      <h1 class="offcanvas-title" style="margin-left:-40%;">ADMIN</h1>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body" >
    <p><button class="btn " type="button" style="color:whitesmoke;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><span><a href="membre.php" style="text-decoration: none;">DASHBOARD DES CANDIDATS</a></span></button></p>
      <p>   <button class="btn " type="button" style="color:whitesmoke;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><span>DASHBOARD DES OFFRES</span></button> </p>
    </div>
  </div>
  
 
  <div class="container-fluid mt-3">
    
    <h3 style="color:antiquewhite;text-align:center">LES RH INSCRITS A NOTRE SITE: </h3>  
<br>
  <br><br>
  <table class="table" style="color:antiquewhite;">
  <thead style="color:red;">
    <tr>
      <th>classement</th>
      <th>first name</th>
      <th>last name</th>
      <th>specialité</th>
      <th>profile</th>
      <th>description</th><th></th>
    </tr>
  </thead>  
  <tbody> 
    <?php
$recupUsers = $bdd->query('SELECT * FROM recrutteur');
while($user = $recupUsers->fetch()){
  ?>

<tr>
      <th scope="row"><?= $user['id']; ?></th>
      <td><?= $user['nom']; ?></td>
      <td><?= $user['prenom']; ?></td>
      
        <td><?= $user['nomEnt']; ?></td>
         <td ><?= $user['email']; ?>
         <td><?= $user['description']; ?></td><td><a href="banir.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">BM</a></td>
    </tr>

<?php
  }
?>
<tr>
<form method="POST" action="">
      <th><input type="text" name="id" style="width:30px;" ></th>

        <td><input type="text" name="nom" style="width:70px;">
</input></td>
        <td><input type="text" name="prenom" style="width:70px;">
</input></td>
        
          <td><input type="text" name="email" style="width:70px;">
</input></td>
           <td><input type="text" name="nomEnt" style="width:70px;"></input></td>
           <td><input type="text" name="description" style="width:200px;">
</input></td>
           <td><input type="submit" name="envoi" style="width:60px;margin-left:-20px;" value="add" class="btn btn-outline-primary"></td>
</tr> </table>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="admin.js"></script>
  </body>
</html>