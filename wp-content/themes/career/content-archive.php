	<?php
	/**
	* The template used for displaying archive content
	*
	* @package WordPress
	* @subpackage Career
	* @since
	*/
	?>



	<?php if (have_posts) : while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID();?>" class="card-large-layout boxed bg-must-white box-section-body">
			<div class="heading-strip bg-2">
		<?php the_title('<h3>', '</h3>');?>
				<span class="color-white"><?php echo get_post_time('F j, Y')?><span>
			</div>
			
		<?php the_content('<p class="center-boxed-text"></p>')?>
			<a href="<?php echo get_permalink() ?>" onClick="loadmore()" class="button button-yellow button-full button-s"> Continue Reading</a>
			<div class="clear"></div>
		</div>

    <?php endwhile; else: ?>
    <p>There is no post available<p>
    <?php endif; ?>




