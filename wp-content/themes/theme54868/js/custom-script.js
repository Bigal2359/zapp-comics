(function($) {
    $(function(){
    	//Dropdown cart in header
		$('.cart-holder > h3').click(function(){
			if($(this).hasClass('cart-opened')) {
				$(this).removeClass('cart-opened').next().slideUp(300);
			} else {
				$(this).addClass('cart-opened').next().slideDown(300);
			}
		});

        // Make cart content disappear. If an event gets to the body
        $("html, a.cherry-wc-account_title").click(function(){
            $(".cart-holder h3").removeClass("cart-opened").next().slideUp(300);
        });

        // Prevent events from getting pass h3
        $(".cart-holder h3, .widget_shopping_cart_content").click(function(e){
            var cherryWcAccountTitle = $('.cherry-wc-account_title');
            if (cherryWcAccountTitle.hasClass('cherry-dropdown-opened')) {
                cherryWcAccountTitle.removeClass('cherry-dropdown-opened');
                cherryWcAccountTitle.parent().find('.cherry-wc-account_content').slideUp(300).removeClass('opened');
                e.stopPropagation();
            } else {
                e.stopPropagation();
            }
        });

		//Popup rating content
		$('.star-rating').each(function(){
			rate_cont = $(this).attr('title');
			$(this).append('<b class="rate_content">' + rate_cont + '</b>');
		});

		//Disable cart selection
		(function ($) {
			$.fn.disableSelection = function () {
				return this
					.attr('unselectable', 'on')
					.css('user-select', 'none')
					.on('selectstart', false);
			};
			$('.cart-holder h3').disableSelection();
		})(jQuery);

		//Fix contact form not valid messages errors
		jQuery(window).load(function() {
			jQuery('.wpcf7-not-valid-tip').live('mouseover', function(){
				jQuery(this).fadeOut();
			});

			jQuery('.wpcf7-form input[type="reset"]').live('click', function(){
				jQuery('.wpcf7-not-valid-tip, .wpcf7-response-output').fadeOut();
			});
		});

		// compare trigger
		$(document).on('click', '.cherry-compare', function(event) {
			event.preventDefault();
			button = $(this);
			$('body').trigger( 'yith_woocompare_open_popup', { response: compare_data.table_url, button: button } )
		});

    });
    
    /*-----product_buttons-----*/
      $('.products .product').each(function(){
        _this = $(this);
        var thisButtonsBlock = $('<div class="buttonsBlock"></div>');
        _this.append(thisButtonsBlock);
        var buttons = _this.find('div.yith-wcwl-add-to-wishlist, .compare');
        thisButtonsBlock.append(buttons);
      });
      
      /*$('.products li.product').each(function(){
        _this = $(this);
        var thisPicBlock = $('<div class="PicBlock"></div>');
        _this.append(thisPicBlock);
        var buttons = _this.find('> a, .buttonsBlock');
        thisPicBlock.append(buttons);
      });
      
      $('.products .product').each(function(){
        _this = $(this);
        var thisDescripBlock = $('<div class="DescripBlock"></div>');
        _this.append(thisDescripBlock);
        var buttons = _this.find('.price, h3, .short_desc, .star-rating');
        thisDescripBlock.append(buttons);
      });*/
      
      $('ul.products li.product').each(function(){
       _this = $(this);
       _this.find('.price').after(_this.find('h3'));
       _this.find('ins').after(_this.find('del'));
    });
    $('.product_list_widget li').each(function(){
       _this = $(this);
       _this.find('ins').after(_this.find('del'));
      });
    
    /*----------*/
})(jQuery);

jQuery('.yith-wcwl-add-to-wishlist a, .compare').wrapInner('<b/>');
jQuery('.post-author').wrapInner('<div/>');
