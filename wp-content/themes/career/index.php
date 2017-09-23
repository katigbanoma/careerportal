<?php get_header();?>
	<div id="page-content" class="page-content header-clear-full">
		<div id="page-content-scroll">
			<div class="home-slider half-bottom no-bottom">
				<div class="swiper-wrapper">
					<?php
						$args = array('post_type' => 'home_slider', 'posts_per_page' => '4');
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()):while ($the_query->have_posts()):$the_query->the_post();
					?>
						<div class="swiper-slide">
							<img class="responsive-image no-bottom" alt="img" src="<?php echo get_stylesheet_directory_uri();?>/images/pictures/4.jpg">
							<h4><?php echo substr(get_field('slider-caption', $post->ID), 0, 100)?></h4>
							<p>The best mobile items on the planet</p>
						</div>
					<?php endwhile;// end of the loop. ?>
					<?php  else :?>
						<div class="swiper-slide">
							<img class="responsive-image no-bottom" alt="img" src="<?php echo get_stylesheet_directory_uri();?>/images/pictures/6.jpg">
							<h4 class="center-text">Welcome</h4>
							<p class="center-text">The best mobile items on the planet</p>
						</div>
					<?php endif;?>
			</div>
		</div>

		<div class="content no-material">
			<div class="heading-text">
				<h4>Quote of the Day</h4>
				<div class="heading-line-1"></div>
				<i class="fa fa-star-o color-red-dark"></i>
				<div class="heading-line-2"></div>
				<p>
					Celebrating our 20.000th sale with the release of the most powerful item we've ever created!
				</p>
			</div>
			<div class="center-socials half-bottom">
				<a href="#" class="icon icon-round icon-s no-border facebook-bg"><i class="fa fa-facebook"></i></a>
				<a href="#" class="icon icon-round icon-s no-border google-bg"><i class="fa fa-google-plus"></i></a>
				<a href="#" class="icon icon-round icon-s no-border twitter-bg"><i class="fa fa-twitter"></i></a>
				<div class="clear"></div>
			</div>
		</div>

		<div class="content-fullscreen badge-store">
			<div class="coverflow-thumbnails full-top">
				<div class="swiper-wrapper">
				<?php
				$args = array( 'post_type' => 'quote' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<div class="swiper-slide" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
			<?php
				endwhile;
			?>
				</div>
			</div>
		</div>


		<div class="content">
			<div class="center-text box-section-header">Recent Posts <i class="ion-ios-paper"></i></div>
			<?php 
				$args = array('post_type' => 'post','posts_per_page' => '1');
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()):
					while ($the_query->have_posts()):
					$the_query->the_post();

					// Include the page content template.
					get_template_part('content', 'archive');

					// End the loop.
					endwhile; endif;
			?>
		</div>

<?php get_footer()?>