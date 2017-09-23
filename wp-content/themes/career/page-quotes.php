<?php get_header(); ?>

<div id="page-content" class="page-content header-clear-full">
			<div id="page-content-scroll">
				<div class="heading-strip bg-9 no-bottom">
					<h3>Today's Quotes</h3>
					<p>Essential For your Career Growth</p>
					<i class="fa fa-star"></i>
					<div class="overlay dark-overlay"></div>
				</div>
				<div class="portfolio-adaptive-controls">
					<h4>Change View</h4>
					<a class="portfolio-switch adaptive-three active-adaptive" href="#"><i class="fa fa-th"></i></a>
					<a class="portfolio-switch adaptive-two" href="#"><i class="fa fa-th-large"></i></a>
					<a class="portfolio-switch adaptive-one" href="#"><i class="fa fa-navicon"></i></a>
					<div class="clear"></div>
				</div>
				<div class="content no-material gallery-adaptive">
					<div class="portfolio-adaptive portfolio-adaptive-three">
						<?php
							$args = array( 'post_type' => 'quote' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
							<div class="portfolio-item">
								<a class="show-gallery" href="<?php #echo get_stylesheet_directory_uri();?>/images/pictures/1.jpg" title="Caption here!">
									<img data-original="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="preload-image responsive-image no-bottom">
								</a>
							</div>
						<?php
							endwhile;
						?>
					</div>
				</div>
				<div class="decoration decoration-margins"></div>

		

<?php get_footer(); ?>
