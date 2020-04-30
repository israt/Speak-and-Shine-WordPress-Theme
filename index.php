<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>

   
<!--------------------  Video section starts ------------------>
<section class="video-zone">
			
            <!--carousel starts here.......-->
                    
<video autoplay  poster="#" id="bgvid" loop>

<!--<source src="<?php echo of_get_option('h1','no entry');?>" type="video/webm"-->>
<source src="<?php echo of_get_option('banner-video','no entry');?>" type="video/mp4">
</video>
<div id="polina">
<h2><?php echo of_get_option('banner-t','no entry');?></h2>
<p><?php echo of_get_option('banner-c','no entry');?></p>

<button onclick="vid.paused()" type="button"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/push.png" /></button>
</div>

</section>
<!----------------------------------------------------------------------------------------------------------------------                                               offering/service section starts                                       ----------------------------------------------------------------------------------------------------------------------->
    
   <section class="services_area">
    	<!--row starts here.....-->
    	<div class="row">
        	<div class="container">
            	<div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                        <div class="services_area_img">
                          <!-- <i class="fa fa-laptop"></i>-->
                          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/keynote.png" alt="">
                        </div>
                        <div class="services_area_text">
                            <h2><?php echo of_get_option('h1','no entry');?></h2>
                            <p><?php echo of_get_option('hc1','no entry');?></p>
                            <div class="more_info_center">
                        		<a href="<?php bloginfo('url');?>/keynotes/" class="more_info hvr-shutter-out-horizontal">More Info</a>
                            </div>	
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
                <div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                        <div class="services_area_img">
                            <!--<i class="fa fa-bluetooth"></i>	-->
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/workshop.png" alt="">
                        </div>
                        <div class="services_area_text">
                            <h2><?php echo of_get_option('h2','no entry');?></h2>
                            <p><?php echo of_get_option('hc2','no entry');?></p>
                            <div class="more_info_center">
                        		<a href="<?php bloginfo('url');?>/workshops/" class="more_info hvr-shutter-out-horizontal ">More Info</a>
                            </div>
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
                <div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                        <div class="services_area_img">
                            <!--<i class="fa fa-desktop"></i>-->
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seminar.png" alt="">	
                        </div>
                        <div class="services_area_text">
                            <h2><?php echo of_get_option('h3','no entry');?></h2>
                            <p><?php echo of_get_option('hc3','no entry');?></p>
                            <div class="more_info_center">
                        		<a href="<?php bloginfo('url');?>/seminars/" class="more_info hvr-shutter-out-horizontal ">More Info</a>
                            </div>	
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
            </div>
        </div>
        <!--row ends here.....-->
    </section>
    
<!---------------------------------------------------------------------------------------------------------------------                                             About_us_front section starts                                       ----------------------------------------------------------------------------------------------------------------------->  
     
    <section class="About_us_front">
    	<div class="row">
        	<div class="container">
            	<div class="section_heading3">
                	<h1><?php echo of_get_option('i1','no entry');?></h1>
                </div>
            	<div class="col-md-12">
                	<div class="About_us_front_wrapper">
                        <div class="About_us_front_text">
                            <?php echo of_get_option('ic1','no entry');?>
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
            </div>
        </div>
    </section>
    <!--works section ends...-->
    
<!---------------------------------------------------------------------------------------------------------------------                                            Latest Article section starts                                       -----------------------------------------------------------------------------------------------------------------------> 
    
    
    <section class="shine_blog_area">
    	<div class="container">
        	<div class="row">
            	<div class="section_heading3">
                	<h2> Latest Articles</h2>
                </div>
                
                 <?php

							$args = array(

							'post_type' => 'post',

							  'orderby' => 'name',

							  'order' => 'DESC',

							  'posts_per_page' => 3	

							  );					  

							  $query = new WP_Query($args);

								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								  $feat_image3= '';

									if (has_post_thumbnail( $post->ID ) ){ 

									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

									}

						  ?>
                          
                          
               	<div class="col-md-4 col-sm-4">
                	<div class="blog_area_wrapper">
                    	<div class="blog_area_img box1 ">
                            <a href="#"><img src="<?php echo $feat_image3; ?>" class="image2" alt="<?php the_title();  ?>"></a>
                        </div>
                        <div class="blog_area_text">
                            <a href="#"><h2><?php the_title();  ?></h2></a>
                            <p><?php echo substr(strip_tags($post->post_content), 0, 200); ?></p>
                        </div>
                        <div class="more_info_left">
                        		<a href="<?php the_permalink();  ?>" class="more_info hvr-shutter-out-horizontal">More Info</a>
                        </div>
                 	</div>
                    <!-- work_area_wrapper....-->
                </div>
                 
                 <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>   
                 
                
               
                
            </div>
        </div>
    </section>
    <!--blog section ends...-->
    
<!---------------------------------------------------------------------------------------------------------------------                           what clients say/Testimonial section starts                                       ----------------------------------------------------------------------------------------------------------------------->
  
    
 <section class="testim_area">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="section_heading_testim">
                		<h1>What's Clients Say</h1>
                	</div>
                    <div class="testi_slider">
                    	   <ul class="bxslider">
                           	  <?php
					$args = array(
					'post_type' => 'testi',
					  'orderby' => 'name',
					  'order' => 'DESC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					     
			      ?>
                              <li>
                                    <span class="author"><?php the_content(); ?></span>
                                    <p class="author-name">-<?php the_title();  ?></p>
                              </li>
                              
                              <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                              
                             
                            </ul>
                    </div>
                    
                </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
    </section>   
 
 
<!---------------------------------------------------------------------------------------------------------------------                                            Subscribe section starts                                       ----------------------------------------------------------------------------------------------------------------------->
    
<section class="subs_area">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="like_inner">
                    	<div class="section_heading_subs">
                        	<div class="col-md-6">
                                <h1>Subscribe To Our Newsletter</h1>
                                <p>simply dummy text of the printing and typesetting industry  printing and typesetting industry printing and typesetting industry.</p>
                            </div>
                            <div class="col-md-6">
                                <form role="form">
                                  <div class="form-group contact">
                                    <label for="sub"></label>
                                    <input type="email" class="form-control" id="sub" placeholder="Enter Email Address">
                                  </div>
                <input type="submit" class="news-btn" value="SUBMIT" />
                                </form>
                                
                            </div>
                		</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
   
   
 