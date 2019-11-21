<?php
ob_start();
session_start();
 if(!isset($_SESSION['semail'])){
       header("location:../login.php");
    }
require 'dbconnection.php';
require('fpdf17/fpdf.php');
include('phpqrcode/qrlib.php'); 

if(isset($_REQUEST['enrollid'])){
    $email=$_SESSION["semail"];
    $case2="SELECT * FROM tbl_enrollment e,course_learning_details c,student_info s where e.stud_id=s.stud_id AND e.course_id=c.Sno AND 
    e.enroll_id=$_REQUEST[enrollid] AND stud_email='$email'";
    $result=mysqli_query($link,$case2);
    $row=mysqli_fetch_assoc($result);
    // if($row['feedback']==2)
    // {
    //     $_SESSION['rev']=1;
    //     $eid=$row['enroll_id'];
    //     echo $eid;
    //    header("location:../feedback.php?enrollid=$eid");
    // }
    $case3="SELECT * FROM tbl_learning_partner WHERE lp_name='$row[learning_partner]'";
    $result1=mysqli_query($link,$case3);
    $row1=mysqli_fetch_assoc($result1);
    $lpimage=$row1['lp_image'];
 $text=$row['stud_name'].'/'.$row['enroll_id'].'/'.$row['course_name'];
 $folder="cert/";
 $file_name ='kat_file_'.md5($text).'.png';   // 
 $pngpath=$folder.$file_name;
  if (!file_exists($pngpath)) { 
        QRcode::png($text, $pngpath); 
    }
    else { 
    }
 // QRcode::png($text,$file_name);
 // echo"<img src='images/qr.png'>";
 
class PDF extends Fpdf
{
function Header()
{
	
		$this->Cell(125);
		$this->Ln(20);
}
function Footer(){
              
		$this->SetY(-15);
                $this->SetFont('Arial','',15);
                $this->Cell(225,10,'',0,0);
		$this->Cell(0,10,'Director',0,1);
		
	}
        
}

$pdf =new PDF('P','mm','A4'); 
$pdf->AddPage('L');


$pdf->Image('cert.png',0,0,-425);
$pdf->SetFont('Arial','B',19);
$pdf->SetTextColor(102, 102, 255);
$pdf->Cell(0,10,'',0,1);
//$pdf->AddFont('MonotypeCorsiva','','monotype corsiva.php',11);
//$pdf->SetFont('MonotypeCorsiva','B',19);
$pdf->Cell(55,23,'',0,0);
$pdf->Cell(0,23,'',0,1);
$pdf->Cell(0,20,'',0,1);
$pdf->Cell(55,15,'',0,0);
$pdf->Cell(0,15,$row['stud_name'],0,1,'C');
$pdf->SetFont('Arial','IB',13);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(55,11,'',0,0);
$pdf->Cell(0,11,'Has Successfully Completed Training In',0,1,'C');
$pdf->SetFont('Arial','B',19);
$pdf->SetTextColor(102, 102, 255);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(55,15,'',0,0);
$pdf->Cell(0,15,$row['course_name'],0,1,'C');
$pdf->SetFont('Arial','B',19);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0,11,'',0,1);
$pdf->Cell(55,10,'',0,0);
$pdf->Cell(21,10,'',0,0);
$pdf->Cell(20,10,'From',0,0);
$pdf->SetTextColor(102, 102, 255);
$pdf->Cell(42,10,$row['c_starting_date'],0,0);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(11,10,' to',0,0);
$pdf->SetTextColor(102, 102, 255);
$pdf->Cell(42,10,$row['c_ending_date'],0,0);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(86,10,'Conducted at Katallyst',0,1);
$pdf->Cell(55,10,'',0,0);
$pdf->SetTextColor(102, 102, 255);
$pdf->Cell(0,10,'Bhubaneswar',0,1,'C');
$pdf->Image("https://katallyst.com/katallyst_admin/$lpimage",230,10,50,38);         // katallyst_admin/'.$row1['lp_image']
$pdf->Image('merit1.png',115,50);
$pdf->Image($pngpath,80,170,30,30);
$pdf->Image('digital_sign.jpg',235,160,35,35);
$pdf->SetTextColor(0,0,0);

ob_end_clean();


$pdf->Output($row['enroll_id'].'.pdf','I');
}
ob_end_flush();
?>
