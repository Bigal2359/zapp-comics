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
<div id="store-footer" class="row footer-widgets4">
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
	<div class="span3 comic-con" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-7">
		<div id="text-8">
			<h4>Tickets Available in Store Only</h4>
			<ul>
				<li><a href="#store-locations" class="wayne">WAYNE</a></li>
				<li><a href="#store-locations" class="manalapan">MANALAPAN</a></li>
			</ul>
			<div class="address wayne-info">
				<h5>Zapp Comics Wayne</h5>
				<p>
					574 Valley Road<br>
					Wayne, NJ<br>
					07470
				</p>
				<p>
					For Store Hours info visit <a href="https://www.zappcomics.com/">ZAPPCOMICS.COM</a>
				</p>
			</div>
		</div>
	</div>
    <div class="span4 comic-con" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-8">
		<?php dynamic_sidebar("footer-sidebar-8"); ?>
	</div>
    <div class="span5 comic-con" data-motopress-type="dynamic-sidebar">
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
</div>
<div class="row copyright">
	<div class="span6 pull-left main-site" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
	<div class="span6 pull-left comic-con">
		<div id="footer-text" class="footer-text">
			<strong>ZAPP COMIC CON</strong> is proudly powered by <a href="#">WordPress Entries (RSS)</a> and <a href="#">Comments (RSS) Privacy Policy</a>
		</div>
	</div>
</div>