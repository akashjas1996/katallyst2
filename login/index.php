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


    <div style="min-height: 70vh" class="container">
      <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">

          <!-- Material form login -->
<div class="card">

  <?php 
    if(isset($_POST['sign_in_pressed'])){
      $email =  $_POST['email'];
      $password = $_POST['password'];
      $password = md5($password);
      $login_query = "SELECT * FROM student_info WHERE stud_email='$email' AND password='$password'";
      $res_query = mysqli_query($link, $login_query);
      $row_query = mysqli_fetch_assoc($res_query);
      if(mysqli_num_rows($res_query)==1){
        echo "Login Success";
        $_SESSION['userid'] = $row_query['stud_id'];
        $_SESSION['name'] = $row_query['stud_name'] ;
        redirect('../student/');
      }
      else{
        echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Invalid Credentials!","Check username and password","warning");';
      echo '}, 1000);
      </script>';
      }

    }
   ?>

  <h5 class="card-header danger-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="POST" class="text-center" style="color: #757575;" action="">

      <br>
      <!-- Email -->
      <div class="md-form">
        <input name="email" type="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input name="password" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="../forgot/">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button name="sign_in_pressed" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-1" type="submit">Sign in</button>
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->


      </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
  </script>
</body>

</html>