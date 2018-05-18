<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

	<section class="main-content">

		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<p>TÄMÄ ON single.php</p>
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<?php the_content() ?>
			</article>
		<?php endwhile; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer();
