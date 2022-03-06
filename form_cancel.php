<?php
session_start();
include("db_class.php");
@$cancelO=$_GET['id'];

if (isset($cancelO)) 
	{
		$sql="UPDATE PUBLIC.md_caisse SET etat=FALSE WHERE id_caisse ='".$cancelO."'";
			
			$conf=config();
			$exe=pg_query($conf,$sql);
			if(!$exe){
			echo pg_last_error($conf);
			} 
			header('Refresh: 0;URL=tables-editable.php');
		
		
	}
?>