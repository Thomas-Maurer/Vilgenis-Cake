<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'ID_ARTICLE DESC')));
    }
	
	public function creation_article() {
		}
}
?>