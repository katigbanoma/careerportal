<?php
/**
 * The template for displaying archives
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Career Portal
 * @since
 */

get_header();?>
<div id="page-content" class="header-clear-full">
	<div id="page-content-scroll">

		<div class="content-fullscreen">
			<div class="heading-strip bg-8" >
				<h3>
					Blog
				</h3>
				<!-- <span class="color-white">Study to show yourself approved</span> -->
			</div>
		</div>

		<div class="content top-10">
<?php
// Start the loop.
while (have_posts()):the_post();

// Include the page content template.
get_template_part('content', 'archive');

// End the loop.
endwhile;
?>
</div>
<a href="#" onClick="loadmore()" class="button button-blue button-full button-s"> Load More</a>


<?php get_footer();?>

