<?php
class Rubriquescontroller extends AppController {
    var $name = 'rubriques';
	
	function index() {
        $this->set('rubriques', $this->rubrique->find('all',array('order'=>'id  DESC')));
		$this->set('sous_rubriques',$this->sous_rubriques->query("SELECT * FROM rubrique WHERE ID_RUBRIQUE_PARENT != NULL;"));
		$this->set('rubriques_parent',$this->rubriques_parent->query("SELECT * FROM rubrique WHERE ID_RUBRIQUE_PARENT = NULL;"));
    }
}