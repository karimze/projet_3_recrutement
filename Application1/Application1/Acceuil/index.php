
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> this is my project </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet" href="stylebootstrap.css" >
    </head>
        <body style="background-color: rgb(95, 92, 92);">
            <div style="padding-bottom: 40px;">
           
           
 <!-- navbar1-->
  <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Kimz</a>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                <a  id="X" class="nav-link" href="..\login\index.html">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> CANDIDAT</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="..\login\index.html">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> RECRITTEUR</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="..\inscription\index.html">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> S'INSCRIRE</a>
              </li>
              <li class="nav-item">
                <a  id="X" class="nav-link" href="..\login\index.html">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Connexion</a>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
  </nav>

             <h1 style="text-align:center; color:#fff; margin-top:40px;font-style:oblic; margin-top:8rem;">La solution complete de recrutement:</h1> 
              <h4 style="text-align:center; color:rgb(19, 11, 11);margin-top:40px;font-style:oblic;"> Avec KIMZjob,le 
                recrutement est simplifié et plus efficace.
                Établissez vos filtres de sélection pour chaque poste et profil recherché. </h4>



            <div class="container justify-content-center" >
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card" style="border: 4px  black groove; border-radius: 30px;    width:450px; height:500px;  margin-top:90px;  ">
    
                                 <img src="Capture_d_e__cran_2019-10-25_a___10.32.06.png" 
                                 class="card-img-bottom" alt="this img1" style="width:420px; height:250px;margin-left:6px;margin-top:6px; border-radius:3.25rem">
                             <div class="card-body"><h1 class="card-title" style="text-align:center">Etes-vous RH:</h1>
                                 <div class="card-text" style=" border-color:rgb(5, 52, 52);">Cette interface vous permettra de créer un compte et de vérifier le score des chercheur d'emplois ainsi que vérfier leurs cv...
                                 </div>
                                       
                              </div>
                         </div>
                      </div>
                 
                  <div class="col-md-6">
                    <div class="card" style="border: 4px  black groove; border-radius: 30px;   width:450px;  height:500px;  margin-top:90px; ">

                             <img src="Devenir-le-candidat-Idéal.jpg" 
                             class="card-img-bottom" alt="this img1" style="width:420px; height:250px;margin-left:6px; margin-top:6px; border-radius:3.25rem; ">
                             <div class="card-body">
                              <h1 class="card-title" style="text-align:centre">Cherchez-vous un emploi?</h1>
                                 <div class="card-text" >Cette interface vous permettra 
                                     de postuler votre 
                                     CV afin d'être visible au service de
                                      recrutement chez les entreprises.
                                     </div>
                                       
                                 </div></div>
                             </div>
                             </div>
                                 </div></div>
                                 <br>
                                 <h1 style="text-align:center; color:rgb(5, 24, 79);margin-top:40px;font-style:oblic;">Critère de recrutement reconnue par les sociétes populaires</h1> 
                                 <div class="container" id="i">
                                    <div class="box">
                                      <img src="Louis-Vuitton-logo.jpg">
                                      <br>
                                    <span style="color:black">L-V</span></div>
                                      <div class="box">
                                        <img src="nike.jpg">
                                        
                                      <span style="color:black">Nike</span></div>
                                            <div class="box">
                                            <img src="Mercedes-Benz-logo-cover.jpg">
                                            <br>
                                       <span style="color:black">Mercedes Benz</span></div>
                                        <div class="box">
                                            <img src="GettyImages-1205217071-2000-2a26022fe10b4ec8923b109197ea5a69.jpg" >
                                            
                                         <span style="color:black">Walmart</span></div>
                                        <div class="box">
                                            <img src="Logo-alibaba-group.jpg">
                                         <span style="color:black">Alibaba</span></div>
                                         <div class="box">
                                          <img src="38-387330_clip-art-gucci-logo-png-gucci-logo-gold-1.webp">
                                       <span style="color:black">GUCCI</span></div>
                                    </div>
                                    <br><br><br><br>
                                    <div data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<div id="section1" class="container-fluid text-white" style="padding:100px 20px;background-color:rgb(30, 30, 80);">
  <h1>EMPLOI PAR MÉTIER</h1>
  <p>Commercial, venteProduction, maintenance, qualitéGestion, comptabilité, financeTourisme, hôtellerie, restaurationSecrétariat, assistanatInformatique, nouvelles technologiesManagement, direction généraleTransport, logistiqueMétiers des servicesRH, formation</p>
  
</div>

<div id="section2" class="container-fluid bg-primary" style="padding:100px 20px;background-color:rgb(39, 39, 172);">
  <h1>EMPLOI PAR SECTEUR</h1>
  <p>Hôtellerie, restaurationIndustrie, production, fabrication, autresBanque, assurance, financesServices autresDistribution, vente, commerce de grosInformatique, SSII, InternetTransports, logistique, services postauxBTP, constructionCentres d´appel, hotline, call centerSanté, pharmacie, hôpitaux, équipements m...</p>
  
</div>

<div id="section3" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
  <h1>EMPLOI PAR RÉGION</h1>
  <p>Casablanca-MohammediaRabat-Salé-KénitraMarrakech-SafiTanger-Tétouan-Al HoceïmaAgadirMeknèsFèsOujdaDakhlaInternational</p>
 
</div>
<br><br><br>
    
                                 <hr>
                                 <br>
                                 
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
                <img src="../candidat/cv/ytpImg.png" alt="" >
                <img src="../candidat/cv/instImg.png" alt="">
                <img src="../candidat/cv/facImg.png" alt="">
              </div>   
                        </div>
          </div>

          <div class="col-md-8">
               

            <div class="card-body">
              
              <h1 class="card-title"> Contact nous  </h1>
              <h3 class="card-text">    Pour toutes réclamations , n'hésitez pas à nous contacter
              </h3>  
              
              <div class="row justify-content-center">
                <div style="margin-top: 1rem;" class="col-lg-3"> 
                  <img src="../candidat/cv/e-mail_318-406827.avif" alt="" style="width: 5rem;" >
                  <p>Kimz_job@gmail.com</p>
                  <p>contactKimz@gmail.com</p>
  
                </div> 
                <div style="margin-top: 1rem;" class="col-lg-3"> 
                  <img src="../candidat/cv/tel-phone-icon-5.png" alt="" style="width: 5rem;" >
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