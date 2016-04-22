<?php get_header(); ?>

	<div id="single-post">
		<?php while (have_posts()): the_post() ?>
			<div class="article-jumbotron" style="background-image: url(<?php
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo $feat_image;?>);">
				<div class="tint"></div>
				<div class="post-title">
					<div class="container">
						<h2 class="white-text"><?php the_title(); ?></h2>
						<p class="white-text"><?php echo the_date('d F Y', false); ?></p>
						<p >by <?php echo get_the_author(); ?></p>
					</div>
				</div>
			</div>
			<div class="container post-content">
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