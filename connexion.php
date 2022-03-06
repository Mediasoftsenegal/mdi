
<?php
   try{
      $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>
