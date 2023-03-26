<?php

session_start();

if(isset($_POST['valider'])){

if(isset($_POST['person']) AND isset($_POST['Email']) AND isset($_POST['Password'])) {
    if(!empty($_POST['person']) AND !empty($_POST['Email']) AND !empty($_POST['Password'])){
        
        $type=$_POST['person'];
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

        //requete pour selectionner l'utilisateur
        if($type=="candidat"){

            $sql="select id from candidats where email=:email and password=:password ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $id = $stmt->fetchColumn();

            echo $id;
            if($id){

                $_SESSION['user_idcnd'] = $id;

                header("Location: ..\candidat\cv\interf_cv_cand.php");
            }else{
                echo "Adresse Mail ou Password incorrects!";
            }
        }else{
            $sql="select id from recruteurs where email=:email and password=:password ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $id = $stmt->fetchColumn();
            
            if($id){

                $_SESSION['user_id'] = $id;

                header('Location: ..\recruteur\Acceuil recruteur\Acceuil.php');

            }else{
                echo "Adresse Mail ou Password incorrects!";
            }
        }

    }
}
else{
    echo "veuillez remplir tous les champs !";
}

}



?>