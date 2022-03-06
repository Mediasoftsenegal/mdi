<?
 
@$profil = $_POST["profil"];
@$prenom = $_POST["nom_afficher"];
@$login = $_POST["login"];
@$password = $_POST["mdp"];
@$pass_crypt = md5($_POST["mdp"]);
 
?>