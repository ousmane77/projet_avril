 <!Doctype html>
<html>
    <head>
        <title>Nymeria</title>
        <meta charset="utf-8">
 	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
         <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script defer src="assets/css/fontawesome/js/all.js" ></script>
    </head>
    
    <body>
        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <i class="icon fa fa-bars fa-2x"></i>
                    <!-- logo -->
                    <div  class="col-lg-3 col-xs-12">
                        <div class="logo">
                            <h2>Nymeria Agency</h2>
                        </div>
                    </div>
                <!-- nav -->
                    <nav class="col-lg-9 col-xs-12">
                        <ul>
                            <li><a href="" class="nav-link"></a></li>
                            <li><a href="">Deconnexion</a></li>
                            <li><a href="profile-<?=$user['idUser']?>">Profil</a></li>
                            <li><a href="" data-toggle="modal" data-target="#notif">Notification</a></li>
                            <li><a href="" data-toggle="modal" data-target="#exampleModal">Contactez-nous</a></li>
                            <li><a href="immobilier-<?=$user['idUser'] ?>">Espace immobilier</a></li>
                            
                            <li><a href="index-<?=$user['idUser'] ?>-<?=$user['typeUser'] ?>">Accueil</a></li>
                        </ul>
                    </nav>
                
                </div>
            </div>
        </header>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <form action='' method='post'>
                       <textarea name='message' class="form-control"></textarea>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                       </form>  
                    </div>
                   
                    </div>
                </div>
                </div>
        
                <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mes messages</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style='background:grey;'>
                            <h6>Envoyés</h6>
                            <?php foreach ($message as $mess): ?> 
                            <div class="row">
                            <div class="col-md-6" style='border: 1px solid grey;border-radius:6px; background:white'>
                            <?=$mess['contenu']?></div>
                            </div>
                            <div class="row">
                           
                            <div class="col-md-3">Envoyé:</div>
                            <div class="col-md-9">
                            <small> <?=$mess['temps']?></small></div>
                            </div><br>
                            <?php endforeach; ?>
                            </div>
                            <div class="col-md-6">
                            <h6>Recus</h6>
                            <?php foreach ($recus as $recu): ?> 
                            <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6" style='border: 1px solid grey;border-radius:6px; background:white'>
                            <?=$recu['contenu']?></div>
                            </div>
                            <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">Envoyé:</div>
                            <div class="col-md-7">
                            <small> <?=$recu['temps']?></small></div>
                            </div><br>
                            <?php endforeach; ?>
                            </div>  
                        
                        </div>
                  
                    </div>
                   
                    </div>
                </div>
                </div>


        <section class="sections home text-center">
            <div class="overlay">
                <div class="container">
                <div class="home-content">    
                <p class='p' style='color:white;'><b>Nymeria Agency</b> est une entreprise de construction
                     spécialisée dans le génie-civil, les travaux publics 
                     et l'immobilier. Nous maîtrisons une large palette 
                     de savoir-faire en construction et Rénovation de bâtiments,
                       Etude, Conception de Plans, Vente et Location de propriétés… Nymeria
                       Agency réalise tous les travaux de gros-œuvre et
                        second œuvre, de même que toutes les architectures en bâtiment,
                         et se place ainsi comme interlocutrice crédible dans les domaines
                          de la construction et de l'immobilier. Soucieuse de satisfaire ses clients,
                           l’entreprise met à votre disposition des constructions de qualité
                            et une garantie du travail bien fait.</p>
                            <div><br><br>
                <p style='color:white;'><span><b>Des difficultés pour vous decider ? Vous ne savez pas quoi construire ? Besoin d'inspiration ?</b></span><br>
                Nymeria vous propose des constructions ou des modeles en fonction de la taille de votre terrain avec une estimation du cout des travaux.
                </p>
                <a href='suggestion-<?=$user['idUser'] ?>-<?=$user['typeUser'] ?>' class="btn btn-success">Suggestions & estimation</a>
                
                </div>
                </div>
               
                </div>
            </div>
        </section>
        <section class="services" id='services'>
            <div class="container">
                <div class="text-center">
                <h2 class="titre">Nos Services</h2>
                <div class="line"><span></span></div>
                <p><i>Pour tous vos constructions</i></p>
                </div>
            </div>
            <div class="container text-center">
            <article>
 			<img src="assets/css/renovation.jpg" class="img-circle">
 			<p><b><small>Construction et renovation<br> de batiment</small></b>
 			</article>
                
            <article>
 			<img src="assets/css/image1.jpg" class="img-circle">
 			<p><b><small>Conception de plans<br>et devis</small></b>
 			</article>


 			<article>
 			<img src="assets/css/tp.jpg" class="img-circle">
 			<p><b><small>Traveaux publics<br> (TP)</small></b>
 			</article>

 			<article>
 			<img src="assets/css/back-bg.jpg" class="img-circle">
             <p><b><small>Vente et location<br>de propriétés</small></b>
 			</article>
            </div>
        </section>
        <section class="container">
            <div class="text-center">
                <h2 class="titre">Nos outils</h2>
                <div class="line"><span></span></div>
                <div class="container-fluid reserv">
                <div class="card mb-3 mt-5">
            <div class="row no-gutters">
              <div class="col-md-7">
                <img src="assets/css/outil.jpg" alt="...">
              </div>
              <div class="col-md-5">
                <div class="card-body">
                  <p class="card-text">Pour la réalisation des travaux, Nymeria s’est doté de matériels, et outillages de pointe notamment :</p>
                  <ul style='text-align:justify'>
                    <li>Des Grues</li>
                    <li>Les bétonnières modernes</li>
                    <li>Des briques industrielles</li>
                    <li>Des toupies pour le béton prêt à l’emploi…</li>
                    <li>Des videurs</li>
                    <li>Des manteaux piqueurs, etc…</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
                </div>
            </div>
        </section>
        <section class='text-center capacite mb-5'>
        <h2 class='titre'>Nos capacités</h2>
        <div class="line"><span></span></div>
        <div  style="background: url('assets/css/bul.jpg') center;height:200px; widht:auto">
         
          <p>Les particuliers et toutes structures publiques ou<br> 
              privées ayant un projet dans le domaine de la construction<br>
              et rénovation de bâtiment, du Génie Civil, de la construction de site GSM<br>
               de la Plomberie, de l’Etude et Conception de Plans et Devis…, sont les<br>
                potentiels clients de BETHEL CONSTRUCTION.</p>
        </div>
        </section>
        <div class="container-fluid footer" style='color:white'>
            <div class="container">
            <div class='row'>
            <div class="col-md-3">
                <h3>A propos</h3>
                <p class='p'><small><b>Nymeria Agency</b> est une entreprise de construction
                     spécialisée dans le génie-civil, les travaux publics 
                     et l'immobilier. Nous maîtrisons une large palette 
                     de savoir-faire en construction et Rénovation de bâtiments,
                       Etude, Conception de Plans, Vente et Location de propriétés… Nymeria
                       Agency réalise tous les travaux de gros-œuvre et
                        second œuvre, de même que toutes les architectures en bâtiment,
                         et se place ainsi comme interlocutrice crédible dans les domaines
                          de la construction et de l'immobilier. Soucieuse de satisfaire ses clients,
                           l’entreprise met à votre disposition des constructions de qualité
                            et une garantie du travail bien fait.</small></p>
            </div>
            <div class="col-md-3">
            <h3>Nos contacts</h3>
            <p ><i class="fas fa-map-marker-alt"></i> Angré Gestoci, non loin du feu gestoci, Cocody, Abidjan, Cote d'Ivoire</p>
            <p><i class="fas fa-phone"></i> (+225) 89 41 89 68</p>
            <p><i class="fas fa-envelope"></i> info@nymeria.ci</p>
            <p><i class="fas fa-fax"></i>  (+225) 22 15 12 10</p>
            </div>
            <div class="col-md-3">
            <h3>Nos horaires</h3>
            <p class=''>Lun-Ven: .................08H - 17H45</p>
            <p class=''>Samedi: ..................08H30 - 12H</p>
            <p class=''>Dimanche: ........................Fermé</p>
            </div>
            <div class="col-md-3">
            <h3>Suivez-nous</h3>
            <p class='p'><a href=''><i class="fab fa-twitter-square"></i></a>
            <a href=''><i class="fab fa-facebook-square"></i></a>
                     </p>
            </div>
            </div>
        </div>
        <div class='col-md-12 foo text-center'>
        Copyright © 2019 Nymeria Agency 
        </div>
        </div>
    <script src="assets/css/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap.js"></script>
    <script src="assets/css/main.js"></script>
    </body>

</html>













