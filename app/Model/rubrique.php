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
	public function getAllRubriques()
		{
		
			return $rubriques= $this->rubrique->find('all');
		}
	
	
}

?>