<?php
session_start();

$dateran=$_POST['daterh'];
$mont_ran=$_POST['ranh'];
$id_user=$_POST['id_user'];
$valider = $_POST["clos"];
//echo 'Post:'.$valider.'<br>';
//echo 'Date:'.$dateran.'<br>';
//echo 'Montant:'.$mont_ran.'<br>';
//echo 'id_user:'.$id_user.'<br>';
//echo 'Profil:'.$_SESSION["Profileur"].'<br>';
include("connexion.php");

if (isset($valider)){
// CLOTURE CAISSE

	$verify = $pdo->prepare("SELECT * FROM PUBLIC.md_ran WHERE date_ran=? AND date_ran=? limit 1");
	$verify->execute(array($dateran, $mont_ran));
	$nbre = $verify->fetchAll();

	if (count($nbre) == 0) {

				require('db_class.php');
				$lmois=explode("-",$dateran);
				$mois=$lmois[0].$lmois[1];
				$result=insert_ran($dateran,$mont_ran,$id_user,$mois,$dateran);
				if($result)
				{
				$mmois=renvoi_mois($lmois[1]);
				$clo_mois=$lmois[0].$mmois;
				$results=cloture($clo_mois); 	
				header('Refresh: 1;URL=tables-editable.php:');
				}	
				else{			
				//	modifie_ran($dateran,$mont_ran);
				echo ('Caisse déjà clôturée ! ');
				header('Refresh: 2;URL=tables-editable.php:');
				}
	}
}
?>

