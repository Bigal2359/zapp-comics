<?php /* Wrapper Name: Header */ ?>
<div class="row">
    <div class="box1">
        <div class="span8" data-motopress-type="static" data-motopress-static-file="static/static-shop-nav.php">
           <?php get_template_part("static/static-shop-nav"); ?> 
        </div>
        <a class="home-btn comic-con" href="<?php echo home_url(); ?>/">VISIT ZAPPCOMICS.COM</a>
    	<div class="store-locations main-site">
    		<ul>
    			<li><a href="#store-footer" class="wayne">WAYNE</a></li>
    			<li><a href="#store-footer" class="manalapan">MANALAPAN</a></li>
    		</ul>
    	</div>
        <div class="span4" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
            <!-- <?php get_template_part("static/static-social-networks"); ?> -->
		<ul class="social">
 			<li><a href="https://www.facebook.com/ZappComics" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
			<li><a href="https://twitter.com/ZappComics" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
			<li><a href="https://instagram.com/zappcomics/" target="_blank" title="Instagram"><i class="icon-instagram"></i></a></li>
			<li><a href="https://www.youtube.com/user/ZAPPcomicsNJ" target="_blank" title="YouTube"><i class="icon-youtube"></i></a></li>
		</ul>
        </div>
    </div>
    <div class="box2">
    	<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
    		<?php get_template_part("static/static-logo"); ?>
    	</div>
    	<div class="span5 info_box main-site">
            <?php dynamic_sidebar( 'cart-holder' ); ?>
            <div class="box wayne-info">
        		<p class="title">WAYNE, NJ <strong>973-628-4500</strong></p>
                <p><strong>Hours:</strong> <span>MON-TUES 11-7 |</span> <span>WED 10-8 |</span> <span>TH-FRI 11-8 |</span> <span>SAT 10-7 |</span> <span>SUN 10-6</span></p>
        		<p>Also in <a class="manalapan" href="#store-footer">Manalapan, NJ</a></p>
            </div>
    	    <div class="box manalapan-info">
        		<p class="title">MANALAPAN, NJ <strong>732-617-1333</strong></p>
                <p><strong>Hours:</strong> <span>MON 11-7 |</span> <span>TUES closed |</span> <span>WED 10-8 |</span> <span>TH-FRI 11-8 |</span> <span>SAT 11-7 |</span> <span>SUN 12-5</span></p>
        		<p>Also in <a class="wayne" href="#store-footer">Wayne, NJ</a></p>
            </div>
    	</div>
        <div class="span5 info_box comic-con">
            <div class="box">
                <p class="title">GET YOUR BADGES!</p>
                <div class="counter">
                    <p>COUNTDOWN TO ZAPP COMIC CON!</p>
                    <div class="countdown-container">
                        <?php dynamic_sidebar( 'sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row main-site">
	<div class="span12 logo_box" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		<?php get_template_part("static/static-nav"); ?>
        <?php get_template_part("static/static-search"); ?>
	</div>
</div>
<div class="scroll-nav comic-con">
    <ul>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Artists</a>
        </li>
        <li>
            <a href="#">Event</a>
        </li>
        <li>
            <a href="#">Badges</a>
        </li>
    </ul>
</div>