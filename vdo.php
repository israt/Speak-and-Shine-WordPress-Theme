<?php
/************
 * Template Name: Video
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
                    <h2><?php the_title();?></h2>
                    <p><?php the_subtitle(); ?></p>
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
            	<div class="col-md-12">
                <div class="row">
                <!--vdo starts.....-->
                
                <?php

							$args = array(

							'post_type' => 'video',

							  'orderby' => 'name',

							  'order' => 'DESC'


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
                            <div class="vdo_area_img">
                           <!-- <a class="fancybox" data-fancybox-group="group01" title="" data-fancybox-type="iframe" href="<?php echo $link=get_post_meta(get_the_ID(),"videolink",true)?>">-->
                           
                          <a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">
                          <img src="<?php echo $feat_image3; ?>" alt="" /></a>
                          <br />
                          
                          
                          
		

 
                                
                                
                                
                                	<div class="vdo-btn">
                                    </div>
                            </div>
                            <div class="blog_area_text">
                                <a href="#"><h2><?php the_title();  ?></h2></a>
                            </div> 
                		</div>
                    </div>
                    
                    
                    <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                    
                   
                    
                  
                    
                   
                    
                    
              		
                    
                    
                    
                <!--vdo ends...-->  
                </div>
                <!--row ends....-->
            </div>
            <!--col-md-12 ends....-->
            </div>
        </div>
    </div>
</section>

<!--inner page content ends........-->
    
    
    
<?php get_footer(); ?>
   