<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper">
		<div class="btm1_con">
			<div class="btm1_info">
				<?php dynamic_sidebar('btm1_info');?>
			</div>
			<div class="btm1_boxes animatedParent animateOnce">
				<section class="btm1_box1">
					<figure><img src="<?php bloginfo('template_url');?>/images/btm1-box1.jpg" alt="food donations"></figure>
					<?php dynamic_sidebar('btm1_box1');?>
				</section>

				<section class="btm1_box2 animated slideInRight duration-3">
					<figure><img src="<?php bloginfo('template_url');?>/images/btm1-box2.jpg" alt="doctor checking up the child"></figure>
					<?php dynamic_sidebar('btm1_box2');?>
				</section>

				<section class="btm1_box3 animated slideInRight duration-4">
					<figure><img src="<?php bloginfo('template_url');?>/images/btm1-box3.jpg" alt="kids participating in class"></figure>
					<?php dynamic_sidebar('btm1_box3');?>
				</section>

			</div>
		</div>
	</div>
</div>

<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
			<div class="btm2_boxes animatedParent animateOnce">
				<div class="btm2_box1 animated slideInLeft duration-5">
					<figure><img src="<?php bloginfo('template_url');?>/images/btm2-box1.jpg" alt="a child writing on a paper"></figure>
					<?php dynamic_sidebar('btm2_box1');?>
				</div>
				<div class="btm2_box2 animated slideInLeft duration-6">
					<figure><img src="<?php bloginfo('template_url');?>/images/btm2-box2.jpg" alt="volunteers holding a paper that reads donation"></figure>
					<?php dynamic_sidebar('btm2_box2');?>
				</div>
			</div>
			<figure><img src="<?php bloginfo('template_url');?>/images/btm2-figure.jpg" alt="volunteers holding hands"></figure>
			<div class="btm2_info">
				<?php dynamic_sidebar('btm2_info');?>
			</div>
			
		</div>
	</div>
</div>

<div id="bottom3">
	<div class="wrapper">
		<div class="btm3_con">
			<div class="btm3_info">
				<?php dynamic_sidebar('btm3_info');?>
			</div>

			<?php
				$prompt_message = '<span class="newsletter" style="color: #FFF;font-size:13px;">Please fill the following:</span>';
				if(isset($_POST['submit_info'])){
				@session_start();
					if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address']))))
					{ $prompt_message = '<div id="error" style="color: #FFF;font-size:13px;">Please enter a valid email address</div>';}
				else {
					$_SESSION['Full_Name'] = (isset($_POST['Full_Name'])) ? $_POST['Full_Name'] : '';
			
					$_SESSION['Email_Address'] = (isset($_POST['Email_Address'])) ? $_POST['Email_Address'] : '';
			
					$_SESSION['Question_or_Comment'] = (isset($_POST['Question_or_Comment'])) ? $_POST['Question_or_Comment'] : '';
			
					echo "<script type='text/javascript'>window.location='".get_home_url()."?p=16#myframe';</script>";
				}}
			?>
			<form action="#" method="post">
				<input type="text" name="Full_Name" placeholder="Full Name" required="">
				<input type="email" name="Email_Address" placeholder="Email Address" required="">
				<textarea name="Question_or_Comment" placeholder="Message"></textarea>
				<input type="submit" name="submit_info" value="Submit" class="form_btn">
			</form>
		</div>
	</div>
</div>
<!-- End Bottom -->