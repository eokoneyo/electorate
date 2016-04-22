<?php get_header(); ?>

	<div>
		
			<div class="container">
				<div class="row">
					<?php while (have_posts()): the_post() ?>
					  	<div class="col s12 l4">
					  		<div class="card">
							    <div class="card-image post-card">
									<?php
										// Output the featured image.
										if ( has_post_thumbnail() ) :
											?>
											<div class="tint"></div>
											<div class="title">
												<h5 class="white-text center-align"><?php the_title(); ?></h5>
												<p class="center-align white-text"><?php echo the_date('d F Y', false); ?></p>
											</div>
											<?php the_post_thumbnail('medium');
											
										else: ?>
											<div class="noimage-content">
												<h5 class="grey-text text-darken-4"><a href=" <?php the_permalink(); ?> ">  <?php the_title(); ?></a></h5>
												<p><?php echo the_date('d F Y', false); ?></p>
												<?php the_excerpt(); ?>
											</div>
									<?php
										endif;
									?>
							    </div>
							    <div class="card-content row valign-wrapper">
								    <div class="col s4 m2">
						                <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
						            </div>
						            <div class="col s8 m10">
						                <p><?php echo get_the_author(); ?></p>

								      	<p><a href="<?php the_permalink(); ?> ">Read more</a></p>
						            </div>
							    </div>
							  </div>
					  	</div>
					<?php endwhile; ?>
				</div>
			</div>
	</div>

<?php get_footer(); ?>
