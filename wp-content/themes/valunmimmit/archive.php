<?php

get_header(); ?>

	<section class="main-content">

		TÄMÄ ON archive.php

		<?php if ( have_posts() ) : ?>
			<div class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
			<div class="articles-wrapper">

				<?php while ( have_posts() ) : the_post(); ?>
					
					

					
				<?php endwhile; ?>

			</div>
		<?php endif; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer();