<?php get_header(); ?>

	<div class="container">
		
		<div class="row">
			
			<?php while (have_posts()): the_post() ?>
			
				<div class="col s12">
					<h2><?php the_title(); ?> </h2>
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>

			<?php comments_template('', true); ?>
		</div>

	</div>

<?php get_footer(); ?>