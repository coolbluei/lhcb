<div class="postmeta">
	<div class="postmeta--date">Posted on: <?php echo get_the_date(); ?></div> 
	<div class="postmeta--cats">
		<?php 
			$categories = get_the_category();
			$separator = ' | ';
			$output = '';
			if ( ! empty( $categories ) ) {
			foreach( $categories as $category ) {
			    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
			}
			echo trim( $output, $separator );
			}
		?>
	</div>
</div>