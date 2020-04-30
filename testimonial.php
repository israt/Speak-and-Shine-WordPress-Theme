<?php
/************
 * Template Name: Testimonial
 ***********/
get_header(); ?>

<!-----------------------------------------------------------------------------------------------------------------------
                                            banner_area_inner_about starts
------------------------------------------------------------------------------------------------------------------------->

<section class="banner_area_inner_about">
	<div class="row">
    	<div class="container">
        	<div class="col-md-12">
                <div class="banner_text_inner_about">
                    <h2><?php the_title();?>Testimonials</h2>
                    <p><?php the_subtitle(); ?>Simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--banner_area_inner_about ends.....-->

<!-----------------------------------------------------------------------------------------------------------------------
                                             inner page content starts
------------------------------------------------------------------------------------------------------------------------->

<section class="inner_content">
    <div class="row">
    	<div class="container">
        	<div class="inner_about">
            	<div class="col-md-12 col-sm-12">
                	<!--Testimonials starts.....-->
                    
                      <?php
					$args = array(
					'post_type' => 'testi',
					  'orderby' => 'name',
					  'order' => 'DESC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					     
			      ?>
                    
                    <div class="inner_article">
                        <div class="article_content">
                        	
                            <p><?php the_content(); ?></p>
                            <h4><?php the_subtitle(); ?></h4>		
                            <h5><?php the_title();  ?></h5>					
                        </div>
                    </div>
                    
                    <!--Testimonials starts.....-->
                    <!--Testimonials ends...-->
                    
                  <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                    
                   
                </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
    </div>
</section>

<!--inner page content ends........-->
    
    
    
<?php get_footer(); ?>
   