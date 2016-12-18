<?php global $product; ?>
<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
	</a>
    <div class="extra-wrap">
        <?php echo $product->get_price_html(); ?> 
        <span class="product-title"><?php echo $product->get_title(); ?></span>
        <?php 
        global $post;
		if ($post->post_excerpt ){
		?>
		<div class="short_desc">
			<?php echo $post->post_excerpt; ?>
		</div>
        <?php
        }?>
    	<?php if ( ! empty( $show_rating ) ) echo $product->get_rating_html(); ?>
    </div>
</li>