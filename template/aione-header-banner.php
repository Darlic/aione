<?php
if( is_active_sidebar( 'aione-header-banner' )  ) : ?>
	<div id="aione_header_banner" class="aione-header-banner">
		<div class="aione-header-banner">
			<div class="wrapper">
				<?php dynamic_sidebar( 'aione-header-banner' ); ?>
				<div class="aione-clear">	
				</div><!-- .aione-clear -->
			</div><!-- .wrapper -->
		</div><!-- .aione-header-banner -->
	</div>
<?php endif;