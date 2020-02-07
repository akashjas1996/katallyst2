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

  <br>
  <main>


    <div class="container">
      <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">

          <!-- Material form login -->
<div class="card">

  <?php 
    if(isset($_POST['sign_in_pressed'])){
      $email =  $_POST['email'];
      $name =  $_POST['name'];
      $password1 = $_POST['password1'];
      $password2 = $_POST['password2'];
      if($password1!=$password2){

        echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Different Password!","Password and Confirm password are different.","warning");';
      echo '}, 1000);
      </script>';

    echo '<script>window.setTimeout(function(){

        window.location.assign("../student/");

    }, 5000)</script>';

      }
      $password1 = md5($password1);
      $mobile = $_POST['mobile'];
      $login_query=$link->prepare("INSERT INTO student_info(stud_email, stud_name, password, mobile) VALUES(?,?,?,?)");
      $login_query->bind_param('ssss', $email, $name, $password1, $mobile );
      $login_query->execute();

       echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Registered!","Login now","success");';
      echo '}, 800);
      </script>';

    echo '<script>window.setTimeout(function(){

        window.location.assign("../student/");

    }, 5000)</script>';

      // $res_query = mysqli_query($link, $login_query);
      // $row_query = mysqli_fetch_assoc($res_query);
      // if(mysqli_num_rows($res_query)==1){
      //   echo "Login Success";
      //   $_SESSION['userid'] = $row_query['stud_id'];
      //   $_SESSION['name'] = $row_query['stud_name'] ;
      //   redirect('../login/');
      // }
      // else{
      //   echo "Login Failed";
      // }
    }
   ?>

  <h5 class="card-header danger-color white-text text-center py-4">
    <strong>Registration</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="POST" class="text-center" style="color: #757575;" action="">

      <!-- Name -->
       <!-- Email -->
      <div class="md-form">
        <input name="name" type="text" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">Name</label>
      </div>

      <!-- Email -->
      <div class="md-form">
        <input name="email" type="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input name="password1" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>
<!-- Confirm password -->
       <div class="md-form">
        <input name="password2" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Confirm Password</label>
      </div>


       <div class="md-form">
        <input name="mobile" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Mobile</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
        </div>
      </div>

      <!-- Sign in button -->
      <button name="sign_in_pressed" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-1" type="submit">Register</button>
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
      </div>
    </div>
    </div>
<br><br>
  <?php include '../inc/footer.php' ?>
  </main>
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