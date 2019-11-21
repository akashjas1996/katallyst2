<?php
  include 'redirection.php';
  if(isset($_SESSION['userid'])){
  }
  else{
    redirect('../login/');
  }
 ?>