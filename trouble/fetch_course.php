<?php
include '../inc/dbconnection.php';
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
        <div style="margin-bottom:40px" class="col-lg-4">
          <!-- Card -->
          <div class="card">
            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="https://katallyst.com/katallyst_admin/'.$row_course["course_image"].'"
                alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">'.$row_course["course_name"].'</h4>
              <h6 class="card-title">'.$row_course["price"].'</h6>
              <!-- Text -->
              <p class="card-text">'.$row_course["category"].'</p>
              <!-- Button -->
              <a href="view" class="btn btn-primary">DETAILS</a>
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
