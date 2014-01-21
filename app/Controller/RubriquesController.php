<?php
class Rubriquescontroller extends AppController {
    var $name = 'rubriques';
	
	function index() {
	     $this->set('articles', $this->rubrique->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->rubrique->article->find('all',array('order'=>'id DESC Limit 5')));
       $this->set('rubriques_parents', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));

    }
}