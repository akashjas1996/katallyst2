<?php include 'inc/dbconnection.php';
session_start();
function manipulate($str){
  $str = substr($str, 0,80);
  $str=$str.'...';
  return($str);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KATALLYST | Lifelong Learning</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css2/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css2/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css2/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #b93a3e!important;
              }
          }
    .nav-link{
      /*color: #b93a3e!i;*/
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav style="opacity: 80%" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="https://katallyst.com">
        <!-- <strong>MDB</strong> -->
        <img src="img/logo_2x.png">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://katallyst.com">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://katallyst.com/courses/">Courses</a>
          </li>
         <?php 
         if(isset($_SESSION['userid'])){
              echo '<li class="nav-item">
            <a class="nav-link" href="https://katallyst.com/dashboard/"">'.$_SESSION['name'].' ?></a>
          </li>';

          echo '<li class="nav-item">
            <a class="nav-link" href="https://katallyst.com/logout/"">Logout</a>
          </li>';
            }

            else{
              echo '<li class="nav-item">
            <a class="nav-link" href="https://katallyst.com/login/"">Login</a>
          </li>';
            }


          ?>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/katallyst" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li> -->
          <?php if(!isset($_SESSION['userid'])){ 
            echo '<li class="nav-item">
            <a href="https://katallyst.com/register/" class="nav-link border border-light rounded"
              ">
              <i class="fas fa-user-plus"></i>Register
            </a>
          </li>';
          }


          ?>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('img/fullscreen-slider.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <center> <img style="width: 80%" src="img/logo_2x.png"></center>

            <!--h1 class="display-4 font-weight-bold">Learn Bootstrap 4 with MDB</h1-->

            <hr class="hr-light" style="width: 70%">

            <p>
              <center> <strong>Lifelong Learning</strong> </center>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong></strong>
            </p>
            <center>
            <a href="register/" class="btn btn-danger btn-lg">Register now
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>
          </center>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <!--div class="col-md-6 col-xl-5 mb-4">


            <div class="card">


              <div class="card-body">


                <form name="">

                  <h3 class="dark-grey-text text-center">
                    <strong>Write to us:</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control">
                    <label for="form3">Your name</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea"></textarea>
                    <label for="form8">Your message</label>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-indigo">Send</button>
                    <hr>
                    <fieldset class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkbox1">
                      <label for="checkbox1" class="form-check-label dark-grey-text">Subscribe me to the newsletter</label>
                    </fieldset>
                  </div>

                </form>


              </div>

            </div>


          </div-->


        </div>


      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <!-- <section class="mt-5 wow fadeIn">


        <div class="row">


          <div class="col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>



          <div class="col-md-6 mb-4">


            <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
            <p>This template is created with Material Design for Bootstrap (
              <strong>MDB</strong> ) framework.</p>
            <p>Read details below to learn more about MDB.</p>

            <hr>

            <p>
              <strong>400+</strong> material UI elements,
              <strong>600+</strong> material icons,
              <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
              <strong>Free for personal and commercial use.</strong>
            </p>


            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-indigo btn-md">Download
              <i class="fas fa-download ml-1"></i>
            </a>
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/components/" class="btn btn-indigo btn-md">Live demo
              <i class="far fa-image ml-1"></i>
            </a>

          </div>


        </div>


      </section>


      <hr class="my-5">


      <section> -->

        <h3 class="h3 text-center my-5 mb-2">CHOOSE THE BEST</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <br>
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-code fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Industry Ready</h5>
                <p class="grey-text">Learn courses that are in high demand in the industries.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Detailed Contents</h5>
                <p class="grey-text">You get the best course contents ever.
                  easily.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Best learning partners</h5>
                <p class="grey-text">We take the pain to choose the best learning partner, so you get the best.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->
          <hr class="my-5 mb-5" >
          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <p class="h5 text-center mb-2"></p>
            <img style="width: 100%" src="img/poster.jpeg">
            <!--div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe> >
            </div-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->


      </section>

      <hr class="my-5 mb-5" >
      <!--Section: Main features & Quick Start-->

      

      <!--Section: Not enough-->
      <!--section>

        <h2 class="my-5 h3 text-center">Not enough?</h2>


        <div class="row features-small mb-5 mt-3 wow fadeIn">


          <div class="col-md-4">

            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Free for personal and commercial use</h6>
                <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as commercial projects.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>



            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">400+ UI elements</h6>
                <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>



            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">600+ icons</h6>
                <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>
                <div style="height:15px"></div>
              </div>
            </div>



            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Fully responsive</h6>
                <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop, tablet or mobile phone. MDB
                  looks great on each screen.</p>
                <div style="height:15px"></div>
              </div>
            </div>

          </div>



          <div class="col-md-4 flex-center">
            <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
          </div>



          <div class="col-md-4 mt-2">

            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">70+ CSS animations</h6>
                <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your project and delight your visitors.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Plenty of useful templates</h6>
                <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
                <div style="height:15px"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Easy installation</h6>
                <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Easy to use and customize</h6>
                <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep customization. You will
                  easily adjust each component to suit your needs.</p>
                <div style="height:15px"></div>
              </div>
            </div>

          </div>


        </div>


      </section-->


      <!-- <hr class="mb-5"> -->

     
      <!--Section: More-->
     <section>
        <h2 class="my-1 h3 text-center">COURSES YOU MAY LIKE</h2>
        <div class="row features-small mt-5 wow fadeIn">
          <?php
          $query_courses = "SELECT * FROM course_learning_details ORDER BY rand() LIMIT 8";
          $res_courses = mysqli_query($link, $query_courses);
          while($row_course = mysqli_fetch_assoc($res_courses)){
           ?>
         
          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <img width="100%" src="courses/<?php echo $row_course['course_image'] ?>">
              </div>
              <div class="col-10 mb-2 pl-3">
                  <a style="display: inline-block;" href="info?crs=<?php echo $row_course['course_id'] ?>">
                <h5 class="feature-title font-bold mb-1"><?php echo $row_course['course_name'] ?></h5>
                 </a>
                <p class="grey-text mt-2"><?php echo manipulate($row_course['description']) ?>
                </p>
              </div>
            </div>
          </div>
       
          <?php } ?>
        </div>
        <div class="row features-small mt-4 wow fadeIn">
        </div>
        <!--/Second row-->

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://katallyst.com/courses" role="button">See All courses
        <i class="fas fa-pen ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://katallyst.com/register/" role="button">Register Now
        <i class="fa fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <!-- <hr class="my-4"> -->

    <!-- Social icons -->
    <!--div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div-->
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://katallyst.com"> Katallyst.com </a>
    </div>
    <!--/.Copyright-->

<!--?php include 'inc/footer.php'; ?-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
