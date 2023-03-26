<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_idcnd'])){

  header('Location: ..\..\login\index.html');

}else{

    function updateScore() {
        global $score; // Accéder à la variable $score définie en dehors de la fonction
        $score += 1; // Ajouter 1 au score à chaque clic d'ajout
    }

    include_once('conx_php_kimz.php');
	// initialize variables
    // Initialiser le score à 0
   
     
	
	$adressec = "";
	$idprofil = 0;
    $idcnd = 0;
    $nomc = "";
    $emailc = "";
    $telec = "";
	$update = false;
	if(isset($_POST['save1'])) {  
		
		$adressec = $_POST['adressec'];
        $nomc = $_POST['nomc'];
        $emailc = $_POST['emailc'];
        $telec = $_POST['telec'];
        if(!empty($adressec) and !empty($nomc) and !empty($emailc) and !empty($telec))
        {
            $idcnd = $_SESSION['user_idcnd'];
        $sql = "INSERT INTO `profil` ( `adressec`, `nomc` , `emailc` , `telec` , `idcnd`) VALUES ( '$adressec' , '$nomc' , '$emailc' , '$telec'  , '$idcnd' )";
        updateScore();
       
        try{
            $sth = $cnx->query($sql);
            if($sth)
            {
                echo "<br> table bien crée !";
            }
           
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = ""; 
        }
        else
        {
            $_SESSION['msgErreur'] = "Erreur ! Name and Adresse sont obligatoires !"; 

        }

        
		header('location: formulaire_cv_index.php');
        
	}
    

    $annee = "";
	$idexp = 0;
    $idcnd = 0;
    $annee_fin = "";
    $détails  = "";
    $entreprise = "";
    $mois  = "";
    $mois_fin = "";
    $poste = "";
    $lieu = "";
	$update = false;
     
	if(isset($_POST['save2'])) {  
		
		$annee = $_POST['annee'];
        $lieu = $_POST['lieu'];
        $annee_fin = $_POST['annee_fin'];
        $détails = $_POST['détails'];
        $entreprise = $_POST['entreprise'];
        $mois = $_POST['mois'];
        $mois_fin = $_POST['mois_fin'];
        $poste = $_POST['poste'];
        if( !empty($annee) and !empty($annee) and !empty($annee_fin) and !empty($détails) and !empty($entreprise) and !empty($mois) and !empty($mois_fin) and !empty($poste))
        {$idcnd = $_SESSION['user_idcnd'];
        $sql = "INSERT INTO `experiences` ( `annee`, `annee-fin` , `détails` , `entreprise` , `mois` , `mois-fin` , `poste` , `lieu` , `idcnd`) VALUES ( '$annee' , '$annee_fin' , '$détails' , '$entreprise' , '$mois' , '$mois_fin' , '$poste'  , '$lieu' ,'$idcnd' )";
       
        try{
            $sth = $cnx->query($sql);
            if($sth)
            {
                echo "<br> table bien crée !";
            }
           
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = ""; 
        }
        else
        {
            $_SESSION['msgErreur'] = "Erreur ! Name and Adresse sont obligatoires !"; 

        }
		header('location: formulaire_cv_index.php');
        

	}


    $annee_fin_form = "";
    $annee_formation  = "";
    $idcnd=0;
    $idfor=0;
    $diplome = "";
    $détails_diplome  = "";
    $ecole = "";
    $lieu_diplome  ="";
    $mois_formation = "";
    $mois_fin_form  = "";
	$update = false;
     
	if(isset($_POST['save3'])) {  
		
		$annee_fin_form = $_POST['annee_fin_form'];
        $annee_formation = $_POST['annee_formation'];
        $diplome = $_POST['diplome'];
        $ecole = $_POST['ecole'];
        $détails_diplome = $_POST['détails_diplome'];
        $lieu_diplome = $_POST['lieu_diplome'];
        $mois_formation = $_POST['mois_formation'];
        $mois_fin_form = $_POST['mois_fin_form'];
        if( !empty($annee_fin_form) and !empty($annee_formation) and !empty($diplome) and !empty($ecole) and !empty($détails_diplome) and !empty($lieu_diplome) and !empty($mois_formation)  and !empty($mois_fin_form))
        {
            $idcnd = $_SESSION['user_idcnd'];
        $sql = "INSERT INTO `formation` ( `annee-fin-form`, `annee-formation`  , `ecole` , `détails-diplome` , `diplome` , `lieu_diplome` , `mois-formation` , `mois-fin-form` , `idcnd`) VALUES ( '$annee_fin_form' , '$annee_formation'  , '$ecole' , '$détails_diplome' , '$diplome' , '$lieu_diplome'  , '$mois_formation'  , '$mois_fin_form' , '$idcnd' )";
       
        try{
            $sth = $cnx->query($sql);
            if($sth)
            {
                echo "<br> table bien crée !";
            }
           
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = ""; 
        }
        else
        {
            $_SESSION['msgErreur'] = "Erreur ! Name and Adresse sont obligatoires !"; 

        }
		header('location: formulaire_cv_index.php');
        

	}

    $langue = "";
    $idcnd=0;
    $idlang=0;
    $détails_langue  = "";
	$update = false;
     
	if(isset($_POST['save5'])) {  
		
		$langue = $_POST['langue'];
        $détails_langue = $_POST['détails_langue'];
       
        if( !empty($détails_langue) and !empty($langue) )
        {
            $idcnd = $_SESSION['user_idcnd'];
        $sql = "INSERT INTO `langues` ( `langue`, `détails-langue` , `idcnd` ) VALUES ( '$langue' , '$détails_langue'  , '$idcnd'  )";
       
        try{
            $sth = $cnx->query($sql);
            if($sth)
            {
                echo "<br> table bien crée !";
            }
           
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = ""; 
        }
        else
        {
            $_SESSION['msgErreur'] = "Erreur ! Name and Adresse sont obligatoires !"; 

        }
		header('location: formulaire_cv_index.php');
        

	}

    $loisir = "";
    $idcnd=0;
    $idlois =0;
    $détails_loisir   = "";
	$update = false;
     
	if(isset($_POST['save6'])) {  
		
		$loisir = $_POST['loisir'];
        $détails_loisir = $_POST['détails_loisir'];
       
        if( !empty($détails_loisir) and !empty($loisir) )
        {
            $idcnd = $_SESSION['user_idcnd'];
        $sql = "INSERT INTO `loisirs` ( `loisir`, `détails-loisirs` , `idcnd` ) VALUES ( '$loisir' , '$détails_loisir' , '$idcnd'  )";
       
        try{
            $sth = $cnx->query($sql);
            if($sth)
            {
                echo "<br> table bien crée !";
            }
           
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = ""; 
        }
        else
        {
            $_SESSION['msgErreur'] = "Erreur ! Name and Adresse sont obligatoires !"; 

        }
		header('location: formulaire_cv_index.php');
        

	}

    //calcul de score
    if(isset($_POST['save'])){
        $idcnd = $_SESSION['user_idcnd'];

        // calcul de score pour chaque formation ona 4 points
        $sql="SELECT COUNT(*) FROM formation WHERE idcnd=:idcnd";
        $stmt = $cnx->prepare($sql);
        $stmt->bindParam(':idcnd', $idcnd);
        $stmt->execute();
        $nb_soumissions2 = $stmt->fetchColumn()*4;


         // calcul de score pour chaque competence ona 3 points
         $sql="SELECT COUNT(*) FROM competence WHERE idcnd=:idcnd";
         $stmt = $cnx->prepare($sql);
         $stmt->bindParam(':idcnd', $idcnd);
         $stmt->execute();
         $nb_soumissions3 = $stmt->fetchColumn()*3;

         // calcul de score pour chaque langue ona 2 points
         $sql="SELECT COUNT(*) FROM langues WHERE idcnd=:idcnd";
         $stmt = $cnx->prepare($sql);
         $stmt->bindParam(':idcnd', $idcnd);
         $stmt->execute();
         $nb_soumissions4 = $stmt->fetchColumn()*2;

         // calcil de score experience
         $sql="SELECT COUNT(*) FROM experiences WHERE idcnd=:idcnd";
         $stmt = $cnx->prepare($sql);
         $stmt->bindParam(':idcnd', $idcnd);
         $stmt->execute();
         $nb_soumissions1 = $stmt->fetchColumn()*5;

     // Sélectionner les données de la colonne dans la première table
     $nb_soumissions=$nb_soumissions1+$nb_soumissions2+$nb_soumissions3+$nb_soumissions4;
     $sql = "update candidats set Score=:nb_soumissions where id=:idcnd";
     $stmt=$cnx->prepare($sql);
     $stmt->bindParam(":nb_soumissions", $nb_soumissions);
     $stmt->bindParam(":idcnd", $idcnd);
     $stmt->execute();
     
     

     header('location: formulaire_cv_index.php');

     
    }
    
       
    

}
   
    
   /*if (isset($_POST['update'])) {
       $adressec = $_POST['adresse'];
        $nomc = $_POST['nomc'];
        $emailc = $_POST['emailc'];
        $telec = $_POST['telec'];



        


        $adressec = $_POST['adresse'];
        $nomc = $_POST['nomc'];
        $emailc = $_POST['emailc'];
        $telec = $_POST['telec'];
        $sql = "UPDATE profil SET  adressec='$adressec' ,emailc='$emailc', nomc='$nomc', telec='$telec', WHERE idprofil=$idprofil";
       
        try{
            $sth = $cnx->query($sql);
                   
        }catch(PDOEXception $e){
            $error_cnx = $e->getMessage();
            echo "<br><br>".$error_cnx;
            exit();
        }
 	 
		$_SESSION['message'] = "Adresse modifiée !"; 
		header('location: formulaire_cv_index.php');
    }


    if (isset($_GET['del'])) {
        $idcand = $_GET['del'];
        $sql =  "DELETE FROM profil WHERE idprofil=$idprofil";
        $sth = $cnx->query($sql);
        $_SESSION['message'] = "Adresse supprimée!"; 
        header('location: formulaire_cv_index.php');
    }*/

    

?>