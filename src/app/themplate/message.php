<li id="message-id-<?php echo $message->message_id ?>" class="message-body element <?php  echo ! empty( $messages_child->num_rows ) ? 'message-has-children' : ''; ?>">
	<div class="message-content message-id-<?php echo $message->message_id ?>" >
		<?php if( ! empty( $messages_child->num_rows ) ){ ?>
			<a class="collapsed a-triangle-bottom"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $message->message_id ?>" aria-expanded="false" aria-controls="collapseOne" title="Читать коментарии ( <?php echo $messages_child->num_rows; ?> )">
        		<span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom"><span class="badge"><?php echo $messages_child->num_rows; ?></span></span>
       		</a>
		<?php } else { ?>
			<span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
		<?php } ?>

		<span class="glyphicon glyphicon-calendar" aria-hidden="true">
			<span class="message-date" ><?php echo ( $message->message_date == $message->message_date_repair ) ? "Отправлено " . date( "j M,Y", strtotime( $message->message_date ) ) :  "Отредактировано " .date( "M-j,Y", strtotime( $message->message_date_repair ) ); ?>
			</span>
		</span>
		<p class="message-text"><?php echo $message->message_text ?></p>
		<div class="text-right">
			<?php if ( !empty( $_SESSION['author_id'] ) && $message->message_author != $_SESSION['author_id'] ) { ?>
				<span class="message-reply "><a id="glyphicon-share-"href="/chat.php?action=reply&parent-id=<?php echo $message->message_id ?>"> <span class="glyphicon glyphicon-share" aria-hidden="true"></span> Ответить</a></span>
			<?php } else if ( !empty( $_SESSION['author_id'] ) && $message->message_author == $_SESSION['author_id'] ) { ?>
				<span class="message-edit "><a href="/chat.php?action=edit&message-id=<?php echo $message->message_id ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Редактировать</a></span>
			<?php } ?>
		</div>
	</div>
	<?php if ( ! empty( $messages_child->num_rows ) ) {
		echo'<ul id="collapse_' . $message->message_id . '" class="panel-collapse collapse sub-message" role="tabpanel" aria-labelledby="headingOne">';
				print_message_wall( $messages_child );
		echo "</ul>";	
	}?>
</li>