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
                                    <a class="nav-link"   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?echo $bienvenue;?></a> <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp;</a> 
									
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
							 <li><a href="evol_stock.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Evolution du stock</span></a>   
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
                                     <h4 class="text-black mb-0"></h4>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Entrée de stock</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                   
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 m-b-30">
                            <div class="card card-statistics">
                                    <div class="card-body">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="card-heading"><h4 class="card-title">Gestion des entrées en stock</h4></div>  
                                    </div>
                                        <div class="datatable-wrapper table-responsive">
                                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6"></div>
                                                    <div class="col-sm-12 col-md-6"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="example" class="display compact table table-striped table-bordered dataTable" role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="choisir:" style="width: 263.625px;"></th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 414.281px;">Date entrée</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197.703px;">Désignation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 103.422px;">Libellé</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 184.562px;">Quantité</th>               
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?		                                                  	
													    $sql ="SELECT md_produit.id_produit,md_produit.designation,md_entree_sortie.date_entreesortie, 
                                                        md_entree_sortie.libelle_entreesortie,md_entree_sortie.qte_entree,
                                                        md_entree_sortie.type_entresortie,md_entree_sortie.id_entreesortie                                                       
                                                        FROM public.md_produit,public.md_entree_sortie
                                                        WHERE md_produit.id_produit= md_entree_sortie.id_produit 
                                                        AND md_entree_sortie.type_entresortie='Entrée'																							
                                                        ORDER BY md_entree_sortie.date_entreesortie ASC";		
                                                      	
													    $resultset = $conn->prepare($sql);
                                                        $resultset->execute();

                                                        while ($row = $resultset->fetch(PDO::FETCH_ASSOC))
														{
                                                             ?>   
                                                <tr role="row" class="odd">
                                                        <td class="sorting_1"><a href="tab_entree.php?id=<?echo $row['id_entreesortie'];?>">Choisir</a></td>
                                                        <? $ladate=explode('-',$row['date_entreesortie']);?>
                                                        <td><?echo ($ladate[2].'/'.$ladate[1].'/'.$ladate[0]);?></td>
                                                        <td><?echo $row['designation'];?></td>
                                                        <td><?echo $row['libelle_entreesortie'];?></td>
                                                        <td><?echo $row['qte_entree'];?></td>                                                        
                                                    </tr>
                                                    <?} ?>
                                                            <?php
                                                             $resultset->closeCursor();
                                                            //}
                                                            ?>
                                                    </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1"></th>
                                                        <th rowspan="1" colspan="1">Date entrée</th>
                                                        <th rowspan="1" colspan="1">Désignation</th>
                                                        <th rowspan="1" colspan="1">Libellé</th>                                                   
                                                        <th rowspan="1" colspan="1">Quantité</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                                <div class="card card-statistics h-100 mb-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Saisie entrée</h4>
                                        </div> 
                                    </div>
                                    <? if(isset($_GET['id'])){ 
                                        $sql="SELECT md_produit.id_produit,md_produit.designation,md_entree_sortie.date_entreesortie, 
                                        md_entree_sortie.libelle_entreesortie,md_entree_sortie.qte_entree,
                                        md_entree_sortie.type_entresortie,md_entree_sortie.id_entreesortie                                                       
                                        FROM public.md_produit,public.md_entree_sortie
                                        WHERE md_produit.id_produit= md_entree_sortie.id_produit 
                                        AND md_entree_sortie.type_entresortie='Entrée'																							
                                        AND md_entree_sortie.id_entreesortie=".$_GET['id'];																								

                                        $res=$conn->prepare($sql);
                                        $res->execute();
                                        $rowe = $res->fetch(PDO::FETCH_ASSOC);}
                                        ?>
                                    <div class="card-body">
                                        <form id="" method="POST" class="form-horizontal"  action="diende.php">
                                       
											<div class="col-12">
												<div class="form-group">
												<label class="control-label">Date </label>
                                                <? if(isset($_GET['id'])){ ?>												
												<input type="date" class="form-control"  name="date_entresortie" value="<? echo $rowe['date_entreesortie'];?>"/>
                                                <input type="hidden" class="form-control" name="id_entreesortie" value="<? echo $rowe['id_entreesortie'];?> "/> 
                                                <?} else {?>
                                                    <input type="date" class="form-control"  name="date_entresortie" placeholder="Date entrée" />
                                                <?}?>
                                                </div>
                                                <? $sql = "SELECT id_produit,designation FROM public.md_produit ORDER BY id_produit ASC";			
													$result0 = $conn->prepare($sql);
                                                    $result0->execute();
													?>
												<div class="form-group">
												<label class="control-label">Produit </label>
												<select  class="form-control form-control-sm" name="id_produit" id="id_produit">
                                                <? if (isset($_GET['id'])) {?> 
                                                <option value="<? echo $rowe['id_produit']; ?>"><?echo $rowe['designation']; ?></option>
                                                <? } else {?>  
												<option>Choisir un produit</option>
                                                <? }?> 
												<? while ($row0 = $result0->fetch(PDO::FETCH_ASSOC))
														{?>
												<option value="<? echo $row0['id_produit']; ?> "><?echo $row0['designation']; ?></option>
														<?}?>
												<select>
												</div>
												<div class="form-group">
												<label class="control-label">Libellé achat </label>	
                                                <? if (isset($_GET['id'])) {?>   		
												<input style="text" class="form-control"  name="libelle_entreesortie" value="<? echo $rowe['libelle_entreesortie'] ;?>" />
                                                <? } else {?>
                                                <input style="text" class="form-control"  name="libelle_entreesortie" placeholder="Libellé achat" />
												</div>
												<? }?>
												<div class="form-group">
												<label class="control-label">Quantité achetée </label>	
                                                <? if (isset($_GET['id'])) {?>											
												<input style="int" class="form-control"   name="qte_entree" value="<? echo $rowe['qte_entree'] ;?>"  />
												<? } else {?>
                                                <input style="int" class="form-control"   name="qte_entree" placeholder="Quantité achetée " />
                                                </div>
                                                <? }?>	
												<br/>
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-warning" name="toudou" data-dismiss="">Modifier</button>
                                            <button type="submit" class="btn btn-success" name="doli">Valider</button>
                                            <button type="submit" class="btn btn-danger" name="dindi">Supprimer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
						</div>	
                        <?
						require_once '../db_class.php';
						?>
                  </div>
                    <!-- end container-fluid -->
					<!-- end page title -->   
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