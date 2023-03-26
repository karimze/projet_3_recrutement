


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="formulaire_cand_css.css">
    <title>formulaire</title>
<style>
  
.divPrinc{
    margin-top: 3rem;
    background-color: rgb(95, 92, 92);
}
#cardstyl{
    margin-top: 2rem;
    background-color:  #333;
     border-radius: 30px; 
     
    
}
#butprinc{
    width: 30%;
    
  
}
body{
        background-color: rgb(95, 92, 92);
      }

      #label-in{
  color: #faf8f8;
}

</style>

</head>
<body >


    
     <!-- navbar1-->
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
                <a  id="X" class="nav-link" href="#cardstyl">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="#cardstyl1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Expériences</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="#cardstyl2">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Formation</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="#cardstyl3">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Competence</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="#cardstyl4">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Langues</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="#cardstyl5">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Loisirs</a>
              </li>

                <li class="nav-item">
                  <a id="X" class="nav-link " href="deconnecter.php">Déconnexion</a>
                </li>
            </ul>
            
          </div>
        </div>
      </div>
    </nav>

       <!-- formulaire-->
<div class="divPrinc" >     
<!-- card1 les information de cand-->
        <div class="container">
            <div class="row justify-content-center" >
              <div class="col-md-6">
                <div class="card" id="cardstyl"  class="border border-0">
                  <div class="card-body">
                    <h4 class="card-title text-center mb-4"  id="label-in">Profil</h4>
                    
                    <form action="server_formulaire_cv_profil1.php" method="post">
                    <input type="hidden" name="idprofil" >  
                    <input type="hidden" name="idcnd" >
                      <div class="mb-3" >
                        <label for="inputNom" id="label-in" class="form-label">Nom complet</label>
                        <input type="text" name="nomc"  class="form-control" id="input-labl" placeholder="Johnson peter" required>
                      </div>
                      <div class="mb-3">
                        <label for="inputAdresse" id="label-in" class="form-label">Adresse</label>
                        <input type="text" name="adressec"  class="form-control" id="input-labl" placeholder="Entrez votre adresse" required>
                      </div>
                      <div class="mb-3">
                        <label for="tele" id="label-in" class="form-label">Téléphone</label>
                        <input type="tel" name="telec"  class="form-control" id="input-labl" placeholder="0675432355"  required>
                      </div>
                      <div class="mb-3">
                        <label for="tele" id="label-in" class="form-label">Email</label>
                        <input type="email" name="emailc"  class="form-control" id="input-labl" placeholder="peter8@gmail.com"  required>
                      </div>
                      
                      <div class="d-grid gap-2" style="justify-content: center;">
                        <button id="butn_env" class="btn btn-outline-dark" name="save1" ><a style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
                      </div>
                     

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

<!-- card2 l'exper de cand-->
          <div class="container">
            <div class="row justify-content-center" >
              <div class="col-md-6">
                <div class="card" id="cardstyl" style="margin-top: 2rem; background-color:  #333;  " class="border border-0">
                  <div class="card-body" id="cardstyl1">
                    <h4 class="card-title text-center mb-4" id="label-in">Expériences</h4>
                    
                    <form action="server_formulaire_cv_profil1.php" method="post" >
                    <input type ="hidden" name="idexp" >  
                      <div class="mb-3">
                       <div> <label for="inputAdresse" id="label-in" class="form-label">Date de début</label> </div>
                       <div>
                       <select name="annee"  required="" aria-required="true">
                            <option value=""> -Année -</option>
                                 <option value="2024">2024</option> 
                                 <option value="2023">2023</option>                      
                                  <option value="2022">2022</option>                       
                                  <option value="2021">2021</option>                       
                                  <option value="2020">2020</option>                       
                                  <option value="2019">2019</option>                       
                                  <option value="2018">2018</option>                       
                                  <option value="2017">2017</option>                       
                                  <option value="2016">2016</option>                       
                                  <option value="2015">2015</option>                       
                                  <option value="2014">2014</option>                       
                                  <option value="2013">2013</option>                       
                                  <option value="2012">2012</option>                       
                                  <option value="2011">2011</option>                       
                                  <option value="2010">2010</option>                       
                                  <option value="2009">2009</option>                       
                                  <option value="2008">2008</option>                       
                                  <option value="2007">2007</option>                       
                                  <option value="2006">2006</option>                       
                                  <option value="2005">2005</option>                       
                                  <option value="2004">2004</option>                       
                                  <option value="2003">2003</option>                       
                                  <option value="2002">2002</option>                      
                                 <option value="2001">2001</option>                       
                                 <option value="2000">2000</option>  
                                </select> 
                         <select name="mois" >
                             <option value="">- Mois -</option>
                                                <option value="1">Janvier</option>
                                                <option value="2">Février</option>
                                                <option value="3">Mars</option>
                                                <option value="4">Avril</option>
                                                <option value="5">Mai</option>
                                                <option value="6">Juin</option>
                                                <option value="7">Juillet</option>
                                                <option value="8">Août</option>
                                                <option value="9">Septembre</option>
                                                <option value="10">Octobre</option>
                                                <option value="11">Novembre</option>
                                                <option value="12">Décembre</option>
                                            </select>                   
                      </div>
                    </div>

                    <div class="mb-3">
                        <div> <label for="inputAdresse" id="label-in" class="form-label">Date de fin</label> </div>
                        <div>
                        <select name="annee_fin"  required="" aria-required="true">
                             <option value=""> -Année -</option>
                                  <option value="2024">2024</option> 
                                  <option value="2023">2023</option>                      
                                   <option value="2022">2022</option>                       
                                   <option value="2021">2021</option>                       
                                   <option value="2020">2020</option>                       
                                   <option value="2019">2019</option>                       
                                   <option value="2018">2018</option>                       
                                   <option value="2017">2017</option>                       
                                   <option value="2016">2016</option>                       
                                   <option value="2015">2015</option>                       
                                   <option value="2014">2014</option>                       
                                   <option value="2013">2013</option>                       
                                   <option value="2012">2012</option>                       
                                   <option value="2011">2011</option>                       
                                   <option value="2010">2010</option>                       
                                   <option value="2009">2009</option>                       
                                   <option value="2008">2008</option>                       
                                   <option value="2007">2007</option>                       
                                   <option value="2006">2006</option>                       
                                   <option value="2005">2005</option>                       
                                   <option value="2004">2004</option>                       
                                   <option value="2003">2003</option>                       
                                   <option value="2002">2002</option>                      
                                  <option value="2001">2001</option>                       
                                  <option value="2000">2000</option>  
                                 </select> 
                          <select name="mois_fin" >
                              <option value="">- Mois -</option>
                                                 <option value="1">Janvier</option>
                                                 <option value="2">Février</option>
                                                 <option value="3">Mars</option>
                                                 <option value="4">Avril</option>
                                                 <option value="5">Mai</option>
                                                 <option value="6">Juin</option>
                                                 <option value="7">Juillet</option>
                                                 <option value="8">Août</option>
                                                 <option value="9">Septembre</option>
                                                 <option value="10">Octobre</option>
                                                 <option value="11">Novembre</option>
                                                 <option value="12">Décembre</option>
                                             </select>                   
                       </div>
                     </div>

                      <div class="mb-3">
                        <label for="poste" id="label-in" class="form-label">Mission</label>
                        <input name="poste"  type="text" class="form-control" id="input-labl" placeholder="Poste"  required>
                      </div>
                      <div class="mb-3">
                        <label for="entreprise"id="label-in" class="form-label">Nom de l'entreprise</label>
                        <input name="entreprise" type="text"  class="form-control" id="input-labl" placeholder="Nom de l'entreprise"  required>
                      </div>
                      <div class="mb-3" >
                        <label for="lieu" id="label-in" class="form-label">lieu</label>
                        <input name="lieu"  type="text" class="form-control" id="input-labl" placeholder="lieu" required>
                      </div>
                      <div class="mb-3" >
                        <label for="détails" id="label-in" class="form-label">Détails</label>
                        <textarea class="form-control" name="détails"  id="input-labl"  rows="4"></textarea>
                      </div>
                      
                      <div class="d-grid gap-2" style="justify-content: center;">
                        <button id="butn_env" class="btn btn-outline-dark" name="save2" ><a  style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
                      </div>                      

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
<!-- card3 Formation de cand-->
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" id="cardstyl" style="margin-top: 2rem; background-color:  #333; " class="border border-0">
          <div class="card-body" id="cardstyl2">
            <h4 class="card-title text-center mb-4" id="label-in">Formation</h4>
            
            <form action="server_formulaire_cv_profil1.php" method="post">
            <input type="hidden" name="idfor" > 
              <div class="mb-3">
               <div> <label for="inputAdresse" id="label-in" class="form-label">Date de début</label> </div>
               <div>
               <select name="annee_formation"  required="" aria-required="true">
                    <option value=""> -Année -</option>
                         <option value="2024">2024</option> 
                         <option value="2023">2023</option>                      
                          <option value="2022">2022</option>                       
                          <option value="2021">2021</option>                       
                          <option value="2020">2020</option>                       
                          <option value="2019">2019</option>                       
                          <option value="2018">2018</option>                       
                          <option value="2017">2017</option>                       
                          <option value="2016">2016</option>                       
                          <option value="2015">2015</option>                       
                          <option value="2014">2014</option>                       
                          <option value="2013">2013</option>                       
                          <option value="2012">2012</option>                       
                          <option value="2011">2011</option>                       
                          <option value="2010">2010</option>                       
                          <option value="2009">2009</option>                       
                          <option value="2008">2008</option>                       
                          <option value="2007">2007</option>                       
                          <option value="2006">2006</option>                       
                          <option value="2005">2005</option>                       
                          <option value="2004">2004</option>                       
                          <option value="2003">2003</option>                       
                          <option value="2002">2002</option>                      
                         <option value="2001">2001</option>                       
                         <option value="2000">2000</option>  
                        </select> 
                 <select name="mois_formation" >
                     <option value="">- Mois -</option>
                                        <option value="1">Janvier</option>
                                        <option value="2">Février</option>
                                        <option value="3">Mars</option>
                                        <option value="4">Avril</option>
                                        <option value="5">Mai</option>
                                        <option value="6">Juin</option>
                                        <option value="7">Juillet</option>
                                        <option value="8">Août</option>
                                        <option value="9">Septembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Décembre</option>
                                    </select>                   
              </div>
            </div>

            <div class="mb-3">
                <div> <label for="inputAdresse" id="label-in" class="form-label">Date de fin</label> </div>
                <div>
                <select name="annee_fin_form"  required="" aria-required="true">
                     <option value=""> -Année -</option>
                          <option value="2024">2024</option> 
                          <option value="2023">2023</option>                      
                           <option value="2022">2022</option>                       
                           <option value="2021">2021</option>                       
                           <option value="2020">2020</option>                       
                           <option value="2019">2019</option>                       
                           <option value="2018">2018</option>                       
                           <option value="2017">2017</option>                       
                           <option value="2016">2016</option>                       
                           <option value="2015">2015</option>                       
                           <option value="2014">2014</option>                       
                           <option value="2013">2013</option>                       
                           <option value="2012">2012</option>                       
                           <option value="2011">2011</option>                       
                           <option value="2010">2010</option>                       
                           <option value="2009">2009</option>                       
                           <option value="2008">2008</option>                       
                           <option value="2007">2007</option>                       
                           <option value="2006">2006</option>                       
                           <option value="2005">2005</option>                       
                           <option value="2004">2004</option>                       
                           <option value="2003">2003</option>                       
                           <option value="2002">2002</option>                      
                          <option value="2001">2001</option>                       
                          <option value="2000">2000</option>  
                         </select> 
                  <select name="mois_fin_form" >
                      <option value="">- Mois -</option>
                                         <option value="1">Janvier</option>
                                         <option value="2">Février</option>
                                         <option value="3">Mars</option>
                                         <option value="4">Avril</option>
                                         <option value="5">Mai</option>
                                         <option value="6">Juin</option>
                                         <option value="7">Juillet</option>
                                         <option value="8">Août</option>
                                         <option value="9">Septembre</option>
                                         <option value="10">Octobre</option>
                                         <option value="11">Novembre</option>
                                         <option value="12">Décembre</option>
                                     </select>                   
               </div>
             </div>

              <div class="mb-3">
                <label for="diplome" id="label-in" class="form-label">Nom du diplome</label>
                <input name="diplome"  type="text" class="form-control" id="input-labl" placeholder="nom du diplome"  required>
              </div>
              <div class="mb-3">
                <label for="ecole" id="label-in" class="form-label">Nom de l'école</label>
                <input name="ecole"  type="text" class="form-control" id="input-labl" placeholder="Nom de l'école"  required>
              </div>
              <div class="mb-3" >
                <label for="lieu_diplome" id="label-in" class="form-label">lieu</label>
                <input name="lieu_diplome"  type="text" class="form-control" id="input-labl" placeholder="lieu" required>
              </div>
              <div class="mb-3" >
                <label for="détails-diplome" id="label-in" class="form-label">Détails</label>
                <textarea class="form-control"  name="détails_diplome" id="input-labl"  rows="4"></textarea>
              </div>
              
              <div class="d-grid gap-2" style="justify-content: center;">
                <button id="butn_env" class="btn btn-outline-dark" name="save3" ><a style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- card4 compétences de cand-->
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" id="cardstyl" style="margin-top: 2rem; background-color:  #333; " class="border border-0">
          <div class="card-body" id="cardstyl3">
            <h4 class="card-title text-center mb-4" id="label-in">Compétence</h4>
            
            <form action="server_formulaire_cv_profil1.php" method="post">
            <input type="hidden" name="idcomp" value="<?php echo $idcomp; ?>">   
              <div class="mb-3">
                <label for="competence" id="label-in" class="form-label">Compétence</label>
                <input name="competence" > 
              </div>
              
              <div class="mb-3" >
                <label for="détails-competence" id="label-in" class="form-label">Détails</label>
                <textarea class="form-control"  name="détails_competence" ></textarea>
              </div>
              
              <div class="d-grid gap-2" style="justify-content: center;">
                <button id="butn_env" class="btn btn-outline-dark" name="save4"><a  style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- card4 langues de cand--> 
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" id="cardstyl" style="margin-top: 2rem; background-color:  #333;" class="border border-0">
          <div class="card-body" id="cardstyl4">
            <h4 class="card-title text-center mb-4" id="label-in">langues</h4>
            
            <form action="server_formulaire_cv_profil1.php" method="post">
            <input type="hidden" name="idlang" >
            <input type="hidden" name="idcnd" >
              <div class="mb-3">
                <label for="langue" id="label-in" class="form-label">langues</label>
                <input name="langue"  type="text" class="form-control" id="input-labl"placeholder="Langue"  required>
              </div>
              
              <div class="mb-3" >
                <label for="détails_langue" id="label-in" class="form-label">Détails</label>
                <textarea class="form-control" name="détails_langue"  id="input-labl"  placeholder="Détails" rows="4"></textarea>
              </div>
              
              <div class="d-grid gap-2" style="justify-content: center;">
                <button id="butn_env" class="btn btn-outline-dark" name="save5"><a style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- card4 loisirs de cand--> 
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" id="cardstyl" style="margin-top: 2rem; background-color:  #333; " class="border border-0">
          <div class="card-body" id="cardstyl5">
            <h4 class="card-title text-center mb-4" id="label-in">Loisirs</h4>
            
            <form action="server_formulaire_cv_profil1.php" method="post">
            <input type="hidden" name="idlois" value="<?php echo $idlois; ?>">
            <input type="hidden" name="idcnd" value="<?php echo $idcnd; ?>">
              <div class="mb-3">
                <label for="langue" id="label-in" class="form-label">loisirs</label>
                <input name="loisir"  type="text" class="form-control" id="input-labl" placeholder="loisirs"  required>
              </div>
              
              <div class="mb-3" >
                <label for="détails-loisirs" id="label-in" class="form-label">Détails</label>
                <textarea class="form-control"  name="détails_loisir" id="input-labl" placeholder="Détails" rows="4"></textarea>
              </div>
              
              <div class="d-grid gap-2" style="justify-content: center;">
                <button id="butn_env" class="btn btn-outline-dark" name="save6"><a  style="text-decoration: none; color: #faf8f8;">Ajouter</a></button>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <form action="server_formulaire_cv_profil1.php" method="post">
  <div class="d-grid gap-2" style="justify-content: center; margin-top:20px; ">
                <button id="butn_env" class="btn btn-dark" name="save"><a  style="text-decoration: none; color: #faf8f8;">Sava</a></button>
              </div>
              </form>

              
       <!-- navbar3-->
<footer style="background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1rem; margin-top:5rem;">

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