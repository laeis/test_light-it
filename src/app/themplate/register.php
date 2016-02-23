	<div class="container">
		<div class="starter-template">
			<?php if( empty( $_SESSION['access_token'] ) ) {
				 if( !empty( $content_view ) && is_array( $content_view_include ) ){
				 	include_once "$content_view_include[0]"; 
				 }
			} ?>
		</div>
	</div><!-- /.container -->