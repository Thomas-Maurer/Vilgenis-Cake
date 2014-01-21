<?php echo $this->Html->script('../tinymce/tinymce.min.js');?>
<script type="text/javascript">
tinymce.init({
	language : 'fr_FR',
	toolbar: "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    selector: "textarea",
 });
</script>

<div class="col-xs-9 col-md-8 col-lg-7  panel Article center">
        		<div class="panel"style="background:none">
                	<h5> Création d'articles </h5>
                </div>
                <div class="panel" style="background:none">
                	<p>
<?php
echo $this->Form->input('txt', array('type' => 'text','label' => 'Titre de l article:  '));
?>

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
<?php 
$listeRubriquesParents = array();
foreach($rubriques_parents as $rub){
	$listeRubriquesParents[] = $rub['rubrique']['NOM_RUBRIQUE'];
}
/*foreach($lastarticles as $articles){
	$listeRubriques[] = $articles['article']['TITRE_ARTICLE'];
}*/

echo $this->Form->input('rubrique', array('label' => 'Rubrique:  ','options' => $listeRubriquesParents)); ?>
 </p>
 
 <p>
 <?php $listeRubriquesFilles = array();
foreach($rubriques_filles as $rub){
	$listeRubriquesFilles[] = $rub['rubrique']['NOM_RUBRIQUE'];}
	?>
<?php echo $this->Form->input('sous_rubrique', array('label' => 'Sous-rubrique:  ','options' => $listeRubriquesFilles)); ?>
 </p>

 <p>
<form method="post" style="width:100%" action="#">
    <textarea name="content" id="contenuArticle"></textarea>
	<input type = "submit" class="btn btn-default">
</form>
</br>
 </p>
 
<p>
<?php if (isset($_POST['content'])) echo $_POST['content']?>
<?php
/*echo $this->Html->link(
    'Enter',
    '/pages/home',
    array('class' => 'button', 'target' => '_blank')
);*/
?>
</p>
</div>
</div>

<script>
$(document).ready(function()
{
  $('form').submit(function()
  {
		<?php echo  $_POST['content']?>
		
		
  });
});

</script>
			
