<?php
/************
 * Template Name: Default Page
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
                	 <?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						?>
                
                		<?php the_content(); ?>  
                       
                        <?php
						// End the loop.
						endwhile;
						?>
                  
                </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
    </div>
</section>

<!--inner page content ends........-->
             
<?php get_footer(); ?>