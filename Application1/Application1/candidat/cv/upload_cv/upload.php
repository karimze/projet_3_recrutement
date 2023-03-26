<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_idcnd'])){

  header('Location: ..\..\..\login\index.html');

}else{

require('ConnectDB.php');

if(isset($_POST['valider'])){
      if(!empty($_FILES)){

        $file_name = $_FILES['fichier']['name'];
        $file_extension = strrchr($file_name, ".");

        $extensions_autorisées = array('.pdf', '.PDF');

        $file_tmp_name = $_FILES['fichier']['tmp_name'];
        $file_dest = '../files/' . $file_name;

        if(in_array($file_extension, $extensions_autorisées)){
          if(move_uploaded_file($file_tmp_name, $file_dest)){
            if($_FILES['fichier']['error'] == 0){

              
              $id = $_SESSION['user_idcnd'];

              $sql = "update candidats set CV = ? where id = ?";

              $file_dest_pro = '../../candidat/cv/files/'.$file_name;

              $stmt=$conn->prepare($sql);
              $stmt->execute(array($file_dest_pro, $id));

              header('Location: success.html');
            }
          }
        }else{
          echo "seul les fichiers PDF sont autorisées";
        }
      }
    }
  



    
    
    







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        header {
          background-color: #333;
          color: #fff;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 1rem;
          width: 100%;
          position: fixed;
          top: 0;
        }
    </style>
    <title>Post | Job Offer</title>
</head>
<body>
    <header>
    <a class="navbar-brand" style="color:#fff;" href="../../../Acceuil/index.php">Kimz</a>
        <nav>
          <ul>
            <li><a href="..\interf_cv_cand.php">Acceuil</a></li>
            <li><a href=".\deconnecter.php">Déconnexion</a></li>
          </ul>
        </nav>
      </header>
    <div style="background-color: #FFEBB7;" class="container">
        <h1>Upload your CV</h1>
        <form method="POST" enctype="multipart/form-data">
            <!--nom_du_cv-->
            <label for="cv-title">Name:</label>
            <input type="text" id="job-title" name="cv-title" required>
            <!--upload-->
            <input name="fichier" style="margin-bottom: 25px;" class="form-control form-control-lg" id="formFileLg" type="file">
            <!--submit-->
            <input style="font-size: 20px;  background-color:  #333;"  type="submit" name="valider" value="envoyer">

        </form>
    </div>
</body>
</html>

<?php } ?>
