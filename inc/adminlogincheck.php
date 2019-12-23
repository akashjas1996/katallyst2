<?php
session_start();
if(!isset($_SESSION['admin_username'])){
  redirect('https://katallyst.com/admin/');
}

?>