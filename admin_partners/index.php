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
               <div class="col-lg-4">
                  <div class="card">
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
                        <a href="admin_partners/">
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>
                     <!-- Card content -->
                     <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">Partner 1</h4>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Button</a>
                     </div>
                  </div>
                  <!-- Card -->
               </div>

               <div class="col-lg-4">
                  <div class="card">
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
                        <a href="admin_courses/">
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>
                     <!-- Card content -->
                     <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">Partner 2</h4>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Button</a>
                     </div>
                  </div>
                  <!-- Card -->
               </div>

               <div class="col-lg-4">
                  <div class="card">
                     <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
                        <a href="admin_students/">
                           <div class="mask rgba-white-slight"></div>
                        </a>
                     </div>
                     <!-- Card content -->
                     <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">Partner 3</h4>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Button</a>
                     </div>
                  </div>
                  <!-- Card -->
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