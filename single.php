<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<?php while (have_posts()): the_post() ?>
			
					<h2><?php the_title(); ?> </h2>
					<?php the_content(); ?>

				<?php endwhile; ?>

				<?php comments_template('', true); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>