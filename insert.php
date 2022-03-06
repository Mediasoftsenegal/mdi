<?php
	include('db_class.php');
	// Encaissement
	if(isset($_GET['btn_enc']))
    {
		extract($_GET);
		if (empty($_GET['num_piece'])){
			$nump=0;
		}else
		{
			$nump=$_GET['num_piece'];
		}
		$snmois=explode("-",$_GET['date_op']);
		$nmois=$snmois[0].$snmois[1];
		$ret_val = ajout_encaiss($_GET['date_op'],$_GET['num_op'],$nump,$_GET['libelle'],$_GET['encaissement'],$nmois,$_GET['id_user']);
		if($ret_val=1){
		$dat=$_GET['date_op'];
		header('location:tables-editable.php');
		}else{
			echo 'Echec Encaissement!';
		}
	}
	// Décaissement
	 if(isset($_GET['btn_dec']))
	   {
		extract($_GET);
		$sdmois=explode("-",$_GET['date_opd']);
		$nmois=($sdmois[0].$sdmois[1]);
		$valide=TRUE;
		if (empty($_GET['num_pieced'])){
			$nump=0;
		}else
		{
			$nump=$_GET['num_pieced'];
		}
		
		$ret_val = ajout_decaiss($_GET['date_opd'],$_GET['num_opd'],$nump,$_GET['libelled'],$_GET['decaissement'],$nmois,$_GET['id_user']);
		if($ret_val=1){
			$dat=$_GET['date_op'];
		header('location:tables-editable.php');
		}else{
			echo 'Echec Insertion!';
		}
		
	}
	
	// Modification Décaissement
	if (isset($_POST['btn_encs']))
	{
		$trouv=updateEnc("'".$_POST['date_op']."'",$_POST['num_op'],$_POST['num_piece'],"'".$_POST['libelle']."'",$_POST['encaissement'],
		$_POST['idcaisse']);
	
		if ($trouv=1){
			header('location:tables-editable.php');
		}else{
			echo 'Echec Modification!';
		}
		
	}
?>
