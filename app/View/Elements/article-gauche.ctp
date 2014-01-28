<div class="col-xs-9 col-md-7 col-lg-7 panel Article">
    <div class="panel"style="background:none">
		<?php 
		if(count($articles) !=0){
        echo '<h5>';
		echo $articles['article']['TITRE_ARTICLE'];
		echo '</h5>';
		echo '</div>';
		echo '<div class="panel" style="background:none">';
		echo $articles['article']['CONTENU_ARTICLE'];
		}
		else{
		echo '<br><p>Cette rubrique ne contient aucun article assossié.</p>';
		echo '<p><big>'.$this->Html->link('Retour à l acceuil' ,array('controller' => '','action' => "index", 'full_base' => true)).'</big><p>';
		}
		?>
    </div>
</div>