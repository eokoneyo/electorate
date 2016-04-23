<?php get_header(); ?>



<div class="category-jumbotron">
	
</div>

<div class="container">
	<div class="row">
		<div class="col s8">
			<div class="row">
				<?php while (have_posts()) : the_post(); ?>

					<div class="col s12">
						<div class="card">
				            <?php 
				            	if(has_post_thumbnail()){ ?>
				            		<div class="card-image">
						              <img src="<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;?>">
						            </div>
				            <?php	}
				            ?>
				            <div class="card-content">
				            	<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
				            	<p>By <?php echo get_the_author(); ?></p>
								<p><?php echo the_date('d F Y'); ?></p>
				            </div>
			         	 </div>
					</div>


				<?php endwhile; ?>
			</div>
		</div>

		<div class="col s4">
			<div> <?php get_sidebar(); ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>