<?php
class Rubriquescontroller extends AppController {
    var $name = 'rubriques';
	
	function index() {
        $this->set('rubriques', $this->rubrique->find('all'));
		$this->set('articles', $this->rubrique->article->find('first',array('order'=>'ID_ARTICLE DESC')));
		$this->set('lastarticles', $this->rubrique->article->find('all',array('order'=>'ID_ARTICLE DESC Limit 5')));
		
    }
	
	public function creation_rubrique() {
		}
		
		
}
?>