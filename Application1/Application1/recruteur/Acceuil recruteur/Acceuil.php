<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_id'])){

  header('Location: ..\..\login\index.html');

}else{

  $id = $_SESSION['user_id'];

  $domaine = "";
  $profil = "";

  $result = array();

  if(isset($_POST['search'])){

    require 'connectDB.php';

    $domaine=$_POST['domaine'];
    $profil =$_POST['profil'];


    if($domaine=="All" && $profil=="All") {

        $sql = "select id, nom, prenom, Domaine, Profil, Score, CV from candidats order by Score DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } elseif($domaine=="All") {

        $sql = "select id, nom, prenom, Domaine, Profil, Score, CV from candidats where Profil = :Profil order by Score DESC";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':Profil', $profil);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } elseif($profil=="All") {

        $sql = "select id, nom, prenom, Domaine, Profil, Score, CV from candidats where Domaine = :Domaine order by Score DESC";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':Domaine', $domaine);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } else {

        $sql = "select id, nom, prenom, Domaine, Profil, Score, CV from candidats where Domaine = :Domaine and Profil = :Profil order by Score DESC";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Domaine', $domaine);
    $stmt->bindParam(':Profil', $profil);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    

}





?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruteur | Webpage</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body >
<div style="background-color: rgb(95, 92, 92);">
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
                <a class="nav-link active" aria-current="page" href=".\Acceuil.php">Home</a>
                </li><li class="nav-item">
                <a class="nav-link active" aria-current="page" href="..\publier une offre\poster.php">Publier</a>
              </li>
              </li><li class="nav-item">
                <a class="nav-link active" aria-current="page" href="..\voir les annonces\index.php">Mes Annonces</a>
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
                  <a id="X" class="nav-link " href=".\deconnecter.php">Déconnexion</a>
                </li>
            </ul>
            
          </div>
        </div>
      </div>
</nav>

    <main style="background-color: #f5f5f5;">
        <section id="dashboard">
            <h2>Cherchez vos futures employés</h2>
            <div style="border-top: 1px solid black; padding: 12px 0;"></div>
        <form method="POST">
            <div class="filters">
              <label style="font-size: 27px;" class="lab" for="domaine">Domaine :</label>
              <select style="background-color: lightblue;" name="domaine" id="domaine">
                <option value="All">All</option>
                <option value="Software Engineer" <?php if($domaine == "Software Engineer") echo "selected"; ?> >Software Engineer</option>
                <option value="Data Scientist" <?php if($domaine == "Data Scientist") echo "selected"; ?> >Data Scientist</option>
                <option value="Project Manager" <?php if($domaine == "Project Manager") echo "selected"; ?> >Project Manager</option>
                <option value="UX Designer" <?php if($domaine == "UX Designer") echo "selected"; ?> >UX Designer</option>
                <option value="Web Developer" <?php if($domaine == "Web Developer") echo "selected"; ?> >Web Developer</option>
              </select>
              <label style="margin-left: 19px; font-size: 27px;" for="profil">Profil :</label>
              <select style="background-color: lightblue;" name="profil" id="profil">
                <option value="All">All</option>
                <option value="Technicien" <?php if($profil == "Technicien") echo "selected"; ?> >Technicien</option>
                <option value="Injénieur" <?php if($profil == "Injénieur") echo "selected"; ?> >Ingénieur</option>
              </select>
              <div class="input-field">
                <button style="border-radius: 12px; " type="submit" name="search" class="btn btn-outline-dark" >Search</button>
              </div>
            </div>

            <table bgcolor="#FFEBB7">

              <thead bgcolor="black">
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Domaine</th>
                  <th>Profil</th>
                  <th>Score</th>
                  <th>CV</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                foreach ($result as $row){
                    echo "<tr>";
                    echo "<td>".$row['nom'];echo "</td>";
                    echo "<td>".$row['prenom'];echo "</td>";
                    echo "<td>".$row['Domaine'];echo "</td>";
                    echo "<td>".$row['Profil'];echo "</td>";
                    echo "<td>".$row['Score'];echo "</td>";
                    if($row['CV'] != ""){
                    echo "<td>".'<a target="_blank" href="'.$row['CV'].'">CV</a>';echo "</td>";}
                    echo "</tr>";
                }
                ?>
                </tbody>

            </table>

        </form>
        
          </section>

      <section id="candidate-profile">
       
        <!-- Insert candidate profile code here -->
      </section>
    </main>
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
          <img src="../../candidat/cv/ytpImg.png" alt="" >
          <img src="../../candidat/cv/instImg.png" alt="">
          <img src="../../candidat/cv/facImg.png" alt="">
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
            <img src="../../candidat/cv/e-mail_318-406827.avif" alt="" style="width: 5rem;" >
            <p>Kimz_job@gmail.com</p>
            <p>contactKimz@gmail.com</p> 
          </div> 
          <div style="margin-top: 1rem;" class="col-lg-3"> 
            <img src="../../candidat/cv/tel-phone-icon-5.png" alt="" style="width: 5rem;" >
            <p>+212 657-567-999</p>
            <p>+212 332-785-000</p>  
          </div>  
        </div> 
      </div>
    </div>
  </div>
</div>

<p style="margin-top: 5rem;">Made by Kimz &copy; 2023 Recruiter Webpage</p> 
</footer>

</div>
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