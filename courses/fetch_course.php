<?php
include '../inc/dbconnection.php';





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




$output = '';
if(isset($_POST["query"]))
{
	$q1 = $_POST['query'];
	$search = mysqli_real_escape_string($link, $_POST["query"]);
	$query = "
	SELECT * FROM course_learning_details WHERE course_name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM course_learning_details WHERE 1";
}

$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0)
{

	while($row_course = mysqli_fetch_array($result))
	{
		$output.='
        <div style="margin-bottom:40px" class="col-lg-3">
          <!-- Card -->
          <div class="card">
            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="../courses/'.$row_course["course_image"].'"
                alt="Card image cap">
              <a href="../info?crs='.$row_course["course_id"].'">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h6  class="card-title">'.$row_course["course_name"].'</h6>
              <p style="line-height: 5px" class="card-title"> ₹ '.$row_course["price"].'</p>
              <!-- Text -->
              <p class="card-text">'.$row_course["category"].'</p>
              <!-- Button -->
               <!--a href="../info?crs='.$row_course["course_id"].'" class="btn btn-primary">DETAILS</a-->

               <form action="" method="POST" style="display: inline">
                <input type="hidden" name="course_id" value='.$row_course['course_id'].'>
              <input style="margin:1px" name="buy" type="submit" value="ENROLL" class="btn btn-md btn-info"></a>
            </form>


            </div>
          </div>
        </div>
        <!-- End of card -->';
	}

	echo $output;
}
else
{	
	$query = "
	SELECT * FROM course_learning_details";
	$result = mysqli_query($link, $query);
	$row_course = mysqli_fetch_assoc($result);

$output .= '
		COURSE NOT FOUND
        ';

}

echo $output;
