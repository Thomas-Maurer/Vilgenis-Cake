<div class="col-xs-2 col-md-2 col-lg-2 col-md-offset-9 col-xs-offset-9 col-md-offset-1 col-lg-offset-1 panel Article ListeArticle">
        		<div class="panel"style="background:none">
                	<h5> Liste anciens articles : <small>Phrase d'accroche</small></h5>
                </div>
                <div class="panel" style="background:none">
					<?php foreach($lastarticles as $article){
						$titre = $article['article']['TITRE_ARTICLE'];
						 echo $this->Html->link( $titre ,array('controller' => 'articles','action' => "display/$titre", 'full_base' => true));
						 echo'</br>';
						 };
						 
					?>
					
                </div>
            </div>