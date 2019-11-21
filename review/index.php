<?php session_start(); ?>
<?php include '../inc/dbconnection.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Reviews | Katallyst</title>
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
    
      

      <div class="container mt-5">


  <!--Section: Content-->
  <section class="team-section text-center dark-grey-text">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">
        
        <?php 
        if(isset($_GET['course']))
        $course_id = $_GET['course'];
      else
        $course_id=79;

          $query_course_name = "SELECT * FROM course_learning_details WHERE course_id='$course_id'";
          $res_course_name = mysqli_query($link, $query_course_name);
          $row_course_name = mysqli_fetch_assoc($res_course_name);
          echo $row_course_name['course_name'];
          ?>
    </h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5"></p>

      

    <!--Grid row-->
    <div class="row text-center">

      <?php 

      $query_feedback = "SELECT * FROM tbl_feedback WHERE course_id='$course_id' AND verified=1";
      $res_feedback = mysqli_query($link, $query_feedback);
      while($row_feedback = mysqli_fetch_assoc($res_feedback)){
     ?>
      <?php 
      $stud_id = $row_feedback['stud_id'];
        $student_info = "SELECT * FROM student_info WHERE stud_id = '$stud_id'";
        $res_student_info = mysqli_query($link, $student_info);
        $row_student_info = mysqli_fetch_assoc($res_student_info);
      ?>  
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img style="width: 20%" src="../img/students/default_user.png">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">

            <?php echo $row_student_info['stud_name'] ?>
              

            </h4>
          <!-- <h6 class="font-weight-bold blue-text my-3">Web Designer</h6> -->
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i><?php echo $row_feedback['review'] ?></p>
          <!--Review-->
          <?php $rating = $row_feedback['rating'];
            if($rating==5){
              echo ' <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
          </div>';
            }
            else if($rating==4){
                echo '
                <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
             </i>
          </div>
                ';
            }

            else if($rating==3){
                echo '
                <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
             </i>
          </div>
                ';
            }

            else if($rating==2){
                echo '
                <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
             </i>
          </div>
                ';
            }

            else if($rating==1){
                echo '
                <div class="orange-text">
            <i class="fas fa-star"> </i>
             </i>
          </div>
                ';
            }
           ?>
         
        </div>

      </div>
    <?php } ?>

    </div>
    <!--Grid row-->

  </section>
  <!--Section: Content-->


</div>
  

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