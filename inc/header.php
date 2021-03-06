<!-- <nav class="navbar navbar-dark primary-color justify-content-between"
    style="background-color: transparent !important; height: 100px">
    <div class="navbar-brand" href="#"><img src="img/logo_2x.png" alt="logo"></div>
    <form class="form-inline my-1">

      <div class="md-form form-sm my-0">
        <input style="color: black !important; border-bottom:2px solid black"
          class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
      </div>
      <button style="background-color: #eb494e !important" class="btn btn-outline-white btn-sm my-0"
        type="submit">Search</button>
    </form>
  </nav> -->
<head> <link rel="icon" href="../img/favicon.png"> </head>
  <!--Navbar-->
<nav style="background-color: transparent !important;" class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <div class="navbar-brand" href="#"><img src="../img/logo_2x.png" alt="logo"></div>

  <!-- Collapse button -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 -->
   
  </div>
  <!-- Collapsible content -->

</nav>
  <!--Navbar -->
<nav style="height: 80px" class="mb-1 navbar navbar-expand-lg navbar-dark danger-color sticky-top ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div style="z-index: 6" class="collapse navbar-collapse danger-color" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../countact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=../courses>Courses</a>
      </li>


      <?php if(isset($_SESSION['userid'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="../student"><?php echo $_SESSION['name'] ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../logout/">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../project/ideation.php">Project Ideation</a>
          </li>

      <?php } 
      else{ ?>

        <li class="nav-item">
            <a class="nav-link" href="../login">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../register">Register</a>
          </li>

      <?php }?>
     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a target="_blank" href="https://www.facebook.com/katallyst/" class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="../cart/" class="nav-link waves-effect waves-light">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <?php if(isset($_SESSION['userid'])) 
            echo '<a style="font-weight:bold" class="dropdown-item" href="../student">'.$_SESSION["name"].'</a>';
            echo '<a class="dropdown-item" href="../logout">LOGOUT</a>';
          ?>
        </div>
      </li>
    </ul>
  </div>
</nav>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5df52a4543be710e1d221b5e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--/.Navbar -->