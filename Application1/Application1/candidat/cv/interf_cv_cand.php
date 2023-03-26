<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!isset($_SESSION['user_idcnd'])){

  header('Location: ..\..\login\index.html');

}else{


  $id_candidat = $_SESSION["user_idcnd"];


  // Connect to the database
  $pdo = new PDO('mysql:host=localhost;dbname=kimz', 'root', '');

  // Retrieve the offer data
  $sql="SELECT Titre, Type, Description, Entreprise, Email_entreprise FROM offres";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);

  



  }
  
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style_cv1.css">
    <title>conx</title>
</head>
<body style="background-color: rgb(95, 92, 92);">
  <!-- navbar1-->
    <div>
    <!-- navbar2-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../Acceuil/index.php">Kimz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">bienvenue a Kimz</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="interf_cv_cand.php">Home</a>
              </li>
              <li class="nav-item">
                  <a  id="X" href="#" class="nav-link" data-bs-target="#exampleModal" data-bs-toggle="modal">  <span class="glyphicon glyphicon-user"  aria-hidden="true"></span> Message</a>
                </li>
                
                
                <div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" >
                    <div class="modal-content" style="border: 4px rgb(85, 140, 192) groove; border-radius: 30px; margin: 60px 20px 0px 20px; background-color: rgb(194, 231, 231);">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-target="#exampleModal" name="message"  id="liveToastBtn">Send message</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <li class="nav-item">
                  <a id="X" class="nav-link " href="deconnecter.php">Déconnexion</a>
                </li>
            </ul>
            
          </div>
        </div>
      </div>
    </nav>
    
    <!-- card-->
    <div class="row justify-content-center" style="margin-top:5rem">
      <div class="col-sm-6 col-md-5 col-lg-5 ">
        <div class="card" id="card_btn">
          <div class="card-body">
              <img src="for-work.svg" alt="" style="width: 100%; height: 350px;">
            <h5 style="text-align: center; font-size: 30px; margin-top: 44px;" class="card-title"   id="text_colo" >Recherche des offres d'emploi</h5>
            <p class="card-text"> </p>
            <div class="row justify-content-center"> <a href="../offre/offre.php" class="btn btn-outline-light " style=" width: 15rem; background-color: black ">Voir les offres</a></div>

          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-5 col-lg-5 ">
        <div class="card" id="card_btn">
          <div class="card-body">
              <img src="illus-templatepage.svg" alt="" style="width: 100%; height: 350px;">
            <h5 style="text-align: center; font-size: 30px;" class="card-title " id="text_colo">Partager votre CV </h5>
            <p style="text-align: center;" class="card-text mb-2" id="text_colo" >Permettez aux recruteurs de vours trouver</p>
           <div class="row justify-content-center"> 
                <a href="./upload_cv/upload.php" class="btn btn-outline-light " style=" width: 15rem; background-color: black">Télécharger votre CV</a>
            
           <!-- <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" >
              <form methode="POST" action="files/main.php" enctype="multipart/form-data">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel" >Téléchargez votre CV</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">PARTAGEZ VOTRE CV
                        ET RETROUVEZ NOS OFFRES D'EMPLOI
                        PERSONNALISÉES</label>
                      <input class="form-control" type="file" name="fichier" id="formFile">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button  class="btn btn-primary" data-bs-target="#exampleModal" type="submit">Submit</button >
                  </div>
                </div>
              </form>
            </div>-->
          </div> 
            
          </div>
          <div style="margin-top: -12px" class="row justify-content-center">  <a href="../formulaire/formulaire_cv_index.php" class="btn btn-outline-light" style="margin-top: 1rem; margin-bottom:1rem; width: 15rem; background-color: black;">Remplir formulaire </a> </div>
          </div>
        </div>
      </div>
    </div>
      
    

    
    

    <!-- description-->
  <div class="div_avant"> <h1 class="avant"> <em>LES AVANTAGES EMPLOYÉS</em> </h1> </div>
  
    
  <div class="card mb-3" style="max-width: 100%; background-color: rgb(95, 92, 92); margin-top: 3rem;">
    <div class="row g-0">
      <div class="col-md-6">
        <img src="it-department-chalk-white-icon-on-black-background-vector-35858621.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h1 class="card-title">1er acteur digital français du recrutement de l’emploi et de la formation</h1>
          <h3 class="card-text">    Kimz crée des services digitaux pour accompagner tous les actifs, tout au long de leur vie professionnelle et mettre en relation toujours plus de candidats avec les recruteurs, employeurs et écoles.
          </h3>        
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 100%; background-color: rgb(95, 92, 92);">
    <div class="row g-0">
      
      <div class="col-md-6">
        <div class="card-body">
          <h1 class="card-title">Capacité d’innovation</h1>
          <h3 class="card-text">                Avec plus de 100 experts produit (data, UX designer, devs, etc.), Kimz possède la plus grande équipe technique de France dans le domaine RH. Une vraie force qui nous donne une capacité d’innovation unique sur le marché.</h3>        
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="col-md-6">
        <img src="event-manager-chalk-white-icon-on-black-background-vector-32173938.jpg" class="img-fluid rounded-start" alt="...">
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 100%; background-color: rgb(95, 92, 92);">
    <div class="row g-0">
      <div class="col-md-6">
        <img src="it-department-chalk-white-icon-on-black-background-vector-35858621.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h1 class="card-title" >Continuer à apprendre</h1>
          <h3 class="card-text" >                                Pour être expert dans son domaine, on ne doit pas se reposer sur ces acquis. Kimz accompagne chacun de ses collaborateurs dans leur montée en compétence avec en moyenne 10 heures de formations par collaborateur chaque année.
          </h3>        
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>


  <!-- contact-->
  

<!-- navbar3-->
<footer style="background-color: #333;  color: #fff;  text-align: center;  padding: 1rem; margin-top:5rem;">

      <h2>CONTACTEZ-NOUS:</h2>

      <div class="card mb-3" style="max-width: 100%; background-color: rgb(95, 92, 92); margin-top: 3rem;">
        <div class="row g-0">
          
          <div class="col-md-3">
            <div class="card-body">
              <h1 class="card-title">EMPLACEMENT </h1>
              <h3 style="margin-top: 2rem;"> Fst Settat Amphi 5 </h3>
              <h3 class="card-text  " style="margin-top: 10rem;">    SUIVEZ NOUS
              </h3>     
              <div style="margin-top: 1rem;"> 
                <img src="ytpImg.png" alt="" >
                <img src="instImg.png" alt="">
                <img src="facImg.png" alt="">
              </div>   
                        </div>
          </div>

          <div class="col-md-8">
            <div class="card-body">
              
              <h1 class="card-title"> Contact nous  </h1>
              <h3 class="card-text">    Pour toutes questions ou besoin d'informations, n'hésitez pas à nous contacter
              </h3>  
              
              <div class="row justify-content-center">
                <div style="margin-top: 1rem;" class="col-lg-3"> 
                  <img src="e-mail_318-406827.avif" alt="" style="width: 5rem;" >
                  <p>Kimz_job@gmail.com</p>
                  <p>contactKimz@gmail.com</p>
  
                </div> 
                <div style="margin-top: 1rem;" class="col-lg-3"> 
                  <img src="tel-phone-icon-5.png" alt="" style="width: 5rem;" >
                  <p>+212 657-567-999</p>
                  <p>+212 332-785-000</p>
  
                </div>  

              </div>
               


              
            </div>
          </div>

          
        </div>
      </div>

      <p style="margin-top: 5rem;">Made by Kimz &copy; </p> 
</footer>



      <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
      <script type="importmap">
      {
        "imports": {
          "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js",
          "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.esm.min.js"
        }
      }
      </script>
      <script type="module">
        import * as bootstrap from 'bootstrap'
  
        new bootstrap.Popover(document.getElementById('popoverButton'))
      </script>
</body>
</html>