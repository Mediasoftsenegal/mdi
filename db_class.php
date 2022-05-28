<?php
	// Configuration
	Function config(){
		
	$host = 'localhost';
	$dbname = 'remacons_mdcaisse';
	$username = 'remacons_mdi';
	$password = 'j9BAfWuyF-4!';			
	$port='5432';

	$mdi = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";
	$dbconn= pg_connect($mdi);
	return $dbconn;
	}

	Function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	global $Data;
	$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($Data, $theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
	//Rechaine
	Function remchaine($lachaine)
		{
			$chaine=str_replace("'","''",$lachaine);
		
			return	$chaine;
		}
  
	//Encaissement
	Function ajout_encaiss($date_op,$num_op,$num_piece,$libelle,$encaissement,$nmois,$id_user){
		$libelle= str_replace("'", " ", $libelle);
		$valide=TRUE;;
		$sql= "INSERT INTO PUBLIC.md_caisse(date_op,num_op,num_piece,libelle,encaissement,nmois,id_user)VALUES
		('".$date_op."',".$num_op.",".$num_piece.",'".$libelle."',".$encaissement.",".$nmois.",".$id_user.")";
				
			$conf=config();
			$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
				echo "Données ajoutées !";
				}
		}
		// ajout Produit
		Function ajoute_produit($design)
		{

			$sql="INSERT INTO PUBLIC.md_produit(designation) VALUES ('".$design."')";
			
			$conf=config();
			$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
				echo "Données ajoutées !";
				}
		}
		// ajout Lieu 
		Function ajoute_lieu($id_produit,$nomlieu,$litrecm,$kgcm)
		{
			$sql="INSERT INTO PUBLIC.md_lieu (id_produit,nom_lieu,litre_cm,kg_cm) VALUES (".$id_produit.",'".$nomlieu."',".$litrecm.",".$kgcm.")";
			
			$conf=config();
			$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
				echo "Données ajoutées !";
				}
		}
		Function ajout_stock($id_produit,$date,$lcm,$kgcm,$id_lieu)
	    {
			$sql="INSERT INTO PUBLIC.md_stock(id_produit,date,mesure_cm,quantite_kg,id_lieu) VALUES (".$id_produit.",'".$date."',".$lcm.",".$kgcm.",".$id_lieu.")";
			
			$conf=config();
			$result =pg_query($conf,$sql);
			if(!$result){
				echo pg_last_error($conf);
			} else {
				echo "Données ajoutées !";
			}
	    }
		//Appro coffre ---------------------------------------
		Function ajoute_coffre($date_op,$solde_ant,$num_bon,$libelle,$encaissement,$nmois,$id_user){
			$libelle= str_replace("'", " ", $libelle);
			$valide=TRUE;;
			$sql= "INSERT INTO PUBLIC.md_coffre(date_op,solde_ant,num_bon,libelle,encaissement,nmois,id_user)VALUES
			('".$date_op."',".$solde_ant.",'".$num_bon."','".$libelle."',".$encaissement.",".$nmois.",".$id_user.")";
					echo $sql;
				$conf=config();
				$result = pg_query($conf, $sql);
					if(!$result){
					echo pg_last_error($conf);
					} else {
					echo "Données ajoutées !";
					}
			}
			//Lister Encaissement
		Function afficheEnc($datedeb,$datefin){
				
		$sql="SELECT * FROM PUBLIC.md_caisse WHERE date_op BETWEEN '".$datedeb."' AND '".$datefin."' ORDER BY id_caisse ASC";
		
		$conf=config();
		$result = pg_query($conf, $sql);
		$data = pg_fetch_array($result,NULL);	
		
		return pg_query($sql);
		}
		//recherche par ID Encaissement
		Function select_encaiss($id){
			
			$sql="SELECT * FROM PUBLIC.md_caisse WHERE id_caisse=".$id;
			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
			echo pg_last_error($conf);
			}
			return $exe;
		}
		//Suppression Encaissement
		Function deleteEnc(){
			
			$sql='DELETE FROM PUBLIC.md_caisse WHERE id_caisse='.cleanData($_POST['id_caisse']);
			return pg_query($sql);
			
		}
		//Modification  Encaissement
		Function updateEnc($date_op,$num_op, $numpiece, $libelle,$decaissement,$id_caisse){
			
			$sql = "UPDATE PUBLIC.md_caisse SET date_op =".$date_op.", num_op =".$num_op.",num_piece = ".$numpiece.", libelle = ".$libelle.",
					decaissement =".$decaissement." 	
					WHERE id_caisse =".$id_caisse.";";
				//echo $sql;
				$conf=config();
				$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
				echo "Données modifiées !";
				}
			}
		Function cleanData($val){
			
			return pg_escape_string($val);
			}
		//Décaissement
		Function ajout_decaiss($date_op,$num_op,$num_piece,$libelle,$decaissement,$nmois,$id_user){
			$libelle= str_replace("'", " ", $libelle);
			$valide=TRUE;
			
			$sql= "INSERT INTO PUBLIC.md_caisse(date_op,num_op,num_piece,libelle,decaissement,nmois,id_user)VALUES
			('".$date_op."',".$num_op.",".$num_piece.",'".$libelle."',".$decaissement.",".$nmois.",".$id_user.")";
				//echo $sql;
				$conf=config();
				$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
				echo "Données ajoutées !";
				}
			}
		Function cumul_decaissement($annee)
			{
				$sql="SELECT SUM(`decaissement`) AS DEC FROM `md_caisse` WHERE YEAR(`date_op`)='".$annee."'";
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				return $exe;
			}
		Function cumul_encaissement($annee)
			{
				$sql="SELECT SUM(`encaissement`) AS ENC FROM `md_caisse` WHERE YEAR(`date_op`)='".$annee."'";
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				return $exe;
			}
			// User 
		Function xamer($data=array()){
			
			$sql="SELECT * FROM PUBLIC.md_user WHERE login='".cleanData($_POST['login'])."' AND mdp='".cleanData($_POST['mdp'])."'";
			$conf=config();
			$result = pg_query($conf, $sql);
			if(!$result){
			echo pg_last_error($conf);
			} else {
				echo "Authentification réussie !";
				}
			}
		
		Function lmois($num)
			{
			switch ($num){
				case '01' :
				$mois='Janvier';
				break;
				case '02':
				$mois='Février';
				break;
				case '03':
				$mois='Mars';
				break;
				case '04':
				$mois='Avril';
				break;
				case '05':
				$mois='Mai';
				break;
				case '06':
				$mois='Juin';
				break;
				case '07':
				$mois='Juillet';
				break;
				case '08':
				$mois='Août';
				break;
				case '09':
				$mois='Septembre';
				break;
				case '10':
				$mois='Octobre';
				break;
				case '11':
				$mois='Novembre';
				break;
				case '12':
				$mois='Décembre';
				break;
				}
			return $mois;
			}	
		// Calcul hier
	Function DatedHier($date='')
		{
			if ($date=='') 
			{ 
			$mois = date("m"); 
			$jour = date("d"); 
			$annee = date("Y"); 
			} 
			else 
			{ 
			$annee = substr($date, 0, 4); 
			$mois = substr($date, 5, 2); 
			$jour = substr($date, 8, 2); 
				if (checkdate($mois, $jour, $annee)==false) 
				return -1; 
			}; 
			$hier = getdate(mktime(0, 0, 0, $mois, $jour - 1, $annee)); 
			
			if ($hier['mon']<10)
			$hier['mon'] = "0".$hier['mon'];
			if ($hier['mday']<10)
			$hier['mday'] = "0".$hier['mday'];
			$hier = $hier['year']."-".$hier['mon']."-".$hier['mday'];
		
			return $hier; 

		}
	Function date_outil($date,$nombre_jour) 
		{
			$year = substr($date, -10, 4);	
			$month = substr($date, -5, -3);	
			$day = substr($date, -2);  
			
			// récupère la date du jour
			$date_string = mktime(0,0,0,$month,$day,$year);
		 
			// Supprime les jours
			$timestamp = $date_string - ($nombre_jour * 86400);
			$nouvelle_date = date("Y-m-d", $timestamp); 
		 
			// pour afficher
		   return $nouvelle_date;
 
		}
	Function nom_utilisat($id)
		{
			$sql="SELECT nom_afficher FROM  md_user WHERE iduser=".$id ;
	
			$conf=config();
			$exe=pg_query($conf,$sql);
			
			return $exe;
		}
	// CLOTURE
	Function cloture($smois)
		{
			$sql="UPDATE md_caisse SET cloture = TRUE WHERE nmois = '".$smois."'";
			
			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
			echo pg_last_error($conf);
			} 
			header('Refresh: 0;URL=tables-editable.php:');
			
		}
	Function renvoi_mois($amois)
		{
			switch ($amois)
			{
				case '01' :
				$ant='12';
				break;
				
			default:
			
				if(intval($amois)<10)
				{
					$ant='0'.(intval($amois)-1);
				}else{
					$ant=(intval($amois)-1);
				}
					
				return $ant;
			}
		}
	Function guide_jour(){
			$hier = new DateTime('-1 day');
  			$hier -> format('Y-m-d');
		}
	// REPORT A NOUVEAU	
	Function report_a_nouveau($nmois)
			{				
				$sql="SELECT * FROM public.md_ran WHERE mois= '".$nmois."'";
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				if(!$exe){
				echo pg_last_error($conf);
				}
				return $exe;
			}		
	Function insert_ran($date,$mont,$iduser,$mois,$dater)
			{
			$sql="INSERT INTO PUBLIC.md_ran (date_ran,montant_ran,id_user,mois,date_reelle) VALUES ('".$date."',".$mont.",".$iduser.",".$mois.",'".$dater."')";
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				if(!$exe){
				echo pg_last_error($conf);
				}
				return $exe;
				
			}
	Function verifie_ran($mois,$mont)
			{
				$sql="SELECT * FROM PUBLIC.md_ran WHERE mois='".$mois."' AND montant_ran=".$mont;
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				if(!$exe){
				echo pg_last_error($conf);
				} 
				return $exe;
			}
	Function modifie_ran($date,$mont)
			{	
			$sql="UPDATE `md_ran` SET `montant_ran` = '".$mont."' WHERE `md_ran`.`date_ran`='".$date."'";
			
			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
				echo pg_last_error($conf);
				} 
				return $exe;
			}	
		
	// USERS
	Function liste_users()
		{
			$sql="SELECT * FROM `md_user`";
				
			$conf=config();
			$exe=pg_query($conf,$sql);
			return $exe;
		}
			
	Function insert_users($nomuser,$login,$password,$profil,$date_creation)
		{
			$sql = "INSERT INTO `md_user` (`nomuser`, `login`, `password`, `profil`, `date_creation`) 
					VALUES ('".$nomuser."', '".$login."', '".$password."','".$profil."','".$date_creation."')";

			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
			echo pg_last_error($conf);
			} 
			echo "Users ajoutés !";
			
		}					
				
	Function verifie_user($nomuser,$login,$password,$profil)
		{
			$sql="SELECT count(*) as nub FROM `md_user` 
				WHERE `nomuser`='".$nomuser."'
				AND `login`='".$login."'
				AND `password`='".$password."'
				AND `profil`='".$profil."'
				AND `date_creation`='".date('Y-m-d')."'";
				
				$conf=config();
				$exe=pg_query($conf,$sql);
				if(!$exe){
				echo pg_last_error($conf);
				} 
				return $exe;
		}		
				
	Function nbre_user()
		{
			$sql="SELECT COUNT(*) as nbe FROM `md_user`";
					
			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
				echo pg_last_error($conf);
			} 
			return $exe;
		}		
							
// ?>