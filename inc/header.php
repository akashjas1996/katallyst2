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

  <!--Navbar-->

  <head>
<style>
    $shopping-cart-red: #DF0000;

.fa-stack[data-count]:after{
  position:absolute;
  right:0%;
  top:0%;
  content: attr(data-count);
  font-size:40%;
  padding:.6em;
  border-radius:999px;
  line-height:.75em;
  color: white;
  color:$shopping-cart-red;
  text-align:center;
  min-width:2em;
  font-weight:bold;
  background: white;
  border-style:solid;
}
.fa-circle {
  color:#DF0000;
}

.red-cart {
  color: #DF0000; background:white;
}

</style>
  </head>
<nav style="background-color: transparent !important;" class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <div class="navbar-brand" href="#"><img src="../img/logo_2x.png" alt="logo"></div>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    
    <!-- Links -->

   
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
        <a class="nav-link" href="./">Home
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
            <a class="nav-link" href="../logout">Logout</a>
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
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
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
            echo '<a class="dropdown-item" href="../dashboard">LOGOUT</a>';
          ?>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->