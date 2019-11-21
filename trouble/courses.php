 <?php $query_course = "SELECT * FROM course_learning_details";
        $res_course = mysqli_query($link, $query_course);
        while($row_course = mysqli_fetch_assoc($res_course)){
         ?>
        <div style="margin-bottom:40px" class="col-lg-4">
          <!-- Card -->
          <div class="card">
            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="https://katallyst.com/katallyst_admin/<?php echo $row_course['course_image'] ?>"
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
              <a href="view" class="btn btn-primary">DETAILS</a>
            </div>
          </div>
        </div>
        <!-- End of card -->
        <?php 
      } ?>