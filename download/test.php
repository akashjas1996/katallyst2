 <?php 
 	
	if(!empty($_SESSION["sname"])){
		echo '<h1> $_SESSION["sname"]; </h1>'; 
	}
	else{
		echo '<li><a href="login.php" title="Login / Register Now"><i class="fa fa-user"></i>Login<span> | </span>Register</a></li>';
	}
?>