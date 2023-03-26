<?php

session_start();

if(isset($_POST['valider'])) {
    if( isset($_POST['domaine']) AND isset($_POST['profil']) ) {
        if(!empty($_POST['domaine']) AND !empty($_POST['profil']) ) {


          $email=$_SESSION['emaill'];
          $password=$_SESSION['psword'];

            $domaine=$_POST['domaine'];
            $profil=$_POST['profil'];

            $servername = "localhost";
            $DB="kimz";
            $username = "root";
            $pass = "";

            $dsn = "mysql:host=$servername;dbname=$DB";
 
            try {
                  $conn = new PDO($dsn, $username, $pass);
                  // set the PDO error mode to exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                } catch(PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();

                }
                
                $sql = "update candidats set Domaine=:domaine, Profil=:profil where email = :email and password = :password";
                $stmt=$conn->prepare($sql);
                $stmt->bindParam(":domaine", $domaine);
                $stmt->bindParam(":profil", $profil);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":password", $password);
                $stmt->execute();

                // echo "le candidat <mark><b>$prenom $nom</b></mark>, a été ajoutée avec succés !";


                

                header('Location: ..\..\login\index.html');

        }
    }
}


?>