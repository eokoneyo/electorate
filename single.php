<?php get_header(); ?>

	<div id="single-post">
		<?php while (have_posts()): the_post() ?>
			<?php  echo get_the_post_thumbnail(); ?>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h2><?php the_title(); ?> </h2>
						<?php the_content(); ?>
						<?php comments_template('', true); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>