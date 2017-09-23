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


        <?php if (have_posts) : while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID();?>" class="card-large-layout boxed bg-must-white box-section-body">
                <div class="heading-strip bg-2">
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <span class="color-white">
                        <?php echo get_post_time('F j, Y')?>
                    <span>
                </div>
                <a href="<?php echo get_permalink() ?>" onClick="loadmore()" class="button button-yellow button-full button-s">
                    Continue Reading
                </a>
                <div class="clear"></div>
            </div>
        <?php endwhile; else: ?>
                <p>There is no post available<p>
        <?php endif; ?>
        


<?php get_footer(); ?>