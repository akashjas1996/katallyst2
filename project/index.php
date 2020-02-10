<?php session_start(); ?>
<?php include '../inc/dbconnection.php';
  include '../inc/logincheck.php';


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
</head>

<body style="background-color: #fff0f0">

  <!-- Start your project here-->
  <!--Main Navigation-->


  <?php include '../inc/header.php' ?>
  <header>

  </header>

  <br><br>
  <main>

    <?php 
     $std_id = $_SESSION['userid'];
    $query_course_count = "SELECT * FROM tbl_enrollment WHERE stud_id='$std_id' AND payment_status=1";
    $res_course_count = mysqli_query($link, $query_course_count);
    $count = mysqli_num_rows($res_course_count);
    if($count==0){

      echo '    <div class="container my-5 py-5 z-depth-0">

 
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            
            <!--Grid column-->

           
    
            <!--Grid column-->
            <div class="col-lg-12 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                <i style="opacity:50%" class="fas fa-file fa-10x" aria-hidden="true"></i>
            </div>

             <div style="margin-left:20vw; margin-top:10%" class="row">
              <h2 style="color:gray"> No completed course </h2>
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
      $query_course = "SELECT * FROM tbl_enrollment WHERE stud_id='$std_id' AND payment_status=1";
      $res_course = mysqli_query($link, $query_course);
      while($row_course = mysqli_fetch_assoc($res_course)){
     ?>
      <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-3 mb-4 mb-md-0">

          <!--Image-->
          <center>
          <div class="view overlay z-depth-0">
            <?php 
            $course_id = $row_course['course_id'];
            $query_course_image = "SELECT course_image from course_learning_details WHERE course_id='$course_id'";
            // echo $query_course_image;
            $res_course_image = mysqli_query($link, $query_course_image);
            $row_course_image = mysqli_fetch_assoc($res_course_image);
            $file_name = $row_course_image['course_image'];
            // echo $file_name;
            ?>
            <img src="../courses/<?php echo $file_name ?>" class="img-fluid" alt="">
          </div>
        </center>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-9 mb-4 mb-md-0">

          <h3 class="font-weight-bold"><?php echo $row_course['course_name'] ?></h3>
          <p class="font-weight-bold">


            <?php $originalDate = $row_course['c_starting_date'];
                  $newDate = date("d/m/Y", strtotime($originalDate));
                  echo $newDate ?> 
            -

            <?php $originalDate = $row_course['c_ending_date'];
                  $newDate = date("d/m/Y", strtotime($originalDate));
                  echo $newDate
             ?>
              



            </p>

          <!-- <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p> -->

          <!-- <a class="btn btn-brown btn-md ml-0" href="#" role="button">Travel<i class="fa fa-plane ml-2"></i></a> -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

        <div class="container my-1 py-2 z-depth-0">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-lg-8">

          <!--Grid row-->
          <div class="row">

            <!--First column-->
            
            <div class="col-md-3 col-6 mb-4">
              <a target="_blank" href="../download/receipt.php?enrollid=<?php echo $row_course['enroll_id'] ?>" data-toggle="tooltip" title="Download Receipt">
              <i class="fas fa-receipt fa-3x blue-text"></i>
            </a>
            </div>
         
            <!--/First column-->

            <!--Second column-->
            
            <div class="col-md-3 col-6 mb-4">
              <a href="#" data-toggle="tooltip" title="Check Progress">
              <i class="fas fa-chart-area fa-3x teal-text"></i>
            </a>
            </div>
            <!--/Second column-->

            <!--Third column-->
            
            <div class="col-md-3 col-6 mb-4">
              <a href="../review?course=<?php echo $row_course['course_id'] ?>" data-toggle="tooltip" title="Reviews">
              <i class="fas fa-comment fa-3x indigo-text"></i>
              </a>
            </div>
          
            <!--/Third column-->

            <!--Fourth column-->
            
            <div class="col-md-3 col-6 mb-4">
              <a href="#" data-toggle="tooltip" title="Download Certificate">
              <i class="fas fa-certificate fa-3x deep-purple-text"></i>
              </a>
            </div>
          
            <!--/Fourth column-->

          </div>
          <!--/Grid row-->

         <!-- Tight pants next level keffiyeh
<a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a>
haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table
seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
<a href="#" data-toggle="tooltip" title="Another tooltip">have a</a>
terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel
williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan
<a href="#" data-toggle="tooltip" title="Another one here too">whatever keytar</a>
,scenester farm-to-table banksy Austin
<a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a>
freegan cred raw denim single-origin coffee viral. -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>


    </section>


    <!--Section: Content-->


  </div>
  <?php  } }?>

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
  <script>
    // Rating Initialization
    $(document).ready(function () {
      $('#rateMe4').mdbRate();
    });

    $(function () {
$('[data-toggle="tooltip"]').tooltip()
})


  </script>
</body>

</html>