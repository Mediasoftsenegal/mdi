<?php
  $conn = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');

  $resultset = $conn->prepare($sql);
  $resultset->execute();
      
      while ($row = $resultset->fetchAll(PDO::FETCH_ASSOC))
      {
          $a = count($row);
          for ($i = 0;$i < $a;$i++) :
            
          $datee=explode('-',$row[$i]['date_entreesortie']);
          $dates=$datee[2].'/'.$datee[1].'/'.$datee[0];
          $rest=($row[$i]['qte_entree']-$row[$i]['qte_entree_sortie']);
          $res += $rest;

        endfor;  }
?>

<?php
    require 'fpdf/fpdf.php';

    class PDF extends FPDF{
        
    function Header(){
        $this->Image('../assets/img/logo mdi.png',5,5,-150);
        $this->SetFont('Helvetica', 'B', 10);
        $this->Cell(-1,30,'Km 4,Centenaire de la commune de Dakar ',0,0);
        $this->Cell(155,40,'+221 33 821 13 13 - Dakar/SENEGAL',0,0);
        $this->SetFont('Helvetica', 'B', 14);
        $this->Cell(10,25,'SITUATION DES MATIERES GRASSES ET EMBALLAGES',0,0,'C');
         // Saut de ligne
         $this->Ln(22);
        
    }

    function headerTable(){
       
        $this->SetFont('Helvetica', 'B', 9);
        $this->SetY(60);   
        $this->SetX(10);     
        $this->Cell(30,10,'DATE',1,0,'C');
        $this->Cell(60,10,'DESIGNATION',1,0,'C');
        $this->Cell(60,10,'LIBELLE',1,0,'C');
        $this->Cell(40,10,'ENTREE',1,0,'C');
        $this->Cell(40,10,'SORTIE',1,0,'C');
        $this->Cell(40,10,'RESTE',1,0,'C');
        $this->Ln();
    }

function viewTable(){
  $conn = new PDO('pgsql:host=localhost;port=5432;dbname=remacons_mdcaisse', 'remacons_mdi', 'j9BAfWuyF-4!');

        $this->SetFont('Helvetica', '', 9);
        $from = $_GET['from_'];
        $to = $_GET['to'];
        $sql = "SELECT DISTINCT md_produit.id_produit,md_produit.designation, 
        md_entree_sortie.libelle_entreesortie,md_entree_sortie.type_entresortie,md_entree_sortie.qte_entree_sortie,
        md_entree_sortie.qte_entree,md_entree_sortie.date_entreesortie,
        (md_entree_sortie.qte_entree-md_entree_sortie.qte_entree_sortie) AS reste,
        md_entree_sortie.id_produit 
        FROM public.md_produit,public.md_entree_sortie 
        WHERE md_entree_sortie.date_entreesortie BETWEEN ".$from ." AND ".$to."
        AND md_produit.id_produit= md_entree_sortie.id_produit 
        ORDER BY designation,date_entreesortie ASC"; 
       // echo $sql;
        $resultset = $conn->prepare($sql);
        $resultset->execute();

        while ($row = $resultset->fetchAll(PDO::FETCH_ASSOC))
        {
        $a = count($row);
        $dat[] = $row['date_entreesortie'];
        $des[] = $row['designation'];
        $lib[] = $row['libelle_entreesortie'];
        $entr[] = $row['qte_entree'];
        $sort[] = $row['qte_entree_sortie'];
        
       $res=0;

        for($i=0; $i<$a; $i++){
            $dats=explode("-",$row[$i]['date_entreesortie']);
            $daters=$dats[2].'/'.$dats[1].'/'.$dats[0];
            $rest=($row[$i]['qte_entree']-$row[$i]['qte_entree_sortie']);
            $res += $rest;
          
            $this->Cell(30,7,$daters,1,0,'C');
            $this->Cell(60,7,$row[$i]['designation'],1,0,'L');
            $this->Cell(60,7,utf8_decode($row[$i]['libelle_entreesortie']),1,0,'L');
            $this->Cell(40,7,number_format($row[$i]['qte_entree']),1,0,'R');
            $this->Cell(40,7,number_format($row[$i]['qte_entree_sortie']),1,0,'R');
            $this->Cell(40,7,number_format($res),1,0,'R');
            $this->Ln(7);
            
             }
            }
    }

    // Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Helvetica','I',8);
    // Numéro de page
    $this->Cell(0,7,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

   
    
}


    $pdf = new PDF('L','mm','A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','',11);

    //$pdf->Header();
    $pdf->headerTable();
    $pdf->viewTable();
    //$pdf->Footer();
   // $pdf->body();
    $num = $_GET['from_'];
    $nom = $_GET['to'];
    $pdf->Output();
?>