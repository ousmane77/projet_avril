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
            <li >
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
            <li class='active'>
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

        <h2 class="text-center">Messages</h2>
        <table class="table table-bordered table-striped ">
            <tr>
                <th>Expediteur</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            <?php foreach($mess as $mes):?>
            <tr>
               
               
                <th><?= $mes['emailUser'] ?></th>
               
                <th><?= $mes['temps'] ?></th>
                
                <th>
                    <a href="" data-toggle="modal" data-target="#<?='modal'.$mes['id'] ?>" class='btn btn-primary'>Ouvrir</i></a>
                    <button data-toggle="modal" data-target="#<?='modal1'.$mes['id'] ?>" class='btn btn-success'>Repondre</i></button>
                    
                    <div class="modal fade" id="<?='modal'.$mes['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                        <textarea name='message' class="form-control" readonly><?= $mes['contenu']?></textarea>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                            </div>
                    
                        </div>
                    
                        </div>
                    </div>
                    </div>
                    
                    <div class="modal fade" id="<?='modal1'.$mes['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="text" name='idU' value='<?= $mes['idUser'] ?>' readonly>
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
                    
                </th>
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