<div class="col-xs-2 col-md-3 col-lg-2 col-md-offset-9 col-xs-offset-9 col-lg-offset-1 panel Article ListeArticle">
        		<div class="panel"style="background:none">
                	<h5> Liste anciens articles : <small>Phrase d'accroche</small></h5>
                </div>
                <div class="panel" style="background:none">
                	<p>
<?php
echo $this->Form->input('txt', array('type' => 'text','label' => 'Titre de l article:  '));
?>
</p>

<p>
<?php
echo "-> Plugin html <-";
?>
</p>

<p>
<?php
echo "<b>Visible: </b>";
echo $this->Form->input('Visibilite', array(
     'div' => false,
     'label' => true,
     'type' => 'radio',
	  'legend' => false,
     'options' => array(1 => 'Oui    ', 2 => 'Non')
));
  ?>
</p>

<p>
<?php
/*echo $this->Form->input('titre', array('type' => 'text');*/
?>
</p>

<p>
<?php echo $this->Form->input('rubrique', array('label' => 'Rubrique:  ','options' => array(
    'Value 1'=>'rubrique 1',
    'Value 2'=>'rubrique 2',
    'Value 3'=>'rubrique 3'
 ))); ?>
 </p>
 
 <p>
<?php echo $this->Form->input('sous_rubrique', array('label' => 'Sous-rubrique:  ','options' => array(
    'Value 1'=>'sous_rubrique 1',
    'Value 2'=>'sous_rubrique 2',
    'Value 3'=>'sous_rubrique 3'
 ))); ?>
 </p>

<p>
<?php
echo $this->Html->link(
    'Enter',
    '/pages/home',
    array('class' => 'button', 'target' => '_blank')
);
?>
</p>
                </div>
            </div>