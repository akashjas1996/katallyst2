<?php



ob_start();

include '../inc/dbconnection.php';
ini_set("session.auto_start", 0);
require('fpdf17/fpdf.php');
session_start();
 // if(!isset($_SESSION['semail'])){
 //       header("location:../login.php");
 //    }
if(isset($_REQUEST['enrollid'])){

    $msg="";
    $email="1602114@kiit.ac.in";
    // $email=$_SESSION["semail"];
    $case2="SELECT * FROM tbl_enrollment e,course_learning_details c,student_info s where e.stud_id=s.stud_id AND e.course_id=c.course_id AND e.enroll_id=$_REQUEST[enrollid] AND stud_email='$email'";
    $result=mysqli_query($link,$case2);
    $row=mysqli_fetch_assoc($result);
class PDF extends Fpdf
{
function Header()
{
	
		$this->Cell(125);
         
		//put logo
		$this->Image('header.png',52,9,-200);
                $this->Cell(125);
		$this->Ln(20);
}
function Footer(){

		$this->SetY(-1);
		$this->Image('footer.png',13,190,-110);		
		
	}
        
}

$pdf = new PDF('P','mm','A4'); 

$pdf->AddPage();
$pdf->SetFont('Courier','B',18);
$pdf->SetFillColor(204,214,255);
$pdf->Rect(9.5, 50,191, 77, '');
$pdf->Cell(0,9,'Enrollment Form','0','1','C',1);
$pdf->Cell(0,13,'',0,1);
$pdf->SetFont('Arial','B',14);


$pdf->Cell(52,7,'Enrollment ID',0,0);
$pdf->Cell(4,7,':',0,0);
$pdf->Cell(80,7,$row['enroll_id'],0,1);


$pdf->Cell(52,7,'Student ID',0,0,'l',1);
$pdf->Cell(4,7,':',0,0,'l',1);
$pdf->Cell(80,7,$row['stud_id'],0,1,'l',1);
$pdf->Cell(52,7,'Name',0,0);
$pdf->Cell(4,7,':',0,0);
$pdf->Cell(80,7,$row['stud_name'],0,1);
$pdf->Cell(52,7,'Email ID',0,0,'l',1);
$pdf->Cell(4,7,':',0,0,'l',1);
$pdf->Cell(80,7,$row['stud_email'],0,1,'l',1);
$pdf->Cell(52,7,'Phone No.',0,0);
$pdf->Cell(4,7,':',0,0);
$pdf->Cell(80,7,$row['mobile'],0,1);
$pdf->Cell(52,7,'Course',0,0,'l',1);
$pdf->Cell(4,7,':',0,0,'l',1);
$pdf->Cell(80,7,$row['course_name'],0,1,'l',1);
$pdf->Cell(52,7,'Learning Partner',0,0);
$pdf->Cell(4,7,':',0,0);
$pdf->Cell(80,7,$row['learning_partner'],0,1);
$pdf->Cell(52,7,'Course Fee',0,0,'l',1);
$pdf->Cell(4,7,':',0,0,'l',1);
$pdf->Cell(80,7,$row['price'],0,1,'l',1);
$pdf->Cell(52,7,'Venue',0,0);
$pdf->Cell(4,7,':',0,0);
$pdf->Cell(134,7,$row['venue'],0,1);
$pdf->Cell(52,7,'Transaction ID.',0,0,'l',1);
$pdf->Cell(4,7,':',0,0,'l',1);
$pdf->Cell(134,7,$row['transaction_id'],0,1,'l',1);
$pdf->Image('abcd.png',2,130,-90);
$pdf->Image($row['stud_image'],155,59,35,43);	
$pdf->Image($row['stud_image'],159,237,33,40);	


$pdf->SetLineWidth(0.5);
$pdf->Line(10,213,200,213);
$pdf->Cell(0,95,'',0,1);
$pdf->Cell(0,7,'(For Student Use Only)',0,1,'C');
$pdf->Cell(0,11,'',0,1);
$pdf->Cell(52,5.5,'Enrollment ID',0,0,'l',1);
$pdf->Cell(4,5.5,':',0,0,'l',1);
$pdf->Cell(80,5.5,$row['enroll_id'],0,1,'l',1);


$pdf->Cell(52,5.5,'Student ID',0,0);
$pdf->Cell(4,5.5,':',0,0);
$pdf->Cell(80,5.5,$row['stud_id'],0,1);
$pdf->Cell(52,5.5,'Name',0,0,'l',1);
$pdf->Cell(4,5.5,':',0,0,'l',1);
$pdf->Cell(80,5.5,$row['stud_name'],0,1,'l',1);
$pdf->Cell(52,5.5,'Phone No.',0,0);
$pdf->Cell(4,5.5,':',0,0);
$pdf->Cell(80,5.5,$row['mobile'],0,1);
$pdf->Cell(52,5.5,'Course',0,0,'l',1);
$pdf->Cell(4,5.5,':',0,0,'l',1);
$pdf->Cell(80,5.5,$row['course_name'],0,1,'l',1);
$pdf->Cell(52,5.5,'Course Fee',0,0);
$pdf->Cell(4,5.5,':',0,0);
$pdf->Cell(80,5.5,$row['price'],0,1);
$pdf->Cell(52,5.5,'Venue',0,0,'l',1);
$pdf->Cell(4,5.5,':',0,0,'l',1);
$pdf->Cell(80,5.5,$row['venue'],0,1,'l',1);
$pdf->Rect(9.5,234.5,191,47, '');


$pdf->Image('stheader.png',10,215,-250);



ob_end_clean();

$pdf->Output();
}
ob_end_flush();
?>
