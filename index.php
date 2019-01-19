<?php
require('Controller/articleController.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listArticles') {
            listArticles();
        }
        elseif ($_GET['action'] == 'addArticle') {
            $title = $_POST['title'];
            $article_date = $_POST['article_date'];
            $content = $_POST['content'];
            $categorie = $_POST['categorie'];

            if(!empty($title) && !empty($article_date) && !empty($content) && !empty($categorie)){
                addArticle($title,$article_date,$content,$categorie);
            } else{
                throw new Exception('you must fill all fields !');
            }
        }
        elseif ($_GET['action'] == 'showEdit'){
            $id = $_GET['id'];
            if(isset($id) && $id > 0){
                showEdit($id);
            }
            else {
                throw new Exception('id is not set');
            }
        }
        elseif ($_GET['action'] == 'editArticle'){
                $id = $_GET['id'];
            if (isset($id) && $id > 0) {
                $title = $_POST['title'];
                $article_date = $_POST['article_date'];
                $content = $_POST['content'];
                $categorie = $_POST['categorie'];
                editArticle($id,$title,$article_date,$content,$categorie);
            }
            else {
                throw new Exception('id is not set');
            }
        }
        elseif ($_GET['action'] == 'deleteArticle'){
            $id = $_GET['id'];
            if (isset($id) && $id > 0) {
                deleteArticle($id);
            }
            else {
                throw new Exception('id is not set');
            }

        }
    }
    else {
        listArticles();
    }
}
catch(Exception $e) {
    echo 'Error : ' . $e->getMessage();
}
