<!Doctype html>
<html>
    <head>
        <title>Nymeria</title>
        <meta charset="utf-8">
 	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
	    <link rel="stylesheet"  href="assets/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/style2.css">
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
                            <li><a href="logout">Deconnexion</a></li>
                            <li><a href="profile-<?=$user['idUser']?>">Profil</a></li>
                            <li><a href='' data-toggle="modal" data-target="#exampleModal">Contactez</a></li>
                            <li><a href="" data-toggle="modal" data-target="#notif">Notification </a></li>
                            <li><a href="index-<?=$user['idUser']?>-<?=$user['typeUser']?>">Accueil</a></li>
                            <li><form action="search" method='post' class="form-inline">
                        <input class="form-control mr-sm-2"  name="search"  type="search" placeholder="Entrer la commune..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
            <div class="overlay">
               
                <div class=" bar text-center">
                   
                </div>
             
                    <div class="row">
                        
                           
                        <div class="col-md-12">
                        <?php foreach ($res as $re): ?> 
                            <div class="card text-center" style="width: 18rem;">
                            <img src="<?= $re['image1'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$re['libelle'] ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Commune: <?=$re['commune'] ?></li> 
                            </ul>
                            <div class="card-body">               
                                <button data-toggle="modal" data-target="#<?='modal'.$re['id'] ?>" class="btn btn-success card-link">Informations</button> 
                            </div>
                            </div>

                            <div class="modal fade" id="<?='modal'.$re['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="card text-center" style="width: 500px;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?=$re['image1'] ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?=$re['image2'] ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                        <div><b><?=$re['descriptions'] ?></b></div>
                        <div>Commune: <b><?=$re['commune'] ?></b></div>
                        <div>Interressé(e): <a data-toggle="modal" class='btn btn-success' data-target="#exampleModal">Contactez</a> </div>
                    </div>
                </div>
                </div>
                    <?php endforeach; ?>
                    
                    </div>
                        
                    </div>
                    



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

                
                    
                    <div class='col-md-12 foo text-center'>
        Copyright © 2019 Nymeria Agency 
        </div>   
                     
                    
               
    <script src="assets/css/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap.js"></script>
    <script src="assets/css/main.js"></script>
    </body>

</html>













