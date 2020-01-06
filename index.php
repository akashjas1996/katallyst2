<?php include 'inc/dbconnection.php';
   // session_start();
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
      <link rel="icon" href="img/favicon.png">
      <style type="text/css">



    @media only screen and (max-width: 900px) {
  .only_for_mobile {
    display: block !important;
  }
  .only_for_desktop{
    display:none !important;
  }
}


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
         .br{
         border:1px solid black;
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
         .radius{

         }
         .gradient{
         body {
         background: #eb01a5;
         background-image: url("IMAGE_URL"); /* fallback */
         background-image: url("IMAGE_URL"), linear-gradient(#eb01a5, #d13531); /* W3C */
         }
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
                        <a class="nav-link" href="https://katallyst.com/dashboard/"">'.$_SESSION['name'].'</a>
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
               <ul class="navbar-nav nav-flex-icons">
                  <li class="nav-item">
                     <a href="https://www.facebook.com/katallyst" class="nav-link" target="_blank">
                     <i class="fab fa-facebook-f"></i>
                     </a>
                  </li>
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
      <!-- <div class="view full-page-intro" style="background-image: url('img/fullscreen-slider.jpg'); background-repeat: no-repeat; background-size: cover;"> -->

      <div class="view full-page-intro" style="background-image: linear-gradient(to bottom, rgba(200, 200, 200, 0.0), rgba(225, 225, 245, 0.8)),
         url('img/fullscreen-slider_new.jpg'); background-repeat: no-repeat; background-size: cover;">
         <!--     linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
            url('images/background.jpg'); -->
         <!-- Mask & flexbox options-->
         <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div style="" class="container ">
               <!--Grid row-->
               <div class="row wow">
                  <!--Grid column-->
                  <div style="margin-top:70vh; margin-bottom: 20vh" class="col-md-12 mb-4 white-text text-center text-md-left">
                     <div class="row only_for_desktop">
                      <?php
                      $count=1;
                      $q_course = "SELECT * FROM course_learning_details WHERE sp=1";
                      $res_course = mysqli_query($link, $q_course);
                      while($row_course=mysqli_fetch_assoc($res_course)){
                      ?>
                        <div style="max-height: auto" class="col-lg-3 col-md-3 col-3">
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="courses/<?php echo $row_course['course_image'] ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div  class="card-body">

    <!-- Title -->
    <h6 style="color: black" class="card-title"><?php echo $row_course['course_name'] ?></h6>
    <!-- Text -->
    
    <!-- Button -->
    <!-- <a href="#" class="btn btn-primary">Button</a> -->

  </div>

</div>
<!-- Card -->
                           <!-- Card -->
                        </div>

                        <?php
                      }
                        ?>
                     </div>
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
            <hr class="my-5">
            <div style="display: none" class="container only_for_mobile">
              <div class="row">
                  <div  class="col-md-12 mb-4 white-text text-center text-md-left">
                     <div class="row">
                      <?php
                      $count=1;
                      $q_course = "SELECT * FROM course_learning_details WHERE sp=1";
                      $res_course = mysqli_query($link, $q_course);
                      while($row_course=mysqli_fetch_assoc($res_course)){
                      ?>
                        <div style="max-height: auto; margin-bottom: 20px" class="col-lg-3 col-md-12 col-12">
<div class="card">
  <!-- Card image -->
  <div class=" overlay">
    <img class="card-img-top" src="courses/<?php echo $row_course['course_image'] ?>" alt="Card image cap">
    <a href="#!">
      <!-- <div class="mask rgba-white-slight"></div> -->
    </a>
  </div>

  <!-- Card content -->
  <div  class="card-body">

    <!-- Title -->
    <h6 style="color: black" class="card-title"><?php echo $row_course['course_name'] ?></h6>
    <!-- Text -->
    
    <!-- Button -->
    <!-- <a href="#" class="btn btn-primary">Button</a> -->

  </div>

</div>
<!-- Card -->
                           <!-- Card -->
                        </div>

                        <?php
                      }
                        ?>
                     </div>
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

            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                   <div class="card">
                   <div style="background-color: #424e66;" class=" radius card-body br">
                                 <!-- Title -->
                                 <h4 class="card-title"><a href="about/?type=academics" style="color:white">Academics</a></h4>
                                 <!-- Text -->
                                  <a href="about/?type=academics">
                                 <p  style="color:white" class="card-text">Holistic development of students making them Industry 4.0 ready with various technologies and soft skills.</p>
                               </a>
                                 <!-- Button -->
                              </div>
                            </div>
                </div>

                <div class="col-lg-4">

                   <div class="card">
                    <div style="background-color: #424e66;" class="card-body">
                                 <!-- Title -->
                                 <h4 class="card-title"><a href="about/?type=internship" style="color:white">Internships</a></h4>
                                 <!-- Text -->
                                  <a href="about/?type=internship">
                                 <p style="color: white" class="card-text">International/National internship being facilitated with latest industry trend along with predictive blend of NEXTGEN TECHNOLOGIES.</p>
                               </a>
                                 <!-- Button -->
                              </div>
                            </div>

                </div>

                <div class="col-lg-4">
                   <div class="card">
                   <div style="background-color:#424e66;" class="card-body">
                                 <!-- Title -->
                                 
                                 <h4 style="color: white!important" class="card-title"><a style="color:white" href="about/?type=corporate">Corporate</a></h4>
                                 <!-- Text -->
                                 <a href="about/?type=corporate">
                                 <p style="color: white" class="card-text">
To enhance the requisite competency of technology in short span of time with a definite outcome.</p>
                                </a>
                                 <!-- Button -->
                              </div>
                            </div>


                </div>
              </div>


            </div>
            <section>
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
   </body>
</html>