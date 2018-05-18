<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>

	<section class="main-content">

		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<p>TÄMÄ ON index.php</p>
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<?php the_content() ?>
			</article>
		<?php endwhile; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer();
