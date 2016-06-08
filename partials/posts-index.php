
<div class="all-posts">
			<?php if ( have_posts() ) : ?>
				<div class="container">
					<?php $post = $posts[0]; $c=0;?>
					<div class="row">
						<?php while (have_posts()): the_post() ?>
							<?php $c++;
							if( !$paged && $c == 1) :?>
							  	<div class="col s12 l7">
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
															<h5 class="white-text"><a class="white-text" href="<?php the_permalink(); ?> ">  <?php the_title(); ?></a></h5>
															<p class="date"><?php echo the_date('d F Y', false); ?></p>
														</div>
													</div>
													
													<?php 
													
												else: ?>
													<div class="noimage-content">
														<h5 class=""><a class="grey-text text-darken-4" href="<?php the_permalink(); ?> ">  <?php the_title(); ?></a></h5>
														<p class="date"><?php echo the_date('d F Y', false); ?></p>
														<?php the_excerpt(); ?>
													</div>
											<?php
												endif;
											?>
									    </div>
									    <div class="card-content row valign-wrapper">
									    	 <a class="btn-floating btn-large waves-effect waves-light yellow lighten-1">
									    	 <span class="fb-comments-count" data-href="<?php the_permalink(); ?> "></span><i class="fa fa-commenting-o" aria-hidden="true"></i></a>
										    <div class="col s4 m2">
								                <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
								            </div>
								            <div class="col s8 m10">
								                <p><?php echo get_the_author(); ?></p>
								                <?php the_category(', '); ?>
								            </div>
									    </div>
									  </div>
							  	</div>
							<?php endif;?>
						<?php endwhile; ?>

						<?php
							$args = array('offset' => 1, 'posts_per_page' => 2 );
							$loop = new WP_Query( $args ); ?>
							<div class="col s12 l4">
							  	<div class="row">
									<?php while ($loop->have_posts()): $loop->the_post() ?>
								  		<div class="col s12 l12">
								  			<div class="card">
											    <div class="card-content row valign-wrapper">
											    	 <a class="btn-floating btn-large waves-effect waves-light yellow lighten-1">
											    	 <span class="fb-comments-count" data-href="<?php the_permalink(); ?> "></span><i class="fa fa-commenting-o" aria-hidden="true"></i></a>
												    <div class="col s4 m2">
										                <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
										            </div>
										            <div class="col s8 m10">
										                <p><?php echo get_the_author(); ?></p>
										                <?php the_category(', '); ?>
										            </div>
											    </div>
											</div>
								  		</div>
									<?php endwhile; ?>
							  	</div>
							</div>

					</div>
				</div>
			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>