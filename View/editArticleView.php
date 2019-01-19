<?php $titlePage = 'Edit Article'; ?>


<?php ob_start(); ?>



<table class="table table-hover ">
    <tr>
        <thead class="thead-dark">
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">date</th>
        <th scope="col">content</th>
        <th scope="col">categorie</th>
        <th scope="col">Handle</th>
        </thead>
    </tr>
    <?php while ($data = $articles->fetch()):
        $id=$data['id']; ?>
        <?php if($id==$idToEdit):?>
        <tr>
            <form method="post" action="index.php?action=editArticle&amp;id=<?=$id?>">
                <div class="form-row">
                <th scope="row"><?=$id?></th>
                <td>
                    <div class="form-group" >
                        <input type="text"  class="form-control" value="<?=$data['title']; ?>"   placeholder="Title" name="title">
                    </div>
                </td>
                <td>
                    <div class="form-group" >
                    <input type="date"  class="form-control" value="<?=$data['article_date']; ?>"   placeholder="Date" name="article_date" >
                    </div>
                </td>
                <td>
                    <div class="form-group" >
                    <input type="text"  class="form-control" value="<?=$data['content']; ?>" name="content" placeholder="Content" size="100">
                    </div>
                </td>
                <td>
                    <div class="form-group" >
                    <input type="text"  placeholder="Categorie" class="form-control" value="<?=$data['categorie']?>" name="categorie">
                    </div>
                </td>
                <td>
                    <div class="form-group" >
                    <input type="submit" class="btn btn-primary"/>
                    </div>
                </td>
                </div>
            </form>
        </tr>
    <?php else: ?>
        <tr>
            <th scope="row"><?= $id?></th>
            <td><?=$data['title']; ?></td>
            <td><?=$data['article_date']; ?></td>
            <td ><?=$data['content']; ?></td>
            <td><?=$data['categorie']; ?></td>
        </tr>
    <?php endif; ?>

    <?php endwhile;?>
</table>



<?php $articles->closeCursor(); ?>


<?php $body = ob_get_clean(); ?>


<?php require('template.php'); ?>



