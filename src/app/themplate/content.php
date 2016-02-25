<div class="container">
	<div class="starter-template section-form">
		<div class="row">
			<div class="col-xs-12 col-md-12 clear-both">
			    <?php 
			    if( !empty( $content_view ) && is_array( $content_view_include ) ){
			    	if( empty( $_SESSION['access_token'] ) ) { 
				 		include_once "$content_view_include[0]"; 
					} else{ 
						include_once "$content_view_include[1]"; 
					}
				} ?>
			</div>
		</div>
	</div>
	<div class="section-messages">
		<ul class="container_scroll">
			<?php if( isset( $_GET['page'] ) && 'all'== $_GET['page'] ) {
				$self->print_message_wall( );
			} else {
				$limit = LIMIT ;
				$self->print_message_wall( false, 0, $limit );
			} ?>
		</ul>
		<div class="display-all-block" >
			<!-- Indicates a successful or positive action -->
			<a id="display-all" class="btn btn-success" href="/wall?page=all">Показать все</a>
		</div>
	</div>
	

</div><!-- /.container -->