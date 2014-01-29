           <!--Début Menu gauche-->
	<div class="row"> 
        <div class="leftMenu">
            
                <ul class="panel nav nav-tabs gradient leftmenuFontColor ">  
                    <?php 
						foreach($rubriques_parents as $rubrique){
							$newR = 1;
							$RubasousRub = false;
							$fermebalise = false;
							foreach($rubriques_filles as $sousrub){
								if($sousrub['rubrique']['ID_RUBRIQUE_PARENT'] == $rubrique['rubrique']['id']){
									$RubasousRub = true;			
									$fermebalise = true;										
								}else{ 
									$RubasousRub = false;
								}
								if ($RubasousRub and $newR == 1){
									echo '<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">',$rubrique['rubrique']['NOM_RUBRIQUE'], ' <b class="caret"></b> </a>';
									echo '<ul class="dropdown-menu">';
									$newR++;
									$nom_rub = $sousrub['rubrique']['NOM_RUBRIQUE'];
									echo '<li>'.$this->Html->link( $nom_rub ,array('controller' => 'rubriques','action' => "display/$nom_rub", 'full_base' => true)).'</li>';
									continue;
								}else if($RubasousRub and $newR != 1){
									$nom_rub = $sousrub['rubrique']['NOM_RUBRIQUE'];
									echo '<li>'.$this->Html->link( $nom_rub ,array('controller' => 'rubriques','action' => "display/$nom_rub", 'full_base' => true)).'</li>';
									continue;
								}
							}
							if ($newR ==1 and !$fermebalise){
								$nom_rub = $rubrique['rubrique']['NOM_RUBRIQUE'];
								echo '<li>'.$this->Html->link($nom_rub ,array('controller' => 'rubriques','action' => "display/$nom_rub", 'full_base' => true)).'</li>';
							}
							if ($newR !=1 and $fermebalise){echo '</ul>';}
						}
					?>
                </ul>  
            </div>
        </div>
    
 <!--Fin Menu gauche-->
 
