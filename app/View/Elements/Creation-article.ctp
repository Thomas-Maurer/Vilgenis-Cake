<?php echo $this->Html->script('../tinymce/tinymce.min.js');?>
<script type="text/javascript">
tinymce.init({
	language : 'fr_FR',
	plugins: ["advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen"],
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
<?php echo $this->Form->create('article',array('action' => 'add')); ?>
<?php
echo $this->Form->input('article.TITRE_ARTICLE', array('type' => 'txt','label' => 'Titre de l\'article:  '));
?>


<?php
echo "<b>Visible: </b>";
echo $this->Form->input('article.VISIBLE_ARTICLE', array(
     'div' => false,
     'label' => true,
     'type' => 'radio',
	  'legend' => false,
     'options' => array(1 => 'Oui    ', 2 => 'Non')
));
  ?>

<?php 
$listeRubriquesParents = array();
foreach($rubriques_parents as $rub){
	$listeRubriquesParents[] = $rub['rubrique']['NOM_RUBRIQUE'];
}


echo $this->Form->input('contient.ID_RUBRIQUE', array('label' => 'Rubrique:  ','options' => $listeRubriquesParents)); ?>

 <?php $listeRubriquesFilles = array();
foreach($rubriques_filles as $rub){
	$listeRubriquesFilles[] = $rub['rubrique']['NOM_RUBRIQUE'];}
	?>
<?php echo $this->Form->input('contient.Sousrubrique', array('label' => 'Sous-rubrique:  ','options' => $listeRubriquesFilles)); ?>

 <?php echo $this->Form->textarea('article.CONTENU_ARTICLE');?>

<?php echo $this->Form->end(array('class' => 'btn btn-default', 'label' => 'Envoyer')); ?>

</div>
</div>


			
