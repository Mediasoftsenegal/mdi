<html lang="fr">
<? 
 session_start();
 include('db_class.php');
 $res=select_encaiss($_GET['id']);
 $row = pg_fetch_assoc($res) ;
 ?>
<head>
    <title>Formulaire Encaissement </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
         <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CAISSE PRINCIPALE : CP En Date du <?echo date('d/m/y');  ?> </a> <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp;</a>
									
								</li>
								<li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                     &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                    </a>
                                </li>
								</ul>
								<ul class="navbar-nav nav-right ml-auto">	
								<li class="nav-item">
                                    <a class="nav-link search" href="javascript:void(0)">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <div class="search-wrapper">
                                        <div class="close-btn">
                                            <i class="ti ti-close"></i>
                                        </div>
                                        <div class="search-content">
                                            <form>
                                                <div class="form-group">
                                                    <i class="ti ti-search magnifier"></i>
                                                    <input type="text" class="form-control autocomplete" placeholder="Rechercher" id="autocomplete-ajax" autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
								<li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/icone1.jpg" >
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0"><?echo $bienvenue;?></h4>
                                                    <small class="text-white"></small>
                                                </div>
                                                <a href="deconnexion.php" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="#">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Paramètres
                                            </a>
                                        </div>
                                    </div>
                                </li>
											
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title"></li>
                            <li>
                                <a class="has-arrow" href="tables-editable.php" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Tableau de bord</span>
                                </a>
                            </li>
                            <li><a href="tables-editable.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Caisse</span></a> </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Utilisateurs</span></a>    
                            </li>
                            <li>
                             <a class="has-arrow"  href="deconnexion.php" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Déconnexion</span></a> 
                            </li>
                        </ul>
						  <li class="nav-item">
						  <img src="assets/img/logo mdi.png" class="img-fluid logo-desktop" alt="logo" />
						  </li>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Fiche décaissement</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Caisse
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Décaissement</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                           <div class="col-xl-1"></div>
                            <div class="col-xl-8">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"><? echo $_SESSION['nom_afficher'];?></h4>
                                        </div 
                                    </div>
                                    <div class="card-body">
										<form method="POST" action="insert.php" class="form-signin" >
											
											<input type="idcaisse" class="form-control" name="idcaisse" id="inputEmail4" value="<?echo $_GET['id'];?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Date</label>
                                                    <input type="Date" class="form-control" name="date_op" id="inputEmail4" value="<?echo $row['date_op'];?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">N° opération</label>
                                                    <input type="integer" class="form-control" name="num_op"  id="inputPassword4" value="<?echo $row['num_op'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">N° pièce</label>
                                                <input type="text" class="form-control" name="num_piece"  id="inputAddress" value="<?echo $row['num_piece'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Libellé décaissement</label>
                                                <input type="text" class="form-control" name="libelle"  id="inputAddress2" value="<?echo $row['libelle'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Montant décaissement</label>
                                                <input type="integer" class="form-control" name="encaissement" id="inputAddress2" value="<?echo $row['decaissement'];?>">
                                            </div>
                                            <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" >Fermer</button>
                                        <button type="submit" class="btn btn-success" name="btn_encs">Valider</button>
                                    </div>
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>

</html>
<form role="form"  method="GET" action="insert.php">
						 <!-- Vertical Center Modal -->
                        <div class="modal fade" id="myenc" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">   Fiche Encaissement</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                       
                                            <div class="row">
                                                <div class="col-6">
													<div class="form-group">
                                                        <label class="control-label">Date</label>
                                                        <input type="date" class="form-control" name="date_op" placeholder="date opération" />
                                                    </div>
													</div>
													<div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Numéro opération</label>
                                                        <input type="intval" class="form-control" name="num_op" placeholder="numéro opération" />
                                                    </div>
													</div>
													<div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Numéro pièce</label>
                                                        <input type="intval" class="form-control" name="num_piece" value="0" placeholder="numéro pièce" />
                                                    </div>
													</div>
													<div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Libellé encaissement</label>
                                                        <input type="text" class="form-control" name="libelle" placeholder="libelle encaissement" />
                                                    </div>
													</div>
													
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Montant </label>
                                                        <input type="intval" class="form-control"  name="encaissement" placeholder="montant encaissement" />
                                                    </div>
                                                </div>
                                            </div>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Femer</button>
                                        <button type="submit" class="btn btn-success" name="btn_enc">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
                  

</html>