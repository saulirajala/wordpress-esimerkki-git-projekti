<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	<section class="main-content">

			<article>
				<p>TÄMÄ ON 404</p>
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<?php the_content() ?>
			</article>

	</section>

<?php get_sidebar(); ?>

<?php get_footer();
