<?php get_header(); ?>

	<div>
		
			<div class="container">
				<div class="row">
					<?php while (have_posts()): the_post() ?>
					  	<div class="col s12 l4">
					  		<div class="card">
							    <div class="card-image waves-effect waves-block waves-light">
									<?php
										// Output the featured image.
										if ( has_post_thumbnail() ) :
											the_post_thumbnail('medium');
										else: ?>
											<a class="post-thumbnail" href=" <?php the_permalink(); ?> ">  <?php the_title(); ?></a>
									<?php
										endif;
									?>
							    </div>
							    <div class="card-content">
							      <h5 class="grey-text text-darken-4"><?php the_title(); ?></h5>
							      <p><?php echo get_the_author(); ?></p>
							      <p><a href="<?php the_permalink(); ?> ">Read more</a></p>
							    </div>
							  </div>
					  	</div>
					<?php endwhile; ?>
				</div>
			</div>
	</div>

<?php get_footer(); ?>