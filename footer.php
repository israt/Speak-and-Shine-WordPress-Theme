
<!--footer starts....-->
    <footer>
    	<div class="row">
        	<div class="container">
            	<div class="col-md-4 col-sm-4">
                	<h2>Contact Us</h2>
                    <div class="footer_list1">
                    	<?php echo of_get_option('c1','no entry');?>
                    </div>
                </div>
                <!--col-md-3 ends....-->
                <div class="col-md-4 col-sm-4">
                	<h2>Quick Links</h2>
                    <div class="footer_list2">
                        <ul>
                                 <li><a href="<?php bloginfo('url');?>/about/"> About Us</a></li>
                                <li><a href="<?php bloginfo('url');?>/offering/">Offering </a></li>
                                 <li><a href="<?php bloginfo('url');?>/articles/">Articles </a></li>
                                <li><a href="<?php bloginfo('url');?>/testimonial/">Testimonials </a></li>
                                <li><a href="<?php bloginfo('url');?>/video/">Videos </a></li>
                                 <li><a href="<?php bloginfo('url');?>/contact-us/">Contact us </a></li>
                        </ul>
                    </div>
                </div>
                
                <!--col-md-2 ends....-->
                <div class="col-md-4 col-sm-4">
                	<h2>Get in touch</h2>
                    <div class="social_bookmarks">
                        <ul>
                            <li><a href="<?php echo of_get_option('fb','no entry');?>" TARGET="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo of_get_option('twt','no entry');?>" TARGET="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo of_get_option('ins','no entry');?>" TARGET="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?php echo of_get_option('you','no entry');?>" TARGET="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <p><?php echo of_get_option('copyright_ftext','no entry');?></p>
                </div>
                <!--col-md-3 ends....-->
            </div>
        </div>
    </footer>
    
    

<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- Menu JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>
<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>


<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy/jquery.fancybox.js?v=2.1.5"></script>

<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

		
			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			


		});
	</script>

<!-- write script to toggle class on scroll -->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>

<!-- jquery-ui js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-ui.js"></script>
<script>
	$( "#accordion" ).accordion();
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70149813-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/video.js"></script>

<?php wp_footer(); ?>
</body>
</html>

