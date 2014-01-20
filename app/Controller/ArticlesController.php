<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'ID_ARTICLE DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'ID_ARTICLE DESC Limit 5')));
    }
	
	public function creation_article() {
		}
}
?>