<h1>Les posts du Blog</h1>
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
            <?php echo $html->link($article['article']['TITRE_ARTICLE'],
"/posts/view/".$article['article']['ID_ARTICLE']); ?>
        </td>
        <td><?php echo $article['article']['DATECREATION_ARTICLE']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>