	<div class="container">
		<div class="starter-template">
			<?php if( empty( $_SESSION['access_token'] ) ) { 
				include_once "$content_view";
			} ?>
		</div>
	</div><!-- /.container -->