<!-- Header -->
<header>
	<div class="wrapper">
		<div class="header_con">
			<div class="main_logo">
				<a href="<?php echo get_home_url(); ?>"><figure><img src="<?php bloginfo('template_url');?>/images/main-logo.png" alt="<?php echo get_bloginfo('name');?>"/></figure></a>
			  </div>
  
			  <div class="head_info">
				  <div class="header_info">
					<?php dynamic_sidebar('header_info');?>
				  </div>
				  <div class="social_media">
					  <ul>
						  <li><a href="https://www.facebook.com" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/images/fb-icon.jpg" alt="facebook"/></figure></a></li>
						  <li><a href="https://www.twitter.com" target="_blank"><figure><img src="<?php bloginfo('template_url');?>/images/twitter-icon.jpg" alt="twitter"/></figure></a></li>
					  </ul>
				  </div>
			  </div>
		</div>
	  <div class="clearfix"></div>
	</div>
</header>
<!-- End Header -->