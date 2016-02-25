<div class="btn-group starter-template">
	<a class="btn btn-default" href="<?php echo $path['fb'];?>">Facebook</a>
	<a class="btn btn-default" href="<?php echo $path['go'];?>">Google+</a>
	<a class="btn btn-default" href="<?php echo $path['vk'];?>">Facebook</a>
</div>
<?php if ( '/wall' == $_SERVER['REQUEST_URI'] ) { ?>
	<div class="alert alert-warning">
		<p>"Для добавления и комментирования сообщений выполните вход"</p>
	</div> 
<?php }