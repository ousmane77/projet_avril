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
            <strong>FR</strong>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="admin">
                    <i class="fas fa-home"></i>
                    Accueil
                </a>
            </li>

            <li class='active'>
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>

        <h2 class="text-center">Offre  <span style='color:blue'><a href='add'><i class="fas fa-plus-circle"></i></a></span></h2>
        <table class="table table-bordered table-striped ">
            <tr>
                <th>Type</th>
                <th>Commune</th>
                <th>Option</th>    
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tr>
                <?php foreach($tot as $to):?>
                <th><?= $to['libelle'] ?></th>
                <th><?= $to['commune'] ?></th>
                <?php
                 if ($to['pos'] == 1) 
                 { 
                 ?>
                    <th>Vente</th>
                <?php
                }else
                {
                ?>
                <th>Location</th>
                <?php
                }
                ?>
                <th><?= $to['descriptions'] ?></th>
               
                <th><a href="offre-<?= $to['id'] ?>"><i class="fa fa-trash text-danger mr-4"></i></a></th>
            </tr>
            <?php endforeach;?>
        </table>

    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>