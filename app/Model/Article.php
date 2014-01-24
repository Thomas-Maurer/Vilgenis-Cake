<?php

class Article extends AppModel
{
    var $name = 'article';
	var $hasAndBelongsToMany = array(
    'rubrique' =>
        array(
            'className'              => 'rubrique',
            'joinTable'              => 'contients',
            'foreignKey'             => 'ID_ARTICLE',
            'associationForeignKey'  => 'ID_RUBRIQUE',
        ));
		var $hasMany = array('contient' => array('foreignKey' => 'ID_ARTICLE'));
}

?>