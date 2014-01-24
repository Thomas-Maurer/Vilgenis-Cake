<?php
class Articlescontroller extends AppController {
    var $name = 'articles';
	
	function index() {
        $this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5','conditions' =>array('articles.VISIBLE_ARTICLE = 1'))));
		$this->set('rubriques_parents', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
    }
	
	public function creation_article() {
		$this->set('articles', $this->article->find('first',array('order'=>'id DESC')));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5','conditions' =>array('articles.VISIBLE_ARTICLE = 1'))));
		$this->set('rubriques_parents', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
		
	}
	public function add(){
	
		
		
		 if (empty($this->data)==false){
             $this->article->save($this->data);
			 $this->request->data['contient']['ID_ARTICLE']=$this->article->id; // Creation avec la rubrique
			 //var_dump($this->data);
			 $resultat = $this->article->contient->save($this->data);
			 $this->request->data['contient']['ID_RUBRIQUE']=$this->request->data['contient']['Sousrubrique']; // Creation avec la sous rubrique
			 //var_dump($this->data);
			 $this->article->contient->create();
			 $resultat2 = $this->article->contient->save($this->data);
			 if ($resultat and $resultat2) {
                $this->flash(
            'Création d\'article terminé.',
            array(
                                'controller'=> '',
                                'action'=>'index')
            );
            }
        }
    }
	
	public function display($titre){
	
		$this->set('articles', $this->article->find('first',array('conditions'=>array("TITRE_ARTICLE ='$titre'"))));
		$this->set('lastarticles', $this->article->find('all',array('order'=>'id DESC Limit 5')));
		$this->set('rubriques_parents', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NULL'))));
		$this->set('rubriques_filles', $this->article->rubrique->find('all',array('conditions' =>array('rubrique.ID_RUBRIQUE_PARENT IS NOT NULL'))));
	
	}
	
}
?>