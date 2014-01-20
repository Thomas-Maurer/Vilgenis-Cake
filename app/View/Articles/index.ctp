
<?php $titre = $articles['article']['TITRE_ARTICLE'] ?>
<?php $contenuArticle = $articles['article']['CONTENU_ARTICLE'];?>

	<?php echo $this->element('article-gauche',array(
    "titre" => $titre,
	"contenuArticle" => $contenuArticle
)); ?>
<?php echo $this->element('article-droite'); ?>