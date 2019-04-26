<?php if($_SESSION['type'] !=2 ):?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style3.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/css/fontawesome/js/all.js" ></script>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Nymeria Agency</h3>
            <strong>NA</strong>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="admin">
                    <i class="fas fa-home"></i>
                    Accueil
                </a>
            </li>

            <li>
                <a href="offre">
                    <i class="fas fa-briefcase"></i>
                    Offre
                </a>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Utilisateur </a>
            </li>
            <li>
                <a href="sms">
                    <i class="fas fa-envelope"></i>
                    Messages </a>
            </li>
        </ul>
        <ul class="list-unstyled components">
            <li class='active'>
                <a href="add" class=''>
                    <i class="fas fa-plus-circle" ></i>
                    Ajouter une offre
                </a>
            </li>
            <li>
                <a href="add2" class=''>
                    <i class="fas fa-plus-circle" ></i>
                    Ajouter un admin
                </a>
            </li>

        </ul>

    </nav>
    
    <!-- Page Content  -->
   <div id="content">
   <div class="col-md-8 col-md-offset-2">
   <h3>Ajouter une nouvelle offre</h3>
    
                    <form  id='form1' method='post' action='add' enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="libelle">Libelle:</label>
                        <input type="text" id="libelle"  name="libelle" class='form-control'> 
                    </div>
                    <div class="form-group">
                        <label for="commune">Commune:</label>
                        <input type="text" id="commune"  name="commune" class='form-control'> 
                    </div>
                    <div class="form-group">
                        <label for="desc">Descrition:</label>
                        <textarea name="description" id="desc"  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="choix">Option:</label>
                        <select name="choix" class='form-control' id="choix">
								<option value="">-Choisir SVP-</option>
								<option value="1">Vente</option>
                                <option value="2">Location</option>		
						</select>                    
                    </div>
                    <div class="form-group">
                        <label for="image">Sélectionner image 1:</label>
                        <input type="file" accept='image/*' id="image" name="image1"> 
                        
                    </div>
                    <div class="form-group">
                        <label for="image2">Sélectionner image 2:</label>
                        <input type="file" accept='image/*' id="image2" name="image2"> 
                        
                    </div>
    

                            
                    <br>
                    <input type='submit' value='Valider' class='btn btn-primary'>
                    <input type='reset' value='Annuler' class='btn btn-danger annuler'>
                    </form>  
   </div>
    
   </div>

            

<!-- jQuery CDN - Slim version (=without AJAX) -->

<script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/css/bootstrap/js/bootstrap.js" ></script>
<script src="assets/css/main1.js" ></script>



</body>

</html>
<?php else: header('Location:home'); exit(); endif;?>