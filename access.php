<?php
session_start();
include("infos.php");
@$valider = $_POST["login"];
$erreur = "";
if (isset($valider)) 
	{
		include("connexion.php");
		$verify = $pdo->prepare("select * From PUBLIC.md_user where login=? and mdp=? limit 1");
		$verify->execute(array($login, $pass_crypt));
		$user = $verify->fetchAll();

			if (count($user) > 0) 
			{
				$_SESSION["nom_afficher"] = ucfirst(strtolower($user[0]["nom_afficher"]));
				$_SESSION["connecter"] = "Oui";
				$_SESSION["id_user"] = $user[0]["iduser"];
				//echo 'ID:'.$_SESSION["id_user"] ;
				$_SESSION["Profileur"] = $user[0]["profil"];
				//echo 'Profileur:'.$_SESSION["Profileur"] ;
				header("location:tables-editable.php");
			} else
			{
			
			header("location:auth-login.php");
			echo "Utilisateur ou mot de passe non défini dans la plateforme !"; 
			header ("Refresh: 1;URL=auth-login.php");
			}
	}
?>