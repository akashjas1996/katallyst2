<?php session_start(); ?>
<?php include '../inc/dbconnection.php';
include '../inc/redirection.php';

function manipulate_title($str){
  $count = strlen($str);
  if($count>24){
    $str = substr($str, 0, 21);
    $str=$str.'...';
  }

  return($str);

}

// include '../inc/adminlogincheck.php';

if(isset($_SESSION['admin_username'])==false){
  redirect('https://katallyst.com/admin/');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>COURSES ADMIN | Katallyst</title>
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
  <!--Main Navigation-->

  <!--Main layout-->

  <br><br>

  <main>





    <div class="container" style="margin-bottom: 120px">
      <div class="row">

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Search form -->
<form class="form-inline md-form form-sm">
  <input onkeyup="search_input(this.value)" class="form-control form-control-sm mr-3 w-40" type="text" placeholder="Search"
    aria-label="Search">
  <i class="fas fa-search" aria-hidden="true"></i>
</form>
            </div>
         
          </div>
        </div>
        <!-- start of card -->
       <!--?php include 'courses.php'; ?-->
       <!--div style="width: 100%; border:1px solid black"--> 
       <div class="container" style="margin-bottom: 120px">
      <div class="row">
        <div class="row" id="output">
      </div>
        </div>

        <div id="intial_disp" class="row">
          <?php include 'courses.php' ?>
        </div>
      </div>
        
       <hr style="color: black">        
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

  <script type="text/javascript">
    function search_input(str){
      document.getElementById('intial_disp').style.display="none";
      console.log(str);
      if(str!='')
    {
      load_data(str);
    }
    else
    {
      load_data();      
    }
    }

    function load_data(query)
  {
    $.ajax({
      url:"../admin_courses/fetch_course.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#output').html(data);
      }
    });
  }
  </script>
</body>

</html>