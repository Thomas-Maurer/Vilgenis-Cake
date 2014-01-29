<?php
class Rubriquescontroller extends AppController {
    var $name = 'rubriques';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'id DESC','conditions' =>array('article.VISIBLE_ARTICLE = 1'))));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5','conditions' =>array('article.VISIBLE_ARTICLE = 1'))));
        $this->set('rubriques_parents', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
    }
	
		public function display($nom_rub){
		$nom_rub = addslashes ($nom_rub );
		$rubrique_id = $this->rubrique->find('first',array('conditions' =>array("rubrique.NOM_RUBRIQUE = '$nom_rub'")));
		$rubrique_id = $rubrique_id["rubrique"]["id"];
		
		$this->set('rubriqueencours',$this->rubrique->find('first',array('conditions' =>array("rubrique.NOM_RUBRIQUE = '$nom_rub'"))));
		$this->set('articles', $this->rubrique->article->contient->find('first',array('conditions' =>array("contient.ID_RUBRIQUE = '$rubrique_id' AND article.VISIBLE_ARTICLE = 1"))));
		$this->set('lastarticles', $this->rubrique->article->contient->find('all',array('conditions' =>array("contient.ID_RUBRIQUE = '$rubrique_id' AND article.VISIBLE_ARTICLE = 1"))));
		$this->set('rubriques_parents', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
	
		/*var_dump('articles', $this->rubrique->article->find('first',array('order'=>'id DESC')));
		echo"<br><br>";
		var_dump($rubrique_id);*/
	}
}