<div class="row starter-template clear-both ">
	<div class="col-xs-6 col-md-6 ">
	 	<span class="float-left">Добро пожаловать: <?php echo !empty( $_SESSION['author_name'] ) ? $_SESSION['author_name'] : 'Гость'; ?> </span>
	</div>
	<div class="col-xs-6 col-md-6">
		<a class="float-right" href="/logout?action=logout" > Выйти </a> 
	</div>
</div>

<form class="form-inline" role="form" method="POST" action="/wall">
	<?php if( !empty( $_GET['parent-id'] ) && $_GET['action'] == 'reply' ) {
		$message_parent_text = $self->print_messages_text( $_GET['parent-id'] );
		if( ! empty( $message_parent_text ) ){
			echo "<p class='message-content text-left'>";
			echo trim( $message_parent_text['message_text'] );
			echo "</p>";
		}
		
	} ?>
	<div class="form-group form-group-extarea">
		
		<textarea id="exampleInputTextl2" class="form-control" name="text-message" rows="3"><?php if( !empty( $_GET['message-id'] ) && $_GET['action'] == 'edit' ){
				$message_text = $self->print_messages_text( $_GET['message-id'] );
				if( ! empty( $message_text ) ){
					echo trim( $message_text['message_text'] );
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