		<!-- close div from body  -->
		</div>
			<footer class="page-footer">
	          <div class="container">
	            <div class="row">
	            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget') ) : 

					endif; ?>
	            </div>
	          </div>
	          <div class="footer-copyright">
	            <div class="container">
	            	<p>&copy <?= date('Y') ?> <?php bloginfo('name') ?> </p>
					<?php wp_footer(); ?>
	            	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
	            </div>
	          </div>
	        </footer>
	</body>
</html>