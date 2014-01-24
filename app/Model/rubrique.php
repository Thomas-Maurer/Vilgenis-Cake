<?php

class Rubrique extends AppModel
{
    var $name = 'rubrique';
	var $hasAndBelongsToMany = array(
    'article' =>
        array(
            'className'              => 'article',
            'joinTable'              => 'contients',
            'foreignKey'             => 'ID_RUBRIQUE',
            'associationForeignKey'  => 'ID_ARTICLE',
        ));
		
		public $belongsTo = array(
        'RubriquesParent' => array(
            'className' => 'rubrique',
            'foreignKey' => 'ID_RUBRIQUE_PARENT',
			'conditions' =>array('RubriquesParent.ID_RUBRIQUE_PARENT'=>'NULL')
        )
    );
 
    public $hasMany = array(
        'RubriquesChildren' => array(
            'className' => 'rubrique',
            'foreignKey' => 'ID_RUBRIQUE_PARENT',
			'conditions' =>array('RubriquesChildren.ID_RUBRIQUE_PARENT'=>1)
        ),
		'contient' => array('foreignKey' => 'ID_RUBRIQUE')
    );
		
	public function getAllRubriques()
		{
		
			return $rubriques= $this->rubrique->find('all');
		}
	
	
}

?>