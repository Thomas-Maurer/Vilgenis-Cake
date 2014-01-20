



    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher les informations des Articles -->

    <?php foreach ($articles as $article): ?>

            <?php echo $article['article']['TITRE_ARTICLE'] ?>
		<?php echo $article['article']['CONTENU_ARTICLE'];?>

    <?php endforeach; ?>