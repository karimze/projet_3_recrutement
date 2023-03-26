<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_idcnd'])){

  header('Location: ..\..\login\index.html');

}else{

$id = $_SESSION["user_idcnd"];


// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=kimz', 'root', '');

// Retrieve the offer data
$sql="SELECT Titre, Type, Description, Entreprise, Email_entreprise FROM offres";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$offers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f3f8;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        
        .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        #style_card {
        width: 500px;
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        background-color: #FFEBB7;
        color: #333;
        transition: all 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        }

        #style_card h3, #style_card h5, #style_card h6, #style_card p, #style_card a {
        font-size: 18px;
        line-height: 1.5;
        }

        #style_card h3 {
        font-size: 44px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        #style_card h5, #style_card h6 {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        #style_card p {
        padding: 10px;
        border-radius: 5px;
        background-color: #FFEBB7;
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 20px;
        }

        #card-body {
            flex-grow: 1;
            padding: 20px;
        }


    </style>
    <title>Les offres</title>
</head>
<body style="background-color: rgb(95, 92, 92);">
    

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
                <a class="nav-link active" aria-current="page" href="../cv/interf_cv_cand.php">Home</a>
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


   
<!-- card offre-->
     <div class="container" style="margin-top: 5rem; ">
        <?php foreach ($offers as $offer): ?>
            <div class="card" id="style_card">
                <div class="card-body" id="card-body">
                    <div style="background-color: #FFEBB7 ; 10px; text-align: center;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><h3 class="card-title">Offre : <?= $offer['Titre'] ?></h3></div>
                    <div style="background-color: #FFEBB7; text-align: center;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><h5 class="card-title">Type : <?= $offer['Type'] ?></h5></div>
                    <p class="card-text"><strong style="text-align: center;">Description</strong> : <br><?= $offer['Description']?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<!-- navbar3-->
<footer style="background-color: #333;  color: #fff;  text-align: center;  padding: 1rem; margin-top:5rem;">

      <h2>CONTACTEZ-NOUS:</h2>

      <div class="card mb-3" style="max-width: 100%; background-color: rgb(95, 92, 92); margin-top: 3rem;">
        <div class="row g-0">
          
          <div class="col-md-3">
            <div class="card-body">
              <h2 class="card-title">EMPLACEMENT </h2>
              <h3 style="margin-top: 2rem;"> Fst Settat Amphi 5 </h3>
              <h3 class="card-text  " style="margin-top: 10rem;">    SUIVEZ NOUS
              </h3>     
              <div style="margin-top: 1rem;"> 
                <img src="../cv/ytpImg.png" alt="" >
                <img src="../cv/instImg.png" alt="">
                <img src="../cv/facImg.png" alt="">
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
                  <img src="../cv/e-mail_318-406827.avif" alt="" style="width: 5rem;" >
                  <p>Kimz_job@gmail.com</p>
                  <p>contactKimz@gmail.com</p> 
                </div> 
                <div style="margin-top: 1rem;" class="col-lg-3"> 
                  <img src="../cv/tel-phone-icon-5.png" alt="" style="width: 5rem;" >
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

<?php } ?>