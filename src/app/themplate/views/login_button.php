<div class="btn-group starter-template">
	<a class="btn btn-default" href="<?php echo $data['fb'];?>">Facebook</a>
	<a class="btn btn-default" href="<?php echo $data['go'];?>">Google+</a>
	<a class="btn btn-default" href="<?php echo $data['vk'];?>">Facebook</a>
</div>
<?php if ( '/chat.php' == $_SERVER['PHP_SELF'] ) { ?>
	<div class="alert alert-warning">
		<p>"Для добавления и комментирования сообщений выполните вход"</p>
	</div> 
<?php }