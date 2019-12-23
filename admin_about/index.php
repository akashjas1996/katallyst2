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

   if(isset($_POST['vertical_update'])){
    $aca =  $_POST['academics'];
    $intn =  $_POST['internship'];
    $corp =  $_POST['corporate'];

    $sql_upd1 = "UPDATE Verticals SET details='$aca' WHERE name='Academics'";
    $sql_upd2 = "UPDATE verticals SET details='$intn' WHERE name='Internship'";
    $sql_upd3 = "UPDATE verticals SET details='$corp' WHERE name='Corporate'";

    // echo $sql_upd1;
    // echo '<br>';
    // echo $sql_upd2;
    // echo '<br>';
    // echo $sql_upd3;

    $res_upd1 = mysqli_query($link, $sql_upd1);
    $res_upd2 = mysqli_query($link, $sql_upd2);
    $res_upd3 = mysqli_query($link, $sql_upd3);
   }
    

  $query_read1 = "SELECT * FROM verticals WHERE name='Academics'";
  $res_read1 = mysqli_query($link, $query_read1);
  $row_read1 = mysqli_fetch_assoc($res_read1);
  $query_read2 = "SELECT * FROM verticals WHERE name='Internship'";
  $res_read2 = mysqli_query($link, $query_read2);
  $row_read2 = mysqli_fetch_assoc($res_read2);
  $query_read3 = "SELECT * FROM verticals WHERE name='Corporate'";
  $res_read3 = mysqli_query($link, $query_read3);
  $row_read3 = mysqli_fetch_assoc($res_read3);


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
        <div class="col-lg-12">

          <!-- Material form login -->
<div class="card">

  <h5 class="card-header danger-color accent-3 white-text text-center py-4">
    <strong>About Verticals</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="" METHOD="POST">

      <!-- Email -->
      <div class="md-form">
        <h3 align="left" >Academics</h3>
        <textarea name="academics" rows="auto" placeholder="Academics" id="materialLoginFormEmail" class="form-control"><?php echo $row_read1['details'] ?></textarea>
      </div>

       <div class="md-form">
        <h3 align="left" >Internship</h3>
        <textarea name="internship" rows="auto" placeholder="Internship" id="materialLoginFormEmail" class="form-control"><?php echo $row_read2['details'] ?></textarea>
      </div>

       <div class="md-form">
        <h3 align="left" >Corporates</h3>
        <textarea name="corporate" rows="auto" placeholder="Corporates" id="materialLoginFormEmail" class="form-control"><?php echo $row_read3['details'] ?></textarea>
      </div>

      <button class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" name="vertical_update" type="submit">Save</button>

    </form>
    <br> <br> <br> <br>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->


        </div>
    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Block Content -->

</div>
            </div>
         </div>
         <div style="position:absolute; width:100%;bottom: 0px">
         
       </div>
      </main>
      <?php include '../inc/footer.php'?>
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

      <!-- Example autosize.js CDN Reference -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
<script>
    // Automatically size all of your <textarea> elements as you type
    autosize(document.querySelectorAll('textarea'));
</script>


   </body>
</html>