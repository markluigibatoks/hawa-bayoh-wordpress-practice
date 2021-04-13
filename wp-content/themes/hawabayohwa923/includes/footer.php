<!--Footer -->
<footer>
<div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">
			<div class="contact_info">
				<?php dynamic_sidebar('contact_info');?>
				<div class="copyright">
					<span class="footer_comp"><?php echo get_bloginfo('name');?></span>
					<span>
					&copy; Copyright
						  <?php
						  $start_year = '2020';
						  $current_year = date('Y');
						  $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						  echo $copyright;
						  ?>
					</span>
					<a href="javascript:;" target="_blank" rel="nofollow">Designed by</a> <a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
				</div>
			</div>
			<figure><img src="<?php bloginfo('template_url');?>/images/ftr-figure.jpg" alt="a selfie of a handsome child with the boy on the background"></figure>
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?>
				</div>
			</div>
		</div>
</div>
</footer>

	<span class="back_top"></span>

  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->

  <?php get_includes('ie');?>

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="<?php bloginfo('template_url');?>/js/calcheight.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/plugins.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/css3-animate-it.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
<!-- End Footer -->
