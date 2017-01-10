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

		$( window ).resize(function() {
			adjustVideo();
		});

		function adjustVideo() {
		    if( $('body').hasClass('page-template-comiccon') && $(window).width() > 980) {
				$('.fluid-width-video-wrapper').css('padding-top','33%');
			} else {
				$('.fluid-width-video-wrapper').css('padding-top','56.29139072847682%');
			}
		}

		(function($) {
		    'use strict';

		    /*var pluginName = 'ScrollIt',
		        pluginVersion = '1.0.3';*/

		    /*
		     * OPTIONS
		     */
		    var defaults = {
		        easing: 'linear',
		        scrollTime: 600
		    };

		    $.scrollIt = function(options) {

		        /*
		         * DECLARATIONS
		         */
		        var settings = $.extend(defaults, options),
		            active = 0,
		            lastIndex = $('[data-scroll-index]:last').attr('data-scroll-index');

		        /*
		         * METHODS
		         */

		        /**
		         * navigate
		         *
		         * sets up navigation animation
		         */
		        var navigate = function(ndx) {
		            if(ndx < 0 || ndx > lastIndex) return;

		            var targetTop = $('[data-scroll-index=' + ndx + ']').offset().top + 1;
		            $('html,body').animate({
		                scrollTop: targetTop,
		                easing: settings.easing
		            }, settings.scrollTime);
		        };

		        /**
		         * doScroll
		         *
		         * runs navigation() when criteria are met
		         */
		        var doScroll = function (e) {
		            var target = $(e.target).closest("[data-scroll-nav]").attr('data-scroll-nav') ||
		            $(e.target).closest("[data-scroll-goto]").attr('data-scroll-goto');
		            navigate(parseInt(target));
		        };

		        /*
		         * runs methods
		         */

		        $('body').on('click','[data-scroll-nav], [data-scroll-goto]', function(e){
		            e.preventDefault();
		            doScroll(e);
		        });

		    };
		}(jQuery));

		setTimeout(function() { 
			adjustVideo();
		}, 1000);
		$.scrollIt();
	</script>
</body>
</html>