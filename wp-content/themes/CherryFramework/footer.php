		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-footer'); ?>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
	<script>
		$( 'a.wayne, a.manalapan' ).click(function(e) {
			e.preventDefault();

			var target = this.hash;
	    		var $target = $(target);

			if($(this).hasClass('manalapan')) {
				$( 'body' ).addClass('location-2');
			} else {
				$( 'body' ).removeClass('location-2');
			}
			
			$('html, body').stop().animate({
	        		'scrollTop': $target.offset().top
	    		}, 900, 'swing');
		});
	</script>
</body>
</html>