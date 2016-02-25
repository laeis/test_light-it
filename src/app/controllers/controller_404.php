<?php

class Controller_404 extends Controller {
	
	function action_index() {
		$this->view->generate( 'header.php' );
		$this->view->generate( 'page_404.php' );
		$this->view->generate( 'footer.php' );
	}

}
