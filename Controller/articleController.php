<?php

// Chargement des classes
require_once('Model/ArticleManager.php');


function listArticles()
{
    $articleManager = new ArticleManager(); // Création d'un objet
    $articles = $articleManager->getArticles(); // Appel d'une fonction de cet objet

    require('View/listArticlesView.php');
}



function addArticle($title,$article_date,$content,$categorie)
{
    $articleManager = new ArticleManager();

    $affectedLines = $articleManager->addArticle($title,$article_date,$content,$categorie);

    if ($affectedLines === false) {
        throw new Exception('Impossible to add an article !');
    }
    else {
        header('Location: index.php?action=listArticles');
    }
}

function showEdit($id)
{
    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticles();
    $idToEdit = $id;

    require('View/editArticleView.php');

}

function editArticle($id,$title,$article_date,$content,$categorie)
{
    $articleManager = new ArticleManager();

    $affectedLines = $articleManager->editArticle($id,$title,$article_date,$content,$categorie);

    if ($affectedLines === false) {
        throw new Exception('Impossible to edit the article !');
    }
    else {
        header('Location: index.php?action=listArticles');
    }
}

function deleteArticle($id)
{
    $articleManager = new ArticleManager();

    $affectedLines = $articleManager->deleteArticle($id);

    if ($affectedLines === false) {
        throw new Exception('Impossible to delete the article !');
    }
    else {
        header('Location: index.php?action=listArticles');
    }


}