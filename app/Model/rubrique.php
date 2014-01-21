<?php

class Rubrique extends AppModel
{
    var $name = 'rubrique';
	var $hasAndBelongsToMany = array(
    'article' =>
        array(
            'className'              => 'article',
            'joinTable'              => 'contient',
            'foreignKey'             => 'ID_RUBRIQUE',
            'associationForeignKey'  => 'ID_ARTICLE',
        ));
		
		public $belongsTo = array(
        'Parent' => array(
            'className' => 'rubrique',
            'foreignKey' => 'ID_RUBRIQUE_PARENT',
			'conditions' =>array('Parent.ID_RUBRIQUE_PARENT'=>0)
        )
    );
 
    public $hasMany = array(
        'Children' => array(
            'className' => 'rubrique',
            'foreignKey' => 'ID_RUBRIQUE_PARENT',
			'conditions' =>array('Children.ID_RUBRIQUE_PARENT'=>1)
        )
    );
		
	public function getAllRubriques()
		{
		
			return $rubriques= $this->rubrique->find('all');
		}
	
	
}

?>