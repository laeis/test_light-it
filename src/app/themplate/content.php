<div class="container">
	<div class="starter-template section-form">
		<div class="row">
			<div class="col-xs-12 col-md-12 clear-both">
			    <?php if( empty( $_SESSION['access_token'] ) ) { 
					print_register_content_sestion( $path );
				} else{ ?>
					<div class="row starter-template clear-both ">
						<div class="col-xs-6 col-md-6 ">
						 	<span class="float-left">Добро пожаловать: <?php echo !empty( $_SESSION['author_name'] ) ? $_SESSION['author_name'] : 'Гость'; ?> </span>
						</div>
						<div class="col-xs-6 col-md-6">
							<a class="float-right" href="/?action=logout" > Выйти </a> 
						</div>
					</div>
					
					<form class="form-inline" role="form" method="POST" action="/chat.php">
						<?php if( !empty( $_GET['parent-id'] ) && $_GET['action'] == 'reply' ) {
							$message_db = db_get_messages_text( trim( intval(  $_GET['parent-id'] ) ) );
							while(  $message = mysqli_fetch_object( $message_db ) ) {
								echo "<p class='message-content text-left'>";
								echo trim( $message->message_text );
								echo "</p>";
							}
						} ?>
						<div class="form-group form-group-extarea">
							
							<textarea id="exampleInputTextl2" class="form-control" name="text-message" rows="3"><?php if( !empty( $_GET['message-id'] ) && $_GET['action'] == 'edit' ){
									$message_db = db_get_messages_text( trim( intval(  $_GET['message-id'] ) ) );
									
									while(  $message = mysqli_fetch_object( $message_db ) ) {
										echo trim( $message->message_text );
									}
								} ?></textarea>
						</div>
						<input type="hidden" name="author_id" value="<?php echo $_SESSION["author_id"];?>">
						<input type="hidden" name="parent_id" value="<?php echo !empty($_GET['parent-id']) ? $_GET['parent-id'] : '' ?>">
						<input type="hidden" name="current_id" value="<?php echo ( !empty( $_GET['message-id'] ) && $_GET['action'] == 'edit' ) ? $_GET['message-id'] : '' ?>">
						
						<?php if( isset( $_GET['action'] ) && $_GET['action'] == 'reply' ){
							echo '<button type="submit" name="send-message" class="btn btn-default">Ответить</button> <a  href="/" class="btn btn-default">Отменить</a>';
						} else if ( isset( $_GET['action'] ) && $_GET['action'] == 'edit'  ){
							echo '<button type="submit" name="send-message" class="btn btn-default">Редактировать</button> <a href="/" class="btn btn-default">Отменить</a>';
						}else {
							echo '<button type="submit" name="send-message" class="btn btn-default">Отправить</button>';
						} ?>	
					
					</form>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="section-messages">
		<ul class="container_scroll">
			<?php if( isset( $_GET['page'] ) && 'all'== $_GET['page'] ) {
				print_message_wall( );
			} else {
				$limit = LIMIT ;
				print_message_wall( false, 0, $limit );
			} ?>
		</ul>
		<div class="display-all-block" >
			<!-- Indicates a successful or positive action -->
			<a id="display-all" class="btn btn-success" href="/chat?page=all">Показать все</a>
		</div>
	</div>
	

</div><!-- /.container -->