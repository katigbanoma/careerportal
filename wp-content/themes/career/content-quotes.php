	
	<?php
		$args = array( 'post_type' => 'Quotes' );
		$loop = new WP_Query( $args );
		if (have_posts) : while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
		
		<div class="swiper-slide" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
		
	<?php
		endwhile;
	?>