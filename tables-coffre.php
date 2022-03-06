<!DOCTYPE html>
<? session_start();
if ($_SESSION["connecter"] != "Oui") {header("location:auth-login.php");exit();	} 
	else{
	$bienvenue = 	$_SESSION["nom_afficher"];
	}
	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');

?>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Md Industrie - Gestion de la caisse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta content="Gestion du coffre" name="description" />
    <meta content="Medisoft" name="joel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"rel="stylesheet">
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
                                    <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COFFRE : CP En Date du <?echo date('d/m/y');  ?> </a> <a class="nav-link   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp;</a> 
									
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
                            <li class="nav-static-title"><? echo 'Profil:'.$_SESSION["Profileur"].'-'.$_SESSION["id_user"];?></li>
                            <li>
                                <a class="has-arrow" href="tables-editable.php" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Tableau de bord</span>
                                </a>
                            </li>
                            <li><a href="tables-editable.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Caisse</span></a> </li>
                            <li><a href="tables-coffre.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Coffre</span></a> </li>
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
				<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0"><br>
                                        <h1>Gestion du coffre</h1><?  echo 'Date : '. $_SESSION['dateDeb']; ?>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="#"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Gestion du Coffre    
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Approvisionnement - Versement</li>
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
                            <div class="col-12 col-lg-6">
                                <div class="card card-statistics media-contant">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Saisie</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="form-row">		
												<div class="col-sm-4">
													<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myenc">(+) Approvisionnement</button>
												</div>
												<div class="col-sm-4"></div>
												<div class="col-sm-4">
													<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mydec">(-) Versement</button>
												</div> 
												</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        </div><?
						require_once 'db_class.php';
						$daters=explode("/", $_POST['from']);
						$nomois=lmois($daters[0]);
						$Deb=$daters[1].'-'.$nomois.'-'.$daters[2];
						$daterss=explode("/", $_POST['to']);
						$nmois=lmois($daterss[0]);
						$Fin=$daterss[1].'-'.$nmois.'-'.$daterss[2];
						
						?>
                        <!-- end row --><p><?echo ' Période du '.$_SESSION['dateDeb'].' au '.$_SESSION['dateFin'];?></p>
						<!-- begin row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="table table-striped mb-0">
                                            <table id="datatable" class="display compact table table-striped table-bordered">
                                                <thead>
                                                    <tr>
														<th>Date</th>
                                                        <th>N°OP</th>
                                                        <th>N°Pièce</th>
                                                        <th>Libellé</th>
                                                        <th>Approvisionnement</th>
                                                        <th>Versement</th>
														<th>Solde</th>
														<th>Saisie par</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												
                                                    <?
													
												
													
													if(isset($_POST['search'])){
														$sql = "SELECT * FROM public.md_coffre WHERE etat=TRUE AND date_op BETWEEN '$dateDeb' AND '$dateFin' ORDER BY  num_op ASC";
													} else
													{
														$sql = "SELECT * FROM public.md_coffre WHERE etat=TRUE AND date_op BETWEEN '". $_SESSION['dateDeb'] ."' AND '". $_SESSION['dateFin']."' ORDER BY  num_op ASC";			
													}			
												
												//	echo 'Post date '.$_SESSION['dateDeb'].'<br>';
												//	echo $sql;
                                                    $resultset = $conn->prepare($sql);
                                                    $resultset->execute();
													$debut=$daters[2].'-'.$daters[0].'-'.$daters[1];
													
														// Solde ouverture 
																						
														setlocale(LC_TIME, "fr_FR");
														$jour=strftime("%A", strtotime($debut));
														//echo 'jour:'.$jour;
														switch ($jour)
														{		
														case 'lundi':
								
														$vend=date_outil($dateDeb,3);
														//echo $vend.'<br>';
														$sql_ran="SELECT * FROM md_ran WHERE date_ran='$vend' LIMIT 1";
														//echo $sql_ran;
														$conn=config();
														$resultat=pg_query($conn,$sql_ran);
														while($row_r=pg_fetch_array($resultat))
														{
															$_SESSION['ran']=$row_r['montant_ran'];
															$solde_ouv=$_SESSION['ran'];
															//echo $solde_ouv;
														}
														break;		
											
														default	:
									
														$vend=date_outil($dateDeb,1);

														$sql_ran="SELECT * FROM md_ran order by id_ran DESC LIMIT 1";
													//	echo $sql_ran.'<br>';
														$conn=config();
														$resultat=pg_query($conn,$sql_ran);
														while($row_r=pg_fetch_array($resultat))
														{
															$_SESSION['ran']=$row_r['montant_ran'];
															$solde_ouv=$_SESSION['ran'];
															$date1=explode("/", $_POST['to']);
															$dateDeb0=$date1[2].'-'.$date1[0].'-'.$date1[1];
															$_SESSION['dateDeb']=$dateDeb0;
															$date2=explode("/", $_POST['from']);
															$datefin1=$date1[2].'-'.$date2[0].'-'.$date2[1];
															$_SESSION['dateFin']=$datefin1;
														}
														break;							
														}

														echo '<tr>';
														echo '<td></td>';
														echo '<td></td>';
														echo '<td></td>';
														echo '<td>SOLDE D\'OUVERTURE</td>';
														echo '<td>'.(number_format($solde_ouv,0,'',' ')).'F CFA </td>';
														echo '<td></td>';
														echo '<td></td>';
														echo '<td></td>';
														echo '<td></td>';
														echo '</tr>';
														$date1=explode("/", $_POST['to']);
														$dateDeb0=$date1[2].'-'.$date1[0].'-'.$date1[1];
														$_SESSION['dateDeb']=$dateDeb0;
														$date2=explode("/", $_POST['from']);
														$datefin1=$date1[2].'-'.$date2[0].'-'.$date2[1];
														$_SESSION['dateFin']=$datefin1;
														
                                                    while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
														// traitement date
														$datersd=explode("-", $row['date_op']);
													
														$nmoi=lmois($datersd[0]);
														$Find=$datersd[2].'-'.$nmois.'-'.$datersd[0];
                                                        $totenc += $row['encaissement'];
                                                        $totdec += $row['decaissement'];
														$ncp++;?>
                                                    <tr>
														
                                                        <td><?echo $Find;?></td>
                                                        <td><?echo $row['num_op'];?></td>
                                                        <td><?echo $row['num_piece'];?></td>
                                                        <td><?echo $row['libelle'];?></td>	
														
														<? //echo 'Montant ='.$row['encaissement'];
															if ( $ncp == 1){ // 1ere ligne
																echo '<td>'.(number_format($row['encaissement'],0,'',' ')).'F CFA </td>';
																echo '<td>'.(number_format($row['decaissement'],0,'',' ')).'F CFA</td>';}
															else
															{ // test encaissement
																if($row['encaissement']==0){	
																	echo '<td></td>';} 
																else {
																echo '<td>'.(number_format($row['encaissement'],0,'',' ')).'F CFA </td>';}
																if ($row['decaissement']==0){
																	echo '<td></td>';} 
																else {
																echo '<td>'.(number_format($row['decaissement'],0,'',' ')).'F CFA</td>';}	
														}?>
														<? if ($ncp == 1){ $solde=($solde_ouv+$row['encaissement'])-$row['decaissement']; 
														//echo 'solde primaire : '.$solde;
														echo '<td>'.(number_format(($solde_ouv+$row['encaissement'])-$row['decaissement'],0,'',' ')).'F CFA </td>';}
														else {
															 ($solde=($solde+$row['encaissement'])-$row['decaissement']);
														//	 echo 'Solde secondaire'.$solde;
														echo '<td>'.(number_format($solde,0,'',' ')).'F CFA </td>';}	
														require_once 'db_class.php';
														$per=nom_utilisat($row['id_user']);
														$rowp = pg_fetch_row($per);
														echo '<td>'.$rowp[0].'</td>' ?>
                                                        <td>
														<? 
														switch ($_SESSION['Profileur']){
															case 'ADMINISTRATEUR':
															
															echo '<a href="form_encaisse.php?id='.$row['id_caisse'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="Modifier une opération" class="btn btn-icon btn-xs btn-outline-success"><i class="fa fa-edit"></i></a>&nbsp;
														<a href="form_cancel.php?id='.$row['id_caisse'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="Annuler une opération" class="btn btn-icon btn-xs btn-outline-danger" aria-label=""><i class="fa fa-trash"></i></a>';
														
															break;
															default :
															if($row['cloture'] == FALSE){
															echo '<a href="form_encaisse.php?id='.$row['id_caisse'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="Modifier une opération" class="btn btn-icon btn-xs btn-outline-success"><i class="fa fa-edit"></i></a>&nbsp;
															<a href="form_cancel.php?id='.$row['id_caisse'].'" data-toggle="tooltip" data-placement="right" title="" data-original-title="Annuler une opération" class="btn btn-icon btn-xs btn-outline-danger"><i class="fa fa-trash"></i></a>';}
															break;
															
														}
													?>
														</td>							
                                                    </tr>
													<?php
                                                    }  
													?>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td>TOTAUX </td>
														<td><?echo (number_format($solde_ouv+$totenc ,0,'',' '));  ?>F CFA </td>
														<td><?echo (number_format($totdec ,0,'',' '));  ?>F CFA</td> 
														<td></td>
														<td></td>
														<td></td>
													</tr>

													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td>SOLDE DE CLOTURE </td>
														<td><? echo (number_format($solde_ouv+$totenc-$totdec,0,'',' '));  ?>F CFA</td>
														<td></td> 
														<td></td>
														<td></td>
														<td><? $_SESSION['solde']=($solde_ouv+$totenc-$totdec); ?></td>
													</tr>
                                                    <?php
                                                  //$resultset->closeCursor();
													//}
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>N°OP</th>
                                                        <th>N°Pièce</th>
                                                        <th>Libellé</th>
                                                        <th>Approvisionnement</th>
                                                        <th>Versement</th>
														<th></th>
														<th>Saisie par</th>
														<td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
									</div>
                                </div>
								
                            </div>
							<? if($_SESSION['Profileur']=='ADMINISTRATEUR'){?>
							<div class="col-12 col-lg-12">
                                <div class="alert alert-primary">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <p class="text-white"> Clôture du coffre ===>  Action à éffectuer uniquement à la fin de chaque journée ! </p>
                                        </div>
                                    </div>
									
                                    <div class="card-body">	
										
								<form method="POST" action="insert_ran.php" class="form-signin" >
									<div class="row">
										<div class="col-sm"><input type="hidden" id='id_user' name='id_user' value='<? echo $_SESSION['id_user'];?>'>
											Solde <input type='text' id='ran' name='ranh'   value='<? echo $_SESSION['solde']; ?>'> F CFA
										</div>
										<div class="col-sm"><? if (isset($_POST['date_op'])){
												echo" Date du solde <input type='date' id='dater' name='daterh'   value='".$_POST['date_op']."'> ";
											}else
											{
												echo" Date du solde <input type='date' id='dater' name='daterh'   value='".date('Y-m-d')."'> ";
											}?>
										</div>
										
										<div class="col-sm">
                                            <button  id="sweetalert-09"  name="clos" value='clos' class="btn btn-success" aria-label="Try me! Example: en passant un paramètre, vous pouvez exécuter autre chose pour 'Annuler'">Clôturer la valeur en coffre du jour : <?  //echo $date; ?></button> 
										</div>
										
									</div>
									</form>
                                </div>
									
                                    </div>
                                </div>
								<? }?>
                            </div>
						
                  
                    <!-- end container-fluid -->
					<!-- end page title -->     
						<form role="form"  method="GET" action="insert.php">
						 <!-- Vertical Center Modal -->
						 
                        <div class="modal fade" id="myenc" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">   Bon approvisionnement de la caisse </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
										<input type="hidden" class="form-control" name="id_user" value="<? echo $_SESSION["id_user"];?>">
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success" name="btn_enc">Valider</button>
                                    </div>
								</div>
                                </div>
                            </div>
						 </div>	
							</form>
                       
					
						<form role="form"  method="GET" action="insert.php">
						 <!-- Vertical Center Modal -->
                        <div class="modal fade" id="mydec" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">   Fiche Versement </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
										<input type="hidden" class="form-control" name="id_user" value="<? echo $_SESSION["id_user"];?>" />
                                            <div class="col-6">
												<div class="form-group">
                                                <label class="control-label">Date</label>
                                                <input type="date" class="form-control" name="date_opd" placeholder="date opération" />
                                                </div>
											</div>
											<div class="col-12">
                                                <div class="form-group">
                                                <label class="control-label">Numéro opération</label>
                                                <input type="intval" class="form-control" name="num_opd" placeholder="numéro opération" />
                                                </div>
											</div>
											<div class="col-12">
                                                <div class="form-group">
                                                <label class="control-label">Numéro pièce</label>
                                                <input type="intval" class="form-control" name="num_pieced" value="0" placeholder="numéro pièce" />
                                                </div>
											</div>
											<div class="col-12">
                                                <div class="form-group">
                                                 <label class="control-label">Libellé décaissement</label>
                                                 <input type="text" class="form-control" name="libelled" placeholder="libelle décaissement" />
                                                 </div>
											</div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                <label class="control-label">Montant </label>
                                                <input type="intval" class="form-control"  name="decaissement" placeholder="montant décaissement" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success" name="btn_dec">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
					 </div>
                        <!-- end row -->
                        <!-- Vertical Center Modal -->
                </div>
                
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2021. médiasoft</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                       
                    </div>
                </div>
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