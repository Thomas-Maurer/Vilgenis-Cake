<?php
class Rubriquescontroller extends AppController {
    var $name = 'rubriques';
	
	function index() {
        $this->set('rubriques', $this->rubrique->find('all'));
    }
	
	public function creation_rubrique() {
		}
		
		
}
?>