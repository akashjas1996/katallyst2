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


function manipulate_mobile($str){
  $str = substr($str, 7,10);
  $str = 'xxxxxxx'.$str;
  return($str);
}

include '../inc/redirection.php';
$mobile=0;


    if(isset($_POST['verify_pressed'])){
      echo "Loading... Please wait.";
      $email =  $_POST['email'];
      if(isset($_SESSION['forget_uid'])){
        $email = $_SESSION['forget_uid'];
      }
      else{
        $_SESSION['forget_uid'] = $email;
      }
      $login_query = "SELECT * FROM student_info WHERE stud_email='$email'";
      $res_query = mysqli_query($link, $login_query);
      $row_query = mysqli_fetch_assoc($res_query);
      $mobile = $row_query['mobile'];

              $fourdigitrandom = rand(1000,9999); 
              $query_to_db = "UPDATE student_info SET mob_otp='$fourdigitrandom' WHERE stud_email='$email'";
              $res_to_db = mysqli_query($link, $query_to_db);





  $kid = $email;
  $otp =  $fourdigitrandom;
  $mbl = $mobile;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?template=hello&otp=".$otp."&otp_length=4&otp_expiry=10&sender=KATLYST&message=".$otp." is the mobile Verification code for KATALLYST. &mobile=".$mbl."&authkey=302677A7wYMfP8z5dc3ffa5",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
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
    if(isset($_POST['otp_pressed'])){
      $otp =  $_POST['otp'];
      // echo $otp;
      $pass2 = $_POST['pass2'];
      $pass3 = $_POST['pass3'];
      if($pass2!=$pass3){
         echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Different Password!","Password and Confirm Password are not same.","warning");';
      echo '}, 1000);
      </script>';

      echo '<script>window.setTimeout(function(){

        window.location.assign("../forgot/");

    }, 5000)</script>';
      }
      else{
        $email = $_SESSION['forget_uid'];
        $query_get_otp = "SELECT * FROM student_info WHERE stud_email='$email'";
        $res_get_otp = mysqli_query($link, $query_get_otp);
        $row_get_otp = mysqli_fetch_assoc($res_get_otp);

        if($row_get_otp['mob_otp'] == $otp){
          $pass2 = md5($pass2);
          $query_update_pass = "UPDATE student_info SET password='$pass2'";
          $res_update_pass = mysqli_query($link, $query_update_pass);
           echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Password saved!","Password changed successfully, Please Login.","success");';
      echo '}, 1000);
      </script>';

      echo '<script>window.setTimeout(function(){

        window.location.assign("../logout/tologin.php");

    }, 5000)</script>';
        }
        else{
               echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Verification failed!","Please try again.","warning");';
      echo '}, 1000);
      </script>';

      echo '<script>window.setTimeout(function(){

        window.location.assign("../forgot/");

    }, 5000)</script>';
        }
      }
      // $login_query = "SELECT * FROM student_info WHERE stud_email='$email' AND password='$password'";
      // $res_query = mysqli_query($link, $login_query);
      // $row_query = mysqli_fetch_assoc($res_query);
    }
   ?>

  <h5 class="card-header danger-color white-text text-center py-4">
    <strong>Verify Mobile</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">



    <!-- Form -->
    <form id="after_otp" method="POST" class="text-center" style="color: #757575;" action="">

      <br>

       <div class="md-form">
       <p> OTP has been sent to your registered number. <?php echo manipulate_mobile($mobile) ?> </p>
      </div>

      <!-- OTP -->
      <div class="md-form">
        <input name="otp" type="text" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">OTP</label>
      </div>

       <div class="md-form">
        <input name="pass2" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Create Password</label>
      </div>

       <div class="md-form">
        <input name="pass3" type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Confirm Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
        </div>
      </div>

      <!-- Sign in button -->
      <button name="otp_pressed" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-1" type="submit">Verify</button>
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