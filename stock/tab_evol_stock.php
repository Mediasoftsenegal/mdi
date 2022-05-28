<!DOCTYPE html>
<? session_start();
if ($_SESSION["connecter"] != "Oui") {header("location:../auth-login.php");exit();	} 
	else{
	$bienvenue = 	$_SESSION["nom_afficher"];
	}
	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');

?>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Md Industrie - Gestion de stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta content="Gestion du coffre" name="description" />
    <meta content="Medisoft" name="joel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheet -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- app style -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"rel="stylesheet">
	<!-- Datatable -->
	<link href="https://code.jquery.com/jquery-3.5.1.js">
	<link href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
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
                        <img src="../assets/img/loader/loader.svg" alt="loader">
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
                                    <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion de stock  </a> <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp;</a> 
									
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
                                        <img src="../assets/img/avtar/icone1.jpg" >
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
											<a class="dropdown-item d-flex nav-link" href="tab_produit.php">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Produits
                                            </a>
											<a class="dropdown-item d-flex nav-link" href="tab_lieu.php">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Lieu de stockage
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
			<body>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
					
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title"><? echo 'Profil:'.$_SESSION["Profileur"].'-'.$_SESSION["id_user"];?></li>
                            
							 <li><a href="tab_produit.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Produits</span></a> </li>
							 <li><a href="tab_lieu.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Lieu de stock</span></a> </li>
                             <li><a href="tab_entree.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Entrée de stock</span></a> </li>
							  <li><a href="tab_sortie.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Sortie de stock</span></a> </li>
							 <li><a href="tab_evol_stock.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Evolution du stock</span></a> </li>		 
                            </li>
                            <li>
                             <a class="has-arrow"  href="../deconnexion.php" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Déconnexion</span></a> 
                            </li>
                        </ul>
						  <li class="nav-item">
						  <img src="../assets/img/logo mdi.png" class="img-fluid logo-desktop" alt="logo" />
						  </li>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
				<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0"><br>
                                     <h4 class="text-black mb-0"><?echo $bienvenue;?></h4>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="#"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Gestion de stock
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Evolution du stock</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                     <div class="row media-contant">
                            <div class="col-12 col-lg-6">
                                <div class="card card-statistics media-contant">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Rechercher sur la période</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="media">
											<form method="POST" action="">
												<div class="input-group" data-date="23/11/2018" data-date-format="dd-mm-YYYY">
													<input type="text" class="form-control range-from" name="from">
													<span class="input-group-addon"> à </span>
													<input class="form-control range-to" type="text" name="to">
													<div class="col-sm-2"> <button type="submit" name="search" class="btn btn-icon btn-success"><i class="fa fa-search"></i></button>
													</div>
												</div>
											</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?if(isset($_POST['search'])){
									$dater=explode("/", $_POST['from']);
									$dateDeb=$dater[2].'-'.$dater[0].'-'.$dater[1];
									$daters=explode("/", $_POST['to']);
									$dateFin=$daters[2].'-'.$daters[0].'-'.$daters[1];}?>
                            
                        </div>
						</div>	
                        <?
						require_once '../db_class.php';
						?>
                        <!-- end row --><p></p>
						<!-- begin row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="table table-striped mb-0">
                                            <table id="example" style="width:100%" class="display compact table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Désignation du produit </th>     
														<th>Lieu de stockage</th>  	
														<th>Litres par cm</th>  	
														<th>kg par cm</th>	
														<th>Mesures centimètre</th>		
														<th>Quantité kg par <br>lieu de stockage</th>
														<th>Quantité totale <br>trouvée (kg)</th>														
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?				
													$sql = "SELECT md_produit.id_produit,md_produit.designation,md_lieu.nom_lieu,md_lieu.litre_cm,md_lieu.kg_cm 
													FROM public.md_produit,public.md_lieu
													WHERE md_produit.id_produit= md_lieu.id_produit 
													ORDER BY id_produit ASC ";			
													$resultset = $conn->prepare($sql);
                                                    $resultset->execute();
                                                    			
														
                                                        while ($row = $resultset->fetch(PDO::FETCH_ASSOC))
														{
                                                             ?>   
                                                        <tr>							
                                                            <td><?echo $row['designation'];?></td> 
															<td><?echo $row['nom_lieu'];?></td> 
															<td><?echo $row['litre_cm'];?></td> 
															<td><?echo $row['kg_cm'];?></td> 
															<td></td> 
															<td></td> 
															<td></td> 
															<td><?echo '<a href="form_produit.php?id='.$row['id_produit'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="Modifier un produit" class="btn btn-icon btn-xs btn-outline-success"><i class="fa fa-edit"></i></a>&nbsp;
															<a href="form_produit.php?id='.$row['id_produit'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="supprimer un produit" class="btn btn-icon btn-xs btn-outline-danger"><i class="fa fa-trash"></i></a>';?></td> 								
														</tr>        
													<?} ?>
                                                    <?php
                                                  $resultset->closeCursor();
													//}
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                      <th>Désignation du produit </th>     
														<th>Lieu de stockage</th>  	
														<th>Litres par cm</th>  	
														<th>kg par cm</th>	
														<th>Mesures centimètre</th>		
														<th>Quantité kg par <br>lieu de stockage</th>
														<th>Quantité totale <br>trouvée (kg)</th>														
														<th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
									</div>
                                </div>
                            </div>
                           </div>
						</div>
                  </div>
                    <!-- end container-fluid -->
					<!-- end page title -->     
						<form role="form"  method="GET" action="../insert.php">
						 <!-- Vertical Center Modal -->
						 <script>
							 function somme(){
								 var nbr1, nbr2, sum;
								 nbr1 = Number(document.getElementById("kgcm").value);
								 nbr2 = Number(document.getElementById("lcm").value);
								 sum = nbr1 * nbr2;
								 document.getElementById("sum").value = sum;
							 }
						  </script>
                        <div class="modal fade" id="myenc" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle"> Nouveau lieu </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
										
										<? $sql = "SELECT id_produit,designation FROM public.md_produit ORDER BY id_produit ASC";			
													$result0 = $conn->prepare($sql);
                                                    $result0->execute();
													?>
											<div class="col-12">
												<div class="form-group">
												<label class="control-label">Date </label>											
												<input type="date" class="form-control"  name="date" placeholder="Date " />
												</div>
												<div class="form-group">
												<label class="control-label">Choisir un produit </label>
												<select  class="form-control form-control-sm" name="id_produit" id="id_produit">
												<option>Choisir un produit</option>
												<? while ($row0 = $result0->fetch(PDO::FETCH_ASSOC))
														{?>
												<option value="<? echo $row0['id_produit']; ?> "><?echo $row0['designation']; ?></option>
														<?}?>
												<select>
												</div>
												 
												<div class="form-group">
												<label class="control-label">Lieu de stockage </label>											
												<input style="text-transform: uppercase;" class="form-control"  name="lieu" placeholder="Lieu de stockage " />
												</div>
												<div class="form-group">
												<label class="control-label">Litres par cm </label>											
												<input style="int" class="form-control" value="0" name="lcm" placeholder="Litres par cm " />
								
												</div>
												<div class="form-group">
												<label class="control-label">Kg par cm </label>												
												<input style="int;" class="form-control"  value="0" name="kgcm" placeholder="Kg par cm " />
												</div>
												<div class="form-group">
												<label class="control-label">Mesure centimètre </label>												
												<input style="int;" class="form-control"  value="0" name="mc" placeholder="Mesure centimètre" />
												</div>
												<div class="form-group">
												<label class="control-label">Quantité kg par lieu de stockage</label>												
												<input style="int;" class="form-control"  value="0" name="qkg" placeholder="Quantité kg par lieu de stockage " />
												</div>
											</div>
										</div>
									</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success" name="btn_stock">Valider</button>
                                    </div>
								</div>
                                </div>
                            </div>
						 </div>	
							</form>
							
					 </div>
                        <!-- end row -->
                        <!-- Vertical Center Modal -->
                </div>
                
            
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="../assets/js/vendors.js"></script>
    <!-- custom app -->
    <script src="../assets/js/app.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();} );
	</script>
	
</body>

</html>

</html>