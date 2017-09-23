<?php get_header(); ?>

<?php
// Start the loop.
while (have_posts()):the_post();

?>


<div id="page-content" class="page-content header-clear-full">
<div id="page-content-scroll">
	<?php 
		$image_url =  get_the_post_thumbnail_url();
		if (isset($image_url)):
			$background_image = 'style=" background-image: url('. $image_url .') " ';
	?>
		<div class="featured-image" <?php echo $background_image?> ></div>
	<?php endif ?>
	<style>
		.featured-image{
			height: 30%;
			width: 100%;
			background-size: cover;
		}
	</style>

	<div class="content">
		<h3 class="half-bottom">
			<?php echo get_the_title() ?>
		</h3>
		
		<p><?php echo get_the_content() ?></p>

		<?php echo "Start Date:" . get_field('start_date'); ?>
		
		<?php echo "End Date:" . get_field('end_date'); ?>

		<div class="news-article-share half-bottom">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>"><i class="facebook-color fa fa-facebook"></i></a>
			<a href="https://twitter.com/home?status=<?php echo get_permalink() ?>"><i class="twitter-color fa fa-twitter"></i></a>
			<a href="https://plus.google.com/share?url=<?php echo get_permalink() ?>"><i class="google-color fa fa-google-plus"></i></a>
			<a href="whatsapp://send?text=<?php echo get_permalink() ?>" data-action="share/whatsapp/share"><i class="whatsapp-color fa fa-whatsapp"></i></a>
			<a href="http://www.enableds.com/cdn-cgi/l/email-protection#0c332a7f796e66696f78315563797e537f796e66696f782a6e636875315563797e53786974785364697e69"><i class="mail-color fa fa-envelope-o"></i></a>
			<div class="clear"></div>
		</div>
		
		
	</div>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>
