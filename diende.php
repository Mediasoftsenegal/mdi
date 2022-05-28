<?
// Entrée
 if (isset($_POST['doli'])){
  include('db_class.php');

    $date_entree=$_POST['date_entresortie'];
    $id_produit=$_POST['id_produit'];
	$libelle_entree=remchaine($_POST['libelle_entreesortie']);
    $qte_entree=$_POST['qte_entree'];

    $sql= "INSERT INTO md_entree_sortie(date_entreesortie,id_produit,libelle_entreesortie,qte_entree,type_entresortie)VALUES
		('".$date_entree."',".$id_produit.",'".$libelle_entree."',$qte_entree,'Entrée')";
			//echo $sql;
		$conf=config();
    
			$result = pg_query($conf, $sql);
				if(!$result){
				echo pg_last_error($conf);
				} else {
                header('location: tab_entree.php');
				echo "Données ajoutées !";
				}
 }
 // Modif entree
 if (isset($_POST['toudou'])){
	include('db_class.php');
	$ldate=$_POST['date_entresortie'];
	$id_produit=$_POST['id_produit'];
	$libelle_sortie=remchaine($_POST['libelle_entreesortie']);
	$qte_entree=$_POST['qte_entree'];

	$sql=" UPDATE  md_entree_sortie 
	SET date_entreesortie = '".$ldate."',
	id_produit = ".$id_produit.",
	libelle_entreesortie = '".remchaine($_POST['libelle_entreesortie'])."',
	qte_entree = ".$_POST['qte_entree']."
	WHERE id_entreesortie=".$_POST['id_entreesortie'];
	//echo $_POST['qte_entree_sortie'];
	//echo $sql;
	$conf=config() ;
	$result = pg_query($conf, $sql);
	if(!$result){
		echo pg_last_error($conf);
		} else {
		header('location: tab_entree.php');
		}
   }
   
 // Supp entree
 if (isset($_POST['dindi'])){
	include('db_class.php');

	$sql="DELETE  FROM md_entree_sortie WHERE id_entreesortie=".$_POST['id_entreesortie'];
	$conf=config();
	$result = pg_query($conf, $sql);
	if(!$result){
		echo pg_last_error($conf);
		} else {
		header('location: tab_entree.php');
	
		}
   }
 // ajout sortie
 if (isset($_POST['doli_sor'])){
	include('db_class.php');
  
	  $date_sortie=$_POST['date_sortie'];
	  $id_produit=$_POST['id_produit'];
	  $libelle_sortie=remchaine($_POST['libelle_sortie']);
	  $qte_sortie=$_POST['qte_sortie'];

  
	  $sql= "INSERT INTO md_entree_sortie(date_entreesortie,id_produit,libelle_entreesortie,qte_entree_sortie,type_entresortie)VALUES
		  ('".$date_sortie."',".$id_produit.",'".$libelle_sortie."',$qte_sortie,'Sortie')";
			  
		  $conf=config();
	  
			  $result = pg_query($conf, $sql);
				  if(!$result){
				  echo pg_last_error($conf);
				  } else {
				  header('location: tab_sortie.php');
				  echo "Données ajoutées !";
				  }
   }
   // Delete sortie
   if (isset($_POST['dindi_sor'])){
	include('db_class.php');

	$sql="DELETE  FROM entree_sortie WHERE id_entreesortie=".$_POST['id_sortie'];
	$conf=config();
	$result = pg_query($conf, $sql);
	if(!$result){
		echo pg_last_error($conf);
		} else {
		header('location: tab_sortie.php');
	
		}
   }
   // Modifier sortie  

   if (isset($_POST['toudou_sor'])){
	include('db_class.php');
	$ldate=$_POST['date_sortie'];
	$id_produit=$_POST['id_produit'];
	$libelle_sortie=remchaine($_POST['libelle_sortie']);
	$qte_sortie=$_POST['qte_sortie'];

	$sql=" UPDATE  entree_sortie 
	SET date_entreesortie = '".$ldate."',
	id_produit = ".$id_produit.",
	libelle_entreesortie = '".remchaine($_POST['libelle_sortie'])."',
	qte_entree_sortie = ".$_POST['qte_sortie']."
	WHERE id_entreesortie=".$_POST['id_sortie'];
	echo $_POST['qte_sortie'];
	$conf=config() ;
	$result = pg_query($conf, $sql);
	if(!$result){
		echo pg_last_error($conf);
		} else {
		header('location: tab_sortie.php');
	
		}
   }
  
//Utilisateur
   //Ajout
	if (isset($_POST['doli_user'])){
		include('db_class.php');
	
		$login=$_POST['login'];
		$mdp=remchaine($_POST['mdp']);
		$nom_afficher=$_POST['nom_afficher'];
		$profil=$_POST['profil'];
		$date_creation=date('Y-m-d');

	
		$sql= "INSERT INTO md_user(login,mdp,nom_afficher,profil,date_creation)VALUES
			('".$login."','".MD5(remchaine($mdp))."','".$nom_afficher."','".$profil."','".$date_creation."')";
			//echo $sql;
				
			$conf=config();
		
				$result = pg_query($conf, $sql);
					if(!$result){
					echo pg_last_error($conf);
					} else {
					header('location: tab_user.php');
					echo "Données ajoutées !";
					}
	}
	//Modifi
	if (isset($_POST['toudou_user'])){
		include('db_class.php');
		$login=$_POST['login'];
		$iduser=$_POST['iduser'];
		$mdp=$_POST['mdp'];
		$nom_afficher=$_POST['nom_afficher'];
		$profil=$_POST['profil'];
	
		$sql=" UPDATE  md_user 
		SET login = '".$login."',
		mdp = ".$mdp.",
		nom_afficher = '".$nom_afficher."',
		profil = ".$profil."
		WHERE iduser=".$iduser;
		//echo $_POST['qte_sortie'];
		$conf=config() ;
		$result = pg_query($conf, $sql);
		if(!$result){
			echo pg_last_error($conf);
			} else {
			header('location: tab_user.php');
		
			}
	   }
	//Supprimer
	if (isset($_POST['dindi_user'])){
		include('db_class.php');
	
		$sql="DELETE  FROM md_user WHERE iduser=".$_POST['iduser'];
		$conf=config();
		$result = pg_query($conf, $sql);
		if(!$result){
			echo pg_last_error($conf);
			} else {
			header('location: tab_user.php');
			}
	   }
?>