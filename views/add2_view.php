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
            <li>
                <a href="add" class=''>
                    <i class="fas fa-plus-circle" ></i>
                    Ajouter une offre
                </a>
            </li>
            <li class='active'>
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
   <h3>Ajouter un administrateur</h3>
    
                     <form action="add2" method="POST" enctype="multipart/form-data">
						<div class="inputG">
							<label for="regName">Nom <span style="color:green">*</span></label>
							<input id="regName" name="regName" type="text" class='form-control'>
						</div>
						<div class="inputG">
							<label for="regPren">Prenom <span style="color:green">*</span></label>
							<input id="regPren" name="regPren" type="text" class='form-control'>
						</div>
						<div class="inputG">
							<label for="phone">Telephone <span style="color:green">*</span></label>
							<input id="phone" name="tel" type="tel" class='form-control'>
						</div>
						
						<div class="inputG">
							<label for="regMail">Email <span style="color:green">*</span></label>
							<input id="regMail" name="regMail" type="email" class='form-control'>
						</div>
						<div class="inputG">
							<label for="regPass">Mot de Passe <span style="color:green">*</span></label>
							<input id="regPass" name="regPass" type="password" class='form-control'>
						</div>
						<div class='' style="color: red; font-size: 70%"><?=$error; ?></div>
                        <div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>
						
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