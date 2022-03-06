<?php
	require 'db_class.php';
	
	function inserer_user($login,$pwd,$nom,$profil)
		{
			$sql="INSERT INTO md_user (`login`,`password`,`nomuser`,`profil`) values('$login','$pwd','$nom','$profil')";
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;
		}
	
	function supprimer_user($id)
		{
			$sql="DELETE from `md_user` where id_user='$id'";
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;
		}
	
	function liste_user()
		{
			$sql="SELECT * FROM  `md_user`";
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;		
		}
	
	function obtenir_user($id)
		{
			$sql="SELECT * FROM  `md_user` where id_user='$id'";
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;		
		}
	
	function login_password($login,$pwd)
		{
			$sql="SELECT * FROM `md_user` where `md_user`.`login`='$login' and `md_user`.`password`='$pwd'";

			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;	
		}
	function login($login,$pwd)
		{
			$sql="SELECT * FROM `md_user` where login='$login' and password='$pwd'";
			
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;	
		}	
	function insert_connexion($id_user,$date,$IP,$mac)
		{
			$date=date('Y-m-d');
			$sql="INSERT INTO `md_connexion`(`iduser`,`date_connx`,`adresseIP`,`adresse_mac`) VALUES ('$id_user','$date','$IP','$mac')";
			$conn=config();
			$exe=pg_query($conn,$sql);
			return $exe;	
		}
?>