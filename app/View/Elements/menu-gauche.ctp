           <!--Début Menu gauche-->
	<div class="row"> 
        <div class="leftMenu">
            <div class="col-xs-4 col-md-2 col-lg-2 ">  
                <ul class=" panel nav nav-pills nav-stacked gradient leftmenuFontColor">  
                    <?php 

						foreach($rubriques_parents as $rubrique){
							$newR = 1;
							$RubasousRub = false;
							$fermebalise = false;
							foreach($rubriques_filles as $sousrub){
									if($sousrub['rubrique']['ID_RUBRIQUE_PARENT'] == $rubrique['rubrique']['id']){
										$RubasousRub = true;			
										$fermebalise = true;										
									}else { $RubasousRub = false;}
									if ($RubasousRub and $newR == 1){
										echo '<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">',$rubrique['rubrique']['NOM_RUBRIQUE'], ' <b class="caret"></b> </a>';
										echo '<ul class="dropdown-menu">';
										$newR++;
										continue;
									}elseif($RubasousRub and $newR != 1){
										echo '<li><a href="">',$sousrub['rubrique']['NOM_RUBRIQUE'], '</a></li> ';
										continue;
									}
						}
						if ($newR ==1 and !$fermebalise){echo '<li> <a href="#">',$rubrique['rubrique']['NOM_RUBRIQUE'],'</a> </li>';}
							if ($newR !=1 and $fermebalise){echo '</ul>';}
						}
					?>
                </ul>  
            </div>  
        </div>
    
 <!--Fin Menu gauche-->
 
