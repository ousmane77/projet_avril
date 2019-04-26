<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
 	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
	    <link rel="stylesheet"  href="assets/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <title>Profil</title>
    </head>
<body>
 
    <div class="box">
        <div class="container emp-profile">

            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                    
                            
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                               
                                </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Information </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom : </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $user['nomUser'] ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Prenom : </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $user['prenomUser'] ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Numero Telephone : </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $user['phone'] ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email : </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $user['emailUser'] ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary">Modifier mon mot de passe</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="delete-<?= $user['idUser'] ?>" class="btn btn-danger">Supprimer mon compte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>