<?php get_header(); ?>

	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
	?>

	<main role="main">

		<div class="intro" data-parallax="scroll" data-image-src="<?php echo $thumb_url ?>" style="height: <?php if(is_front_page()) echo '90vh' ?>">
			<div class="intro-content">
				<div class="lead">
					<h1><?php the_title(); ?></h1>
					<?php if(is_front_page()) echo '<a href="contact"><span class="button">Contact Me Today</span></a>' ?>
				</div>
			</div>
		</div>

		<section class="content">



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php edit_post_link(); ?>


			</article>
			<!-- /article -->

			<?php if(!is_front_page()) {
				echo "<div class='sidebar-widget aside'>";

				if(!function_exists('dynamic_sidebar') || 		!dynamic_sidebar('side'));

				echo "</div>";
			}; ?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_footer(); ?>
