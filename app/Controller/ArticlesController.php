<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5')));
		$this->set('rubriques', $this->article->rubrique->find('all'));
    }
	
	public function creation_article() {
		$this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5')));
		$this->set('rubriques', $this->article->rubrique->find('all'));
	}
}
?>