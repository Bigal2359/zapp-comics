<?php /* Wrapper Name: Footer */ ?>
<?php if (is_front_page()) { ?>
    <div class="row footer-widgets">
    	<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
    		<?php dynamic_sidebar("footer-sidebar-1"); ?>
    	</div>
    	<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
            <?php dynamic_sidebar("footer-sidebar-2"); ?>
    	</div>
    	<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
    		<?php dynamic_sidebar("footer-sidebar-3"); ?>
    	</div>
    </div>
<?php } ?>
<div id="store-footer" class="row footer-widgets4" data-scroll-index='3'>
	<div class="store-locations main-site">
		<ul>
			<li><a href="#store-locations" class="wayne">WAYNE</a></li>
			<li><a href="#store-locations" class="manalapan">MANALAPAN</a></li>
		</ul>
	</div>
	<div class="span3 main-site" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-7">
		<?php dynamic_sidebar("footer-sidebar-7"); ?>
	</div>
    <div class="span4 main-site" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-8">
		<?php dynamic_sidebar("footer-sidebar-8"); ?>
	</div>
    <div class="span5 main-site" data-motopress-type="dynamic-sidebar">
		<?php dynamic_sidebar( 'google' ); ?>
        <div class="caption_info wayne-info">
			<p><strong>Phone:</strong> <span>973-628-4500</span></p>
			<p><strong>Address:</strong> 574 Valley Ridge Shopping Center</p>
        	<p><strong><a href="https://www.google.com/maps/dir//Zapp!+Comics,+Valley+Ridge+Shopping+Center,+574+Valley+Rd,+Wayne,+NJ+07470/@40.9267611,-74.2301051,14.61z/data=!4m12!1m3!3m2!1s0x0000000000000000:0x5426e66d52740f60!2sZapp*21+Comics!4m7!1m0!1m5!1m1!1s0x89c30272f50955a1:0x5426e66d52740f60!2m2!1d-74.2266233!2d40.931354" target="_blank">Get Directions</a></strong></p>
        </div>
		<div class="caption_info manalapan-info">
			<p><strong>Phone:</strong> <span>732-617-1333</span></p>
			<p><strong>Address:</strong> 700 Tennent Road, Manalapan, NJ 07726</p>
        	<p><strong><a href="https://www.google.com/maps/dir/''/700+Tennent+Rd,+Manalapan+Township,+NJ+07726/data=!4m5!4m4!1m0!1m2!1m1!1s0x89c3d3d74f702797:0x6f042365caf4db83?sa=X&ved=0CB4QwwUwAGoVChMIg4TGjceqyAIVQ3o-Ch0-uQaV" target="_blank">Get Directions</a></strong></p>
        </div>
	</div>
	<div class="span3 comic-con">
		<div id="text-8" class="footer-container">
			<h4>Badges Available <span class="nowrap">in Store Only</span></h4>
			<div class="store-locations">
				<ul>
					<li><a href="#store-locations" class="wayne">WAYNE</a></li>
					<li><a href="#store-locations" class="manalapan">MANALAPAN</a></li>
				</ul>
			</div>
			<div class="address wayne-info">
				<h5>Zapp Comics Wayne</h5>
				<p>
					574 Valley Road<br>
					Wayne, NJ<br>
					07470
				</p>
			</div>
			<div class="address manalapan-info">
				<h5>Zapp Comics Manalapan</h5>
				<p>
					700 Tennent Road<br>
					Manalapan, NJ<br>
					07726
				</p>
			</div>
			<p class="more-info">
				For Store Hours info visit <a href="<?php echo home_url(); ?>/">ZAPPCOMICS.COM</a>
			</p>
		</div>
	</div>
    <div class="span4 comic-con">
    	<div class="footer-container">
    		<h4>Event Location &amp; Hours</h4>
    		<div class="address">
    			<h5>Wayne Fire Co. #1</h5>
				<p>
					93 Parish Drive<br>
					Wayne, NJ 07470
				</p>
    		</div>
			<p>9:00AM to 7:00PM</p>
			<?php dynamic_sidebar( 'google' ); ?>
			<p class="directions"><a href="https://www.google.com/maps/place/93+Parish+Dr,+Wayne,+NJ+07470/@40.9145473,-74.262298,17z/data=!3m1!4b1!4m5!3m4!1s0x89c3022a36be5dfb:0x26c0dee60dca6e62!8m2!3d40.914489!4d-74.260086" target="_blank">Get Directions</a></p>
    	</div>
	</div>
    <div class="span5 comic-con">
    	<div class="footer-container">
    		<?php dynamic_sidebar("footer-sidebar-4"); ?>
    	</div>
	</div>
</div>
<div class="row copyright">
	<div class="span6 pull-left" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
</div>