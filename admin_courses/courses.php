 <?php 

                include '../inc/redirection.php';
 
                if(isset($_POST['buy'])){
                  $course_id = $_POST['course_id'];
                  $qex = "SELECT * FROM course_learning_details WHERE course_id='$course_id'";
                  $resx = mysqli_query($link, $qex);
                  $row_course = mysqli_fetch_assoc($resx);


                  $stud_id = $_SESSION['userid'];
                  $price = $row_course['price'];
                  $course_name = $row_course['course_name'];
                  $fee = $row_course['price'];
                  $start = $row_course['starting_date'];
                  $end = $row_course['ending_date'];

                  $query_enroll= $link->prepare("INSERT INTO tbl_enrollment(stud_id, course_id, course_name, fee, c_starting_date, c_ending_date) VALUES(?,?,?,?,?,?)");
                  $query_enroll->bind_param("sssiss", $stud_id, $course_id, $course_name, $fee, $start, $end);
                  $query_enroll->execute();
                  echo ($query_enroll->error);
                  redirect('../cart/');
                  // echo $query_enroll->error();
                }
               





 $query_course = "SELECT * FROM course_learning_details";
        $res_course = mysqli_query($link, $query_course);
        while($row_course = mysqli_fetch_assoc($res_course)){
         ?>
        <div style="margin-bottom:40px" class="col-lg-4">
          <!-- Card -->
          <div class="card">
            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="../courses/<?php echo $row_course['course_image'] ?>"
                alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title"><?php echo manipulate_title($row_course['course_name']) ?></h4>
              <h6 class="card-title"><?php echo $row_course['price'] ?></h6>
              <!-- Text -->
              <p class="card-text"><?php echo $row_course['category'] ?></p>
              <!-- Button -->
              <a href="../info?crs=<?php echo $row_course['course_id'] ?>" class="btn btn-primary">DETAILS</a>

              <form action="" method="POST" style="display: inline">
                <input type="hidden" name="course_id" value=<?php echo $row_course['course_id'] ?> >
              <input name="buy" type="submit" value="ENROLL" class="btn btn-danger"></a>
            </form>
            </div>
          </div>
        </div>
        <!-- End of card -->
        <?php 
      } ?>