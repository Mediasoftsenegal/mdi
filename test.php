<?php

include('db_class.php');
//Connecting to db here
$conn_string = "host=localhost port=5432 dbname=remacons_mdcaisse user=remacons_mdi password=j9BAfWuyF-4!"; // change the db credentials here
$conn = pg_connect($conn_string);
//inserting data ordera
 //$sql = "INSERT INTO md_caisse(date_op) VALUES('20210709')";
 $libelle="ACHATS PRODUITS D'ENTRETIEN";
 $libelle= str_replace("'", "\'", $libelle);
 echo $libelle;
 //$result = pg_query($conn, $sql);
//if(!$result){
 // echo pg_last_error($conn);
//} else {
 // echo "Inserted successfully";
//}

?>
