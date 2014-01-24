<?php

class Contient extends AppModel
{
    var $name = 'contient';
	public $belongsTo = array(
 'article' => array(
 'className' => 'articles',
 'foreignKey' => 'ID_ARTICLE',
 'conditions' => '',
 'fields' => '',
 'order' => ''
 ),
 'rubrique' => array(
 'className' => 'rubriques',
 'foreignKey' => 'ID_RUBRIQUE',
 'conditions' => '',
 'fields' => '',
 'order' => ''
 )
 );
	
}

?>