<?php
/************
 * Template Name: Article
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
                <div class="row">
                 <?php

							$args = array(

							'post_type' => 'post',

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
                
                
                
                <!--inner_article starts....-->
                <div class="inner_article">
                	
                	<div class="col-md-4 col-sm-4">
                    		<div class="article_img box1">
                            	<a href="article-detail.php" ><img src="<?php echo $feat_image3; ?>" class="image2"alt="<?php the_title();  ?>"></a>
                            </div>
                     </div>
                    <!--col-md-4 ends....-->
                    <div class="col-md-8 col-sm-8">
                    	
                        	<div class="article_content">
                            	<h3><?php the_title();  ?></h3>
                                <?php echo substr(strip_tags($post->post_content), 0,230); ?>
								<a href="<?php the_permalink();  ?>"><?php echo the_excerpt () ?></a>
				<div class="more_info_left2">
                        		<a href="<?php the_permalink();  ?>" class="more_info2 hvr-shutter-out-horizontal ">More Info</a>
                            </div>
							 </div>
                    </div>
                    <!--col-md-4 ends....-->
                    </div>
                    <!--inner_article ends....-->
                    
                    <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>   
                    
                    
                    
                    
         
                    <!--inner_article ends....-->	
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