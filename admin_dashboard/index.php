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
   
   
   include '../inc/redirection.php';
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>ADMIN | Katallyst</title>
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
      <?php include '../inc/admin_header.php' ?>
      <header>
      </header>
      <br><br>
      <main>
         <div class="container">
            <div class="row">
               <div class="container-fluid my-5 py-5">

  <!-- Section: Block Content -->
  <section>
    
    <style>
      .footer-hover {
        background-color: rgba(0, 0, 0, 0.1);
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
      }

      .footer-hover:hover {
        background-color: rgba(0, 0, 0, 0.2)
      }

      .text-black-40 {
        color: rgba(0, 0, 0, 0.4)
      }
    </style>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-3 mb-4">

        <!-- Card -->
        <div class="card primary-color white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0">50</p>
              <p class="mb-0">Learning Partners</p>
            </div>
            <div>
              <i class="fas fa-handshake fa-4x text-black-40"></i>
            </div>
          </div>
          <a href="../admin_partners/" class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-3 mb-4">

        <!-- Card -->
        <div class="card warning-color white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0">90</p>
              <p class="mb-0">Courses</p>
            </div>
            <div>
              <i class="fas fa-chart-bar fa-4x text-black-40"></i>
            </div>
          </div>
          <a href="../admin_courses/" class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-3 mb-4">

        <!-- Card -->
        <div class="card light-blue lighten-1 white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0">1444</p>
              <p class="mb-0">Students</p>
            </div>
            <div>
              <i class="fas fa-user-plus fa-4x text-black-40"></i>
            </div>
          </div>
          <a href="../admin_students/" class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-3 mb-4">

        <!-- Card -->
        <div class="card red accent-2 white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0">65</p>
              <p class="mb-0">Payments</p>
            </div>
            <div>
              <!-- <i class="fa fa-money fa-4x text-black-40"></i> -->
              <i class="fas fa-money-bill-alt fa-4x text-black-40"></i>
            </div>
          </div>
          <a href="../admin_payments/" class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Block Content -->

</div>
            </div>
         </div>
         <div style="position:absolute; width:100%;bottom: 0px">
         <?php include '../inc/footer.php'?>
       </div>
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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   </body>
</html>