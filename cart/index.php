<?php session_start(); ?>
<?php include '../inc/dbconnection.php';

function manipulate_title($str){
  $count = strlen($str);
  if($count>24){
    $str = substr($str, 0, 21);
    $str=$str.'...';
  }

  return($str);

}

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


if(isset($_POST['del_course'])){
  $del_course_id = $_POST['del_course_id'];
  $query_del_course_id = "DELETE FROM tbl_enrollment WHERE enroll_id='$del_course_id'";
  $res_course_id = mysqli_query($link, $query_del_course_id);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>COURSES | Katallyst</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">
  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #fff0f0">

  <!-- Start your project here-->
  <!--Main Navigation-->


  <?php include '../inc/header.php';
  // if(!isset($_GET['crs'])){
  //   redirect('../courses');
  // }
  // else{
  //   $course_id = $_GET['crs'];
  //   $query_course = "SELECT * FROM course_learning_details WHERE course_id=$course_id";
  //   $res_course = mysqli_query($link, $query_course);
  //   $row_course = mysqli_fetch_assoc($res_course);
  // }
  ?>
  <header>

  </header>

  <br><br>
  <main>

<?php 
$stud_id = $_SESSION['userid'];
$query_en = "SELECT * FROM tbl_enrollment WHERE payment_status!=1 AND stud_id='$stud_id'";
$res_en = mysqli_query($link, $query_en);
if(mysqli_num_rows($res_en)==0){
  echo '    <div class="container my-5 py-5 z-depth-0">

 
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            
            <!--Grid column-->

           
    
            <!--Grid column-->
            <div class="col-lg-12 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <i style="opacity:50%" class="fas fa-book fa-10x" aria-hidden="true"></i>
            </div>

             <div style="margin-left:20vw; margin-top:10%" class="row">
              <h2 style="color:gray"> No Course choosen. </h2>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
    
    
        </section>
        <!--Section: Content-->
    
    
      </div>
';
}
else{
  while($row_en = mysqli_fetch_assoc($res_en)){
 ?>

      <div class="container my-5 py-5 z-depth-1">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
          <?php 
            $enrolled_course_id = $row_en['course_id'];
            $query_course_image = "SELECT * FROM course_learning_details WHERE course_id='$enrolled_course_id'";
              $res_course_image = mysqli_query($link, $query_course_image);
              $row_course_image = mysqli_fetch_assoc($res_course_image);
              $course_image = $row_course_image['course_image'];
              // echo $course_image;
           ?>

          <img src="https://katallyst.com/katallyst_admin/<?php echo $course_image ?>" class="img-fluid" alt="">
        </div>
        <!--Grid column-->
       
        <!--Grid column-->
        <div class="col-lg-8 mb-4 mb-lg-0">

          <h3 class="font-weight-bold"><?php echo $row_en['course_name'] ?></h3>

           <i class="fa fa-money" aria-hidden="true"></i> &nbsp;
          <p style="display: inline-block" class="font-weight-bold">₹<?php echo $row_en['fee'] ?></p>

          <p class="text-muted"><?php echo $row_course_image['description'] ?></p>
         
          <button style="color: white" onclick="payment_action('<?php echo $row_en['enroll_id'] ?>')" type="button" class="btn info-color btn-rounded mx-0"> PAY NOW </button>

          <form style="display: inline" action="" method="POST">
            <input type="hidden" name="del_course_id" value="<?php echo $row_en['enroll_id'] ?>">
          <button name="del_course" type="submit" style="color: white" type="button" class="btn danger-color btn-rounded mx-0"> REMOVE </button>
        </form>


           <div id="payment_hidden_buttons<?php echo $row_en['enroll_id'] ?>" style="display: inline-block; display: none">
            <button type="button" class="btn btn-outline-primary waves-effect">OFFLINE</button>
            <button type="button" class="btn btn-outline-default waves-effect">ONLINE</button>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!--Section: Content-->


  </div>



<?php 
  } //while loop
} //else condition
?> 

  <br><br>
  <?php include '../inc/footer.php' ?>
  </main>

  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  <script src="js/addons/rating.js"></script>


  <script type="text/javascript">
    function payment_action(a){
      a = 'payment_hidden_buttons'+a;
      if(document.getElementById(a).style.display==="none")
        document.getElementById(a).style.display="block";
      else{
        document.getElementById(a).style.display="none";
      }
    }
  </script>
</body>

</html>