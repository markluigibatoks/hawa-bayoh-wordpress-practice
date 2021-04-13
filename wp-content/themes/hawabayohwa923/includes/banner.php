<!-- Banner -->
<div id="banner">
	<div class="wrapper">
		<div class="bnr_con animatedParent animateOnce">
			<?php if (is_front_page() ) { ?>
			<div class="slider">
				<div class="box_skitter box_skitter_large">
					<ul>
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="a picture of two beautiful kids" class="random"/></figure></li>
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="giving food to the man" class="random"/></figure></li>
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" alt="boy taking a bath happily in the rain" class="random"/></figure></li>
					</ul>
				</div>
				<ul class="rslides">
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="a picture of two beautiful kids"/></figure></li>
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="giving food to the man"/></figure></li>
					<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" alt="boy taking a bath happily in the rain"/></figure></li>
				</ul>
			</div>

			<div class="mobi_ban">
				<figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="a picture of two beautiful kids"></figure>
			</div>
			<?php } else { ?>
				<div class="non_ban">
				<div class="non_ban_img">
				<?php if(is_home() && is_author() && is_category() && is_tag() && is_single()) { ?>
					<?php if (has_post_thumbnail() ) {?>
						<?php the_post_thumbnail('full');?>
					<?php }else{ ?>
						<figure><img src="<?php bloginfo('template_url');?>/images/slider/nh-banner.jpg" alt="image" /></figure>
					<?php } ?>
					<?php } elseif (has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('full');?>
					<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/slider/nh-banner.jpg" alt="image">
					<?php } ?>
				</div>
				<div class="page_title">
					<?php if(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
						<h1 class="h1_title"><?php the_title(); ?></h1>
						<?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
					<?php } else { ?>
						<h1 class="h1_title">Blog</h1>
					<?php } ?>
				</div>
				</div>
			<?php }?>

			<?php if ( is_front_page() ) { ?> 		
				<div class="bnr_info">
					<?php dynamic_sidebar('bnr_info');?>
				</div>
				<div class="bnr_info2 animated slideInRight duration-1">	
					<div class="bnr_heading">					
						<?php dynamic_sidebar('bnr_info2');?>
					</div>			
					<a href="non-profit-organization-donate">Donate Now</a>
					<figure class="animated slideInRight duration-2"><img src="<?php bloginfo('template_url');?>/images/bnr-figure.jpg" alt="signboard help"></figure>
				</div>
			<?php }?>
		</div>
	</div>
</div>
<!-- End Banner -->
<div class="gallery">
	<figure> <img src="<?php bloginfo('template_url');?>/images/thumbnails/thumb-xxxxxx" alt=""> </figure>
	<figure> <img src="<?php bloginfo('template_url');?>/images/thumbnails/thumb-xxxxxx" alt=""> </figure>
	<figure> <img src="<?php bloginfo('template_url');?>/images/thumbnails/thumb-xxxxxx" alt=""> </figure>
</div>