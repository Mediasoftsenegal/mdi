<?php
    session_start();
    include('user_sys.php');

    if(isset($_POST['bt_login']))
	{
    $login = $_POST['login'];
	$mdp = $_POST['mdp'];
	$mdp=MD5($mdp);
	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');
    $sql = "SELECT * FROM PUBLIC.md_user WHERE login='$login' and mdp='$mdp'";
	$result = $conn->prepare($sql);
    $result->execute();
	$ncompt = $result->rowCount();

	//$ncompt  = count($sql);
	while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
	{		 
	if($ncompt==1)
		{
		echo 'Compteur ='.$ncompt;
		$_SESSION['login']=$row['login'];
		$_SESSION['nom']=$row['nom_afficher'];       
		$_SESSION['logged']=true;
		$_SESSION['profil']=$row['profil'];
		$_SESSION['id_user']=$row['id_user'];
		echo 'Profil :'.$row['profil'];
		//echo 'Connexion Réussie';
		Switch($row['profil'])
			{
				Case "ADMINISTRATEUR" :
				echo 'Connexion Réussie..Patientez.'.$_SESSION['nom'].' '.$_SESSION['profil'];	
				$mac='null';
				$date=date_format($date,'Y-m-d H:i:s');
				insert_connexion($row['id_user'],$date,$_SERVER['REMOTE_ADDR'],$mac);	
				header ("Refresh: 1;URL=tables-editable.php");
				break;
				Case "SUPERVISEUR" :
				echo 'Connexion Réussie..Patientez.'.$_SESSION['nom'].' '.$_SESSION['profil'];	
						
				$mac='null';
				$date=date_format($date,'Y-m-d H:i:s');
				insert_connexion($row['id_user'],$date,$_SERVER['REMOTE_ADDR'],$mac);	
				header ("Refresh: 1;URL=tables-editable.php");
				break;	
				Case "AVANCE" :
						
				echo 'Connexion Réussie..Patientez..'.$_SESSION['nom'];
				header ("Refresh: 1;URL=tables-editable.php");	
				break;
						
				Case "CAISSE" :
				echo 'Connexion en cours ....'.$_SESSION['nom'];
				header ("Refresh: 1;URL=tables-editable.php");
				break;	
						
				default: 
				echo 'redirection 4'; 
				echo "<h1> Votre login ou mot de passe n'est pas valide !</h1>"; 
				//header ("Refresh: 3;URL=login.php");
				break;
					
				Case 0 : 
				echo "Utilisateur non défini dans la plateforme !"; 
				header ("Refresh: 1;URL=auth-login.php");
				break;
			}
		}
	}
	
   }else{
   echo 'Login ou Mot de passe incorrect';
   header('Refresh: 1;URL=auth-login.php');
        
    }
?>