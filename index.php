<?php get_header(); ?>

	<div>
		<?php while (have_posts()): the_post() ?>
			<div class="container">
				<div class="row">
				  	<div class="col s12 l4">
				  		<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="http://materializecss.com/images/office.jpg">
						    </div>
						    <div class="card-content">
						      <h5 class="grey-text text-darken-4"><?php the_title(); ?></h5>
						      <p><a href="<?php the_permalink(); ?> ">Read more</a></p>
						    </div>
						  </div>
				  	</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>