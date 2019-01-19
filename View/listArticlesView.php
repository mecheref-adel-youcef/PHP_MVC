<?php $titlePage = 'My blog'; ?>

<?php ob_start(); ?>
<h1 class="mt-3 text-center">My super blog with PHP & MVC !</h1>


<Button id="addBtn" class=" my-3 mx-3 btn btn-large btn-primary">Add Article +</Button>

<table class="table table-hover" id="addTable">
    <tr>
        <thead class="thead-dark">
        <th scope="col">title</th>
        <th scope="col">date</th>
        <th scope="col">content</th>
        <th scope="col">categorie</th>
        <th scope="col">Handle</th>
        </thead>
    </tr>
    <tbody>
    <tr>
        <form action="index.php?action=addArticle" method="post">
            <div class="form-row">
            <td>
                <div class="form-group" >
                    <input type="text" id="title" class="form-control" name="title" placeholder="Title" />
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="date" id="date"  class="form-control" name="article_date" placeholder="Date" >
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input  type="text" id="content"  class="form-control" name="content" placeholder="Content"  size="100"/>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <input type="text" id="categorie"  class="form-control" placeholder="Categorie"  name="categorie" />
                </div>
            </td>
            <td>
                <div>
                    <input type="submit" class="btn btn-primary"  />
                </div>
            </td>
            </div>
        </form>
    </tr>
    </tbody>
</table>



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

        <tbody>
    <?php while ($data = $articles->fetch()):
            $id=$data['id']; ?>
    <tr>
        <th scope="row"><?= $id?></th>
        <td><?=$data['title']; ?></td>
        <td><?=$data['article_date']; ?></td>
        <td><?=$data['content']; ?></td>
        <td><?=$data['categorie']; ?></td>
        <td><a  class="btn my-btn btn-warning " href="index.php?action=showEdit&amp;id=<?=$id?>">Edit</a> <a  class="btn my-btn  btn-danger" href="index.php?action=deleteArticle&amp;id=<?=$id?>">Delete</a></td>
    </tr>
    <?php endwhile;?>
        </tbody>
</table>



<?php $articles->closeCursor(); ?>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>