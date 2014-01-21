<?php

class Rubrique extends AppModel
{
    var $name = 'rubrique';
	public function getAllRubriques()
		{
		
			return $rubriques= $this->rubrique->find('all');
		}
	
	
}

?>