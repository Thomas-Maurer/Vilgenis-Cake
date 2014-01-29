           <!--Début Menu gauche-->
	<div class="row"> 
        <div class="leftMenu">
            
                <ul class="panel nav nav-tabs gradient leftmenuFontColor ">  
                    <?php 
						foreach($rubriques_parents as $rubrique){
							
								$nom_rub = $rubrique['rubrique']['NOM_RUBRIQUE'];
								echo '<li>'.$this->Html->link($nom_rub ,array('controller' => 'rubriques','action' => "display/$nom_rub", 'full_base' => true)).'</li>';
						}
					?>
                </ul>  
            </div>
        </div>
    
 <!--Fin Menu gauche-->
 
