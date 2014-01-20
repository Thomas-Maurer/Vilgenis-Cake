
<?php echo $this->Html->css('vilgenis','bootstrap.min.css');?>
<?php echo $this->element('Header', array("variable_name" => "current")); ?>
<?php echo $this->element('carousel', array("variable_name" => "current")); ?>
<h1>Les Articles du site</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher les informations des Articles -->

    <?php foreach ($articles as $article): ?>

    <tr>
        <td><?php echo $article['article']['ID_ARTICLE']; ?></td>
        <td>
            <?php echo $article['article']['TITRE_ARTICLE'] ?>
        </td>
		<td><?php echo $article['article']['CONTENU_ARTICLE'];?></td>
        <td><?php echo $article['article']['DATECREATION_ARTICLE']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php echo $this->element('footer', array("variable_name" => "current")); ?>