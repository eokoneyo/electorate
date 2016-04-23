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
											<div class="index-thumbnails" style="background-image: url(<?php
												$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;?>);">
												<div class="tint"></div>
												<div class="title">
													<h5 class="white-text"><?php the_title(); ?></h5>
													<p class="white-text"><?php echo the_date('d F Y', false); ?></p>
												</div>
											</div>
											
											<?php 
											
										else: ?>
											<div class="noimage-content">
												<h5 class=""><a class="grey-text text-darken-4" href="<?php the_permalink(); ?> ">  <?php the_title(); ?></a></h5>
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
						                <?php the_category(', '); ?>
								      	<!-- <p><a href="<?php the_permalink(); ?> ">Read more</a></p> -->
						            </div>
							    </div>
							  </div>
					  	</div>
					<?php endwhile; ?>
				</div>
			</div>
	</div>

<?php get_footer(); ?>
