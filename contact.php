<?php
/************
 * Template Name: Contact Us
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
                	<!--contact starts.....-->
                    <!--contact starts...--> 
                        <div class="contact2">
                            <div class="col-md-6 col-sm-6">
                            	<div class="row">
                                <div class="contact-book">
                                	<?php echo of_get_option('c1','no entry');?>
                                    
                                </div>
                                <div class="contact_map">
                                	<?php echo of_get_option('map','no entry');?>
                                   
                                </div>
                                </div>
                                <!--row ends....-->
                            </div>
                            <!--col-md-6 ends...-->
                            <div class="col-md-6 col-sm-6">
                              <div class="form_area_inner">
                                <h2><b>Your Enquiry</b></h2>
                                <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form"]');?>
                               <!--<form action="" method="post">
                                  <div class="form-group">
                                    <label for="First">Name:</label>
                                    <input type="text" class="form-control"  name="Name" value="">
                                  </div>
                                  <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phone">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="Email" name="Email" value="">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="Subject">Subject:</label>
                                    <input type="text" class="form-control"  name="sub" id="sub">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="Message">Message:</label>
                                    <textarea name="Enquiry" id="Enquiry" class="form-control"></textarea>
                                  </div>
                                  <input type="submit" name="submit" class="btn btn-default btn-form" value="Submit">
                                </form>-->
                        
                            </div>
                         </div>
                         <!--col-md-6 ends...-->
                        </div>
                        <!--contact ends...-->
                </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
    </div>
</section>

<!--inner page content ends........-->

<!--contact section end-->
             
<?php get_footer(); ?>