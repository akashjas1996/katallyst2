<section>
        <h2 class="my-5 h3 text-center">...and even more</h2>
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