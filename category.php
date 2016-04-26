<?php get_header(); ?>


<?php if ( get_cat_image() != '' ) {
	# code... ?>
	<div class="category-jumbotron" style="background-image: url(<?php echo get_cat_image(); ?>);">
		<?php ?>
	</div> <?php
} ?>

<div class="container">
	<div class="row">
		<div class="col l8 s12 category-posts" <?php if ( get_cat_image() == ''){?> style="top: 2em;"<?php }?> >
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
				            	<p><?php the_title(); ?></p>
								<p><span class="date"><?php echo the_date('d F Y'); ?></span> <span class="right"><a href="<?php the_permalink(); ?>" class="cap-text">Read more <i class="fa fa-chevron-right"></i></a></span></p>
				            </div>
			         	 </div>
					</div>


				<?php endwhile; ?>
			</div>
		</div>

		<div class="col l4 s12">
			<div> <?php get_sidebar(); ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>