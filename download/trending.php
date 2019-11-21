<!--?php require 'inc/dbconnection.php' ?-->
<html>
<div class='fullwidth-section  ' >
                                 <div class="container">
                                    <h2 class='border-title'>Trending<span></span></h2>
                                    <div class="dt-sc-events-carousel-wrapper">
                                       <ul class="dt-sc-events-carousel">
                                          <?php
                                             //$queryActiveCourse = "SELECT * FROM `course_learning_details` LIMIT 10";
                                             $queryActiveCourse = "SELECT * FROM `course_learning_details` WHERE exclusive=1 LIMIT 10 ";
                                             $resActiveCourse = mysqli_query($link, $queryActiveCourse); 
                                             while ($rowActiveCourse = mysqli_fetch_assoc($resActiveCourse)) {
                                                


                                          ?>

                                          <li class="dt-sc-one-fourth column">
                                             <div class="dt-sc-event-container">
                                                <div class="dt-sc-event-thumb"><a href="/abtcourse.php?cid=<?php echo $rowActiveCourse['Sno']; ?>"><img width="420" height="295" src="https://katallyst.com/katallyst_admin/<?php echo $rowActiveCourse['course_image']; ?>" class="attachment-blogcourse-three-column size-blogcourse-three-column" alt="" title="Welcoming 25th Batch" sizes="(max-width: 420px) 100vw, 420px" /></a><span class="event-price">₹ <?php echo $rowActiveCourse['price'];?></span></div>
                                                <div class="dt-sc-event-content">
                                                   <h2><a href="/abtcourse.php?cid=<?php echo $rowActiveCourse['Sno']; ?>"><?php echo $rowActiveCourse['course_name'];?></a></h2>
                                                   <div class="dt-sc-event-meta">
                                                      <p> <i class="fa fa-calendar-o"> </i><?php echo $rowActiveCourse['starting_date'];  ?> to <?php echo $rowActiveCourse['ending_date'];  ?> </p>
                                                   </div>

                                                   <div class="dt-sc-event-meta">
                                                      <p> <i class="fa fa-map-marker"> </i><a target="_blank" href="https://goo.gl/maps/hMPwLDe6JGruoqVd8"> <?php echo $rowActiveCourse['venue'];?></a><a href="https://maps.google.com/maps?f=q&" title="Peppard Hill" target="_blank"> </a></p>
                                                   </div>


                                                </div>
                                             </div>
                                          </li>
                                          <?php } ?>  
                                       </ul>
                                       <div class="carousel-arrows"><a class="events-prev" href=""></a><a class="events-next" href=""></a></div>
                                    </div>
                                 </div>
                              </div>
                              </html>