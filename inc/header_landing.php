
<head> <link rel="icon" href="../img/favicon.png"> </head>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light white sticky-top">

  <div class="container"> 

    <a class="navbar-brand" href="#">
      <img src="img/logo_2x.png" height="50" alt="mdb logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../countact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=../courses>Courses</a>
      </li>

      <?php if(isset($_SESSION['userid'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="../student">Dashboard</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../logout">Logout</a>
          </li>

      <?php } 
      else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="../register">Register</a>
          </li>

      <?php }?>


      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li> 
        <li class="nav-item">
          <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect"
             >
            <i class="fab fa-github"></i>
          </a>
        </li>

        <?php if(isset($_SESSION['userid'])){ ?>
        <li class="nav-item">
          <a href="../student/"
             class="nav-link border border-light rounded waves-effect mr-2">
            <i class="fas fa-envelope mr-1"></i><?php echo $_SESSION['name'] ?>
          </a>
        </li>

      <?php } ?>
      </ul>

    </div>

  </div>

</nav>

<!--/.Navbar-->




<!--/.Navbar -->