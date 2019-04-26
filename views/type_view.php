
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Suggestions</title>

    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style4.css" rel="stylesheet" id="bootstrap-css">
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
                <a href="index-<?=$user['idUser'] ?>-<?=$user['typeUser'] ?>">
                    <i class="fas fa-home"></i>
                    Accueil
                </a>
            </li>
            <li>
                <a href="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    Deconnexion
                </a>
            </li>

           
        </ul>
        <ul class="list-unstyled components">
        <?php foreach ($type as $typ): ?>
        <li>
                <a href="type-<?=$user['idUser'] ?>-<?=$user['typeUser'] ?>-<?= $typ['libMod'] ?>" >
                    
                <?= $typ['libMod'] ?>
                </a>
        </li>
        <?php endforeach; ?>
           

        </ul>

    </nav>
    
    <!-- Page Content  -->
<div id="content">
    <div class="row">
        <div class="container">
        <h3>NOS SUGGESTIONS ET ESTIMATIONS</h3>
        </div>
    </div>
       
        <div class="container-fluid ">
        <?php foreach ($choix as $mo) : ?>
            <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" style="height: 300px" src="<?= $mo['image1'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $mo['libMod'] ?></h5>
                <ul class="list-unstyled components">
                    <li>Taille: <b><?= $mo['grandeur'] ?></b></li>
                    <li>Description: <b><?= $mo['descr'] ?></b></li>
                    <li>Cout: <b><?= $mo['cout'] ?> FCFA</b></li>
                </ul>
            </div>
            </div> 
        <?php endforeach ;?>  
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
