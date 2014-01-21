<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
	    $AllRubriques =  $this->article->rubrique->find('all');
        $this->set('articles', $this->article->find('first',array('order'=>'ID_ARTICLE DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'ID_ARTICLE DESC Limit 5')));
		$this->set('rubriques', $AllRubriques);
		
		
    }
	
	public function creation_article() {
			$AllRubriques =  $this->article->rubrique->find('all');
			$this->set('rubriques', $AllRubriques);
		}
}
?>