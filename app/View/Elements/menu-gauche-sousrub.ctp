           <!--Début Menu gauche-->
	<div class="row"> 
        <div class="leftMenu">
            <div class="col-xs-4 col-md-2 col-lg-2 ">  
                <ul class=" panel nav nav-pills nav-stacked gradient leftmenuFontColor">  
                    <?php 
						    //var_dump($rubriqueencours);
							$newR = 1;
							$RubasousRub = false;
							$fermebalise = false;
							foreach($rubriques_filles as $sousrub){
								if($sousrub['rubrique']['ID_RUBRIQUE_PARENT'] == $rubriqueencours['rubrique']['id']){
									$RubasousRub = true;			
									$fermebalise = true;										
								}else{ 
									$RubasousRub = false;
								}
								if ($RubasousRub and $newR == 1){
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
								$nom_rub = $rubriqueencours['rubrique']['NOM_RUBRIQUE'];
								echo '<li>'.$this->Html->link($nom_rub ,array('controller' => 'rubriques','action' => "display/$nom_rub", 'full_base' => true)).'</li>';
							}
					
					?>
                </ul>  
            </div>  
        </div>
    
 <!--Fin Menu gauche-->
 
