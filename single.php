<?php
/************
 * This is a single page
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
                    <h2>Articles > <?php the_title();?></h2>
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
                
                <!--inner_article starts....-->
                <div class="inner_article">
                	 <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                    <div class="article_content">
                    	<h2><?php the_title();?></h2>
                        <div class="article_detail_img  box1">
                        	<?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    
                    <?php
					// End the loop.
					endwhile; ?>
                </div>
                <!--inner_article ends....-->
                 </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
    </div>
</section>

<!--inner page content ends........-->
    
    
<?php get_footer(); ?>