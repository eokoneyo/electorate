<?php get_header(); ?>

	<div id="single-post">
		<?php while (have_posts()): the_post() ?>
			<div class="article-jumbotron" style="background-image: url(<?php
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo $feat_image;?>);">
				<h2 class="post-title center-align white-text"><?php the_title(); ?></h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<?php the_content(); ?>
						<?php comments_template('', true); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>