<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5')));
		$this->set('rubriques_parents', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
    }
	
	public function creation_article() {
		$this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5')));
		$this->set('rubriques_parents', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
	}
}
?>