<!Doctype html>
<html>
    <head>
        <title>Nymeria</title>
        <meta charset="utf-8">
 	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
	    <link rel="stylesheet"  href="assets/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
    <body>
        <!-- header -->
        <header style=''>
            <div class="container-fluid">
                <div class="row">
                    <i class="icon fa fa-bars fa-2x"></i>
                    <!-- logo -->
                    <div  class="col-lg-4 col-xs-12">
                        <div class="logo">
                            <h2>Nymeria Immobilier</h2>
                        </div>
                    </div>
                <!-- nav -->
                    <nav class="col-lg-8 col-xs-12">
                        <ul>
                            <li><a href="" class="nav-link"></a></li>
                            <li><a href="">Deconnexion</a></li>
                            <li><a href="profile-<?=$user['idUser']?>">Profil</a></li>
                            <li><a href=""  data-toggle="modal" data-target="#notif">Notification </a></li>
                            <li><a href="index-<?=$user['idUser'] ?>-<?=$user['typeUser'] ?>">Accueil</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section class="sections home text-center">
            <div class="overlay">
                <div class="container">
                <div class="home-content">    
                <p>Découvrez toutes nos offres. Demandez en ligne votre visite ou un agent immobilier. 
                    Nos agents à votre écoute. Agence indépendante.
                     Achat, vente et location.<br> Services: Achat, vente et location appartement, maison, magasin  et terrain.</p>
                    <a href="service-<?=$user['idUser'] ?>-1-<?=$user['typeUser'] ?>" class="btn btn-success">Achat</a><br>
                    <a href="service-<?=$user['idUser'] ?>-2-<?=$user['typeUser'] ?>" class="btn btn-success">Location</a>
                </div>
                </div>
            </div>
        </section>

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


        <div class='col-md-12 foo text-center'>
        Copyright © 2019 Nymeria Agency 
        </div>
       
        </div>
    <script src="assets/css/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap.js"></script>
    <script src="assets/css/main.js"></script>
    </body>

</html>













