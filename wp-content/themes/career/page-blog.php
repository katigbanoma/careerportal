<?php get_header();?>
		<div id="page-content" class="header-clear">
			<div id="page-content-scroll">
				<div class="content-fullscreen">
					<div class="heading-strip bg-8" >
						<h3>
							Blog
						</h3>
						<!-- <span class="color-white">Study to show yourself approved</span> -->
					</div>
				</div>
			<div class="content-fullscreen top-10">
				<?php
					$args = array('post_type' => 'post');
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()):
					while ($the_query->have_posts()):
					$the_query->the_post();
					// $background = empty(get_the_post_thumbnail_url()) ? '' : 'style="background-image: url(' . get_the_post_thumbnail_url() . ')"';
				?>
			<div class="card-large-layout boxed bg-must-white box-section-body">
				<div class="heading-strip bg-2">
					<h3>
						<?php echo $post->post_title?>
					</h3>
					<span class="color-white"><?php echo get_post_time('F j, Y')?><span>
				</div>
					<p class="center-boxed-text">
						<?php echo substr(get_the_content(), 0, 150)?>
					</p>
					<p class="center-text">
						<a href="<?php echo get_permalink()?>" class="badge-read">Continue Reading</a>
					</p>
				<div class="clear"></div>
			</div>
				<?php endwhile;// end of the loop. ?>
				<?php  else :?>
			<div> No Blog Post </div>
				<?php endif;?>
			<div class="decoration"></div>
		</div>

	<a href="#" onClick="loadmore()" class="button button-blue button-full button-s"> Load More</a>

<?php get_footer();?>

