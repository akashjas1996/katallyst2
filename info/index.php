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
</head>

<body style="background-color: #fff0f0">

  <!-- Start your project here-->
  <!--Main Navigation-->


  <?php include '../inc/header.php';
  if(!isset($_GET['crs'])){
    redirect('../courses');
  }
  else{
    $course_id = $_GET['crs'];
    $query_course = "SELECT * FROM course_learning_details WHERE course_id=$course_id";
    $res_course = mysqli_query($link, $query_course);
    $row_course = mysqli_fetch_assoc($res_course);
  }
  ?>
  <header>

  </header>

  <br><br>
  <main>

      <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="https://katallyst.com/katallyst_admin/<?php echo $row_course['course_image'] ?>" class="img-fluid" alt="<?php echo $row_course['course_name'] ?>">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-8 mb-4 mb-lg-0">

          <h3 class="font-weight-bold"><?php echo $row_course['course_name'] ?></h3>
          <i class="fa fa-money" aria-hidden="true"></i>
          <p style="display: inline-block" class="font-weight-bold">₹<?php echo $row_course['price'] ?></p>
         <!--  &nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-book" aria-hidden="true"></i>
           <p style="display: inline-block" class="font-weight-bold"><?php echo $row_course['learning_partner'] ?></p> -->

           &nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-clock" aria-hidden="true"></i>
           <p style="display: inline-block" class="font-weight-bold"><?php echo $row_course['duration'] ?></p>

          <p class="text-muted"><?php echo $row_course['description'] ?></p>

          <a href="../cart/"> <button type="button" class="btn btn-danger">ENROLL</button> </a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->

      <div class="container my-5 py-5 z-depth-0">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center">

      <!--Grid row-->
      <div class="row d-flex justify-content-left">

        <!--Grid column-->
        <div class="col-lg-4">
        </div>

           <div class="col-lg-8">

          <!--Grid row-->
         
          <!--/Grid row-->
          <h2 style="text-align: left">Syllabus</h2>

          <p style="text-align: left"><?php echo nl2br($row_course['syllabus']) ?></p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>


  </div>

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

  
  <script>
    // Rating Initialization
    $(document).ready(function () {
      $('#rateMe4').mdbRate();
    });
  </script>
</body>

</html>