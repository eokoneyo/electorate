<div id="comments">
	<h2 class="comments-title">
		<?php
			if (get_comments_number() > 0) {
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'dante' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
			}
		?>
	</h2>
	<?php wp_list_comments(array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				)); ?> 
</div>

<div id="comments-form">
	<?php comment_form(); ?>
</div> 


