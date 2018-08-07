<?php
/**
 * The template for front-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleanoil
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row banner">
				<div class="container">
					<div class="block">
						<div class="col-2">23412314234</div>
						<div class="col-2">23412314234</div>
					</div>
				</div>
				<div class="cover">
					<?php the_post_thumbnail();?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
