<?php

session_start();

if(isset($_POST['valider'])) {
    if( isset($_POST['person']) AND isset($_POST['Firstname']) AND isset($_POST['Lastname']) AND isset($_POST['Email']) AND isset($_POST['Password'])) {
        if(!empty($_POST['person']) AND !empty($_POST['Firstname']) AND !empty($_POST['Lastname']) AND !empty($_POST['Email']) AND !empty($_POST['Password'])) {

            $type=$_POST['person'];
            $nom=htmlspecialchars($_POST['Lastname']);
            $prenom=htmlspecialchars($_POST['Firstname']);
            $email=htmlspecialchars($_POST['Email']);
            $password=htmlspecialchars($_POST['Password']);

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

            if($type=="candidat"){

                
                $sql = "insert into candidats (prenom, nom, email, password) values (:prenom, :nom, :email,:password) ";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();

                // echo "le candidat <mark><b>$prenom $nom</b></mark>, a été ajoutée avec succés !";
                $_SESSION['emaill']=$email;
                $_SESSION['psword']=$password;


                header('Location: .\inscrip_candidat\index.html');

            }
            else{

                $sql = "insert into recruteurs (prenom, nom, email, password) values (:prenom, :nom, :email,:password) ";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();

                // echo "le recruteur <mark><b>$prenom $nom</b></mark>, a été ajoutée avec succés !";

                header('Location: ..\login\index.html');
            }

        }
    }
}


?>