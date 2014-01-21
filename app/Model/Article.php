<?php

class Article extends AppModel
{
    var $name = 'article';
	var $hasAndBelongsToMany = array(
    'rubrique' =>
        array(
            'className'              => 'rubrique',
            'joinTable'              => 'contient',
            'foreignKey'             => 'ID_ARTICLE',
            'associationForeignKey'  => 'ID_RUBRIQUE',
        ));
}

?>