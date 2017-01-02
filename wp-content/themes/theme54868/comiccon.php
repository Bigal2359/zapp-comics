<?php /* Template Name: Comiccon */ get_header(); ?>

<div class="motopress-wrapper content-holder main-section clearfix">
	<div class="container">
		<div class="row">
			<?php do_action( 'cherry_before_home_page_content' ); ?>
			<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
						<?php get_template_part("static/static-slider"); ?>
					</div>
				</div>
				<div class="row">
					<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<?php get_template_part("loop/loop-page"); ?>
					</div>
				</div>
			</div>
			<?php do_action( 'cherry_after_home_page_content' ); ?>
		</div>
	</div>
</div>
<div class="motopress-wrapper content-holder about-section clearfix" data-scroll-index='0'>
	<h2 class="make-red">About:</h2>
	<div class="container">
		<div class="row">
			<img class="img-badges" src="http://6d2.472.myftpupload.com/wp-content/uploads/2016/12/badges.png" alt="Zapp Comic Con Badges">
			<div class="content">
				<h3>
					Wayne Fire Co. #1<br>
					SATURDAY MARCH 18, 2017<br>
					9AM - 7PM
				</h3>
				<p>
					Over 300 Long Boxes of Comics, Rare Wall Books, Artist Alley, Live Painting, Art Fusion Sesstions, Comic Book Tattoo Contest, Action Figures, Toys, Scholarship Auction for the Kubert School, Free Raffles, and more!!
				</p>
				<p>
					<a class="cap" href="https://www.google.com/maps/place/93+Parish+Dr,+Wayne,+NJ+07470/@40.9145473,-74.262298,17z/data=!3m1!4b1!4m5!3m4!1s0x89c3022a36be5dfb:0x26c0dee60dca6e62!8m2!3d40.914489!4d-74.260086" target="_blank">Get Directions</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="motopress-wrapper content-holder artists-section clearfix" data-scroll-index='1'>
	<h2>Artists:</h2>
	<div class="container">
		<div class="row">
			<div class="content">
				<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
			</div>
		</div>
	</div>
</div>
<div class="motopress-wrapper content-holder events-section clearfix" data-scroll-index='2'>
	<h2>Events:</h2>
	<div class="container">
		<div class="row">
			<div class="content">
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>