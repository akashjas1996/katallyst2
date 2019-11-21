<html>
<div class="container">
   <!-- ** Primary Section ** -->
   <section id="primary" class="content-full-width">
      <article id="post-4396" class="post-4396 dt_teachers type-dt_teachers status-publish has-post-thumbnail hentry">
         <h3 class="border-title ">
            <?php

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


            if (isset($_SESSION['sname'])) {
               echo  $_SESSION['sname'];
               $sid = $_SESSION['sid'];
               if (isset($_FILES['image'])) {
                  // echo "FILE UPLOADED";
                  $errors = array();
                  $file_name = date('m-d-Y_H:i:s') . $_FILES['image']['name'];
                  // $filename = date('m-d-Y_H:i:s').'_'.md5(time).'.zip';
                  $file_size = $_FILES['image']['size'];
                  $file_tmp = $_FILES['image']['tmp_name'];
                  $file_type = $_FILES['image']['type'];
                  $tmp = explode('.', $_FILES['image']['name']);
                  $file_ext = end($tmp);
                  $file_ext = strtolower($file_ext);
                  // echo $file_ext;

                  $extensions = array("jpeg", "jpg", "png");

                  if (in_array($file_ext, $extensions) === false) {
                     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                  }

                  if ($file_size > 2097152) {
                     $errors[] = 'File size must be excately 2 MB';
                  }

                  if (empty($errors) == true) {
                     $query2 = "UPDATE student_info SET stud_image='$file_name' WHERE stud_id=$sid";
                     $res2 = mysqli_query($link, $query2);
                     echo mysqli_error($link);
                     move_uploaded_file($file_tmp, "profile_pic/" . $file_name);
                     //        echo "Success";
                     //redirect("index.php");
                  } else {
                     print_r($errors);
                  }
               }


               // if(isset($_SESSION['sname'])){
               // 	echo  $_SESSION['sname'];
               // 	$sid = $_SESSION['sid'];
               $query = "SELECT * FROM student_info WHERE stud_id=$sid";
               $resActiveStud = mysqli_query($link, $query);
               while ($rowActiveStud = mysqli_fetch_assoc($resActiveStud)) { ?>

            <span></span></h3>
         <div class="column dt-sc-one-fourth space first">
            <div class="team-thumb">
               <img id="pic" width="550" height="550" src="
                              /profile_pic/<?php

                                                   echo $rowActiveStud['stud_image'];

                                                   ?>" class="attachment-full size-full wp-post-image" alt="Loading..." sizes="(max-width: 550px) 100vw, 550px">

               <meta itemprop="headline" content="Jenny Sheen">
               <meta itemprop="description" content="Nulla pretium, enim nec ornare varius, erat ipsum sollicitudin nisi, at tincidunt orci mi id nisi. Nam venenatis iaculis velit, sed sagittis lectus tempor vitae. Donec dapibus aliquam ante, ut molesti...">
               <meta itemprop="datePublished" content="2014-05-24T11:53:03+00:00">
               <meta itemprop="dateModified" content="2014-06-25T10:10:32+00:00">
               <meta itemprop="url" content="https://lmstheme.wpengine.com/teachers/jenny-sheen/">
               <meta itemprop="author" content="ram">
               <meta itemprop="mainEntityOfPage" content="https://lmstheme.wpengine.com/teachers/jenny-sheen/">
               <div style="display: none;" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                  <meta itemprop="url" content="https://lmstheme.wpengine.com/wp-content/uploads/2014/05/teacher4-150x150.jpg">
                  <meta itemprop="width" content="150">
                  <meta itemprop="height" content="150">
               </div>
               <div style="display: none;" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                  <meta itemprop="name" content="LMS">
                  <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                     <meta itemprop="url" content="">
                  </div>
               </div>
               <div style="display: none;" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                  <meta itemprop="bestRating" content="5">
                  <meta itemprop="worstRating" content="1">
                  <meta itemprop="ratingValue" content="4.17">
                  <meta itemprop="ratingCount" content="138">
               </div>
               </span>
               <div>
                  <center>
                     <form action="" method="POST" enctype="multipart/form-data">
                        <hr>
                        <div class="row">
                           <div class="col-lg-6" style='border:0px solid red'>
                              <center><input style="width: 100%; vertical-align:center;  height: 30px;" class="sh-btn" multiple="multiple" type='file' name="image" onchange="readURL(this);" /></center>
                           </div>
                           <div class="col-lg-6" style='border:0px solid red'>
                              <center><input type="submit" value="Update" name="pic_update" /></center>
                           </div>
                        </div>
                     </form>
                  </center>

               </div>

            </div>
         </div>
         <div class="column dt-sc-three-fourth space">
            <ul class="teachers-details">
               <!-- <li> Role : Marketing Director </li> -->
               <li> Email : <?php if (isset($_SESSION['semail'])) {
                                       echo $_SESSION['semail'];
                                    }
                                    ?>
               </li>
               <li> Contact No : <?php echo $rowActiveStud['mobile']; ?> </li>
               <!-- <li> Highest Education : Digital Media Programming </li> -->
            </ul>
            <h5 class="border-title ">Course Dashboard<span></span></h5>
            <table class="courses-table-list tablesorter">
               <thead>
                  <tr>
                     <center>
                        <th class="lessons-table-header header" scope="col">Course Name</th>
                     </center>
                     <center>
                        <th class="lessons-table-header header" scope="col">Starting Date</th>
                     </center>
                     <center>
                        <th class="lessons-table-header header" scope="col">Ending Date</th>
                     </center>
                     <center>
                        <th class="lessons-table-header header" scope="col">Receipt</th>
                     </center>
                     <center>
                        <th class="lessons-table-header header" scope="col">Certificate</th>
                     </center>
                  </tr>
               </thead>
               <tbody>
                  <?php
                        $stud_status = 0;
                        $query2 = "SELECT * FROM tbl_enrollment WHERE stud_id=$sid AND payment_status=1";
                        $resStudCourse = mysqli_query($link, $query2);
                        while ($rowStudCourse = mysqli_fetch_assoc($resStudCourse)) {
                           $stud_status = 1;
                           ?>
                  <tr>
                     <td class="lessons-table-course"><a href="https://lmstheme.wpengine.com/courses/power-electronics/"><?php echo $rowStudCourse['course_name']; ?></a></td>

                     <td><a href="#"> <?php echo $rowStudCourse['c_starting_date']; ?> </a></td>



                     <td><a href="#"> <?php echo $rowStudCourse['c_ending_date']; ?> </a></td>


                     <td>
                        <a href="<?php echo 'inc/receipt.php?enrollid=' . $rowStudCourse['enroll_id']; ?>" title="" class="dt-sc-button small"> <i class="fa fa-money"> </i> Downlaod</a>
                     </td>

                     <td>
                        <?php if ($rowStudCourse['certificate_status'] == 1) {
                                    $certificate_link = 'inc/certificate/php?enrollid=';
                                    $certificate_link  =  $certificate_link . $rowStudCourse['enroll_id'];
                                    echo '<a href="' . $certificate_link . '" class="dt-sc-button small"> <i class="fa fa-certificate"> </i> Download  </a>';
                                 } else {
                                    echo 'Pending...';
                                 }
                                 ?>
                     </td>



                  </tr>
                  <?php }
                        if ($stud_status == 0) {
                           echo '<center> <tr>
                                       <center> <td colspan=5 align="center">  No course Choosen </td> </center> 
                                       
                                       </tr> </center>';
                        }
                        ?>

               </tbody>
            </table>
         </div>
         <div class="dt-sc-hr-invisible-small  "></div>
      </article>
   </section>
   <?php }
   } 
   else{
      redirect('login.php');
   }
   ?>
   <!-- ** Primary Section End ** -->
</div>
<!-- **Container - End** -->


<script>
   function readURL(input) {
      console.log(input);
      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function(e) {
            $('#pic')
               .attr('src', e.target.result)
         };

         reader.readAsDataURL(input.files[0]);
      }
   }
</script>



</html>