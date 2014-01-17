<?php
class Articlescontroller extends AppController {
    var $name = 'Articles';
	
	function index() {
        $this->set('Article', $this->Article->find('all'));
    }
}
?>