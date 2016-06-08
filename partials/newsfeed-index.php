<div class="newsfeed">
		<div class="container">
			<h1 class="section-heading">News & Opinion <span class="highlight"></span></h1>
			<div class="row">
				<?php
					$args = array( 'post_type' => 'newsfeed', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ($loop->have_posts()): $loop->the_post() ?>
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
						            <a class="black-text" href="<?php the_permalink(); ?> ">  <?php the_title(); ?></a>
									<p class="date"><?php echo the_date('d F Y', false); ?></p>
						            </div>
							    </div>
							  </div>
					  	</div>
					<?php endwhile; ?>
			</div>
		</div>
	</div>