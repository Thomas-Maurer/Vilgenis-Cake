<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('all'));
    }
}
?>