<?php
require_once("Model/Manager.php");

class ArticleManager extends Manager
{
    public function getArticles()
    {
        $db = parent::dbConnect();
        $req = $db->query('SELECT id, title, content, article_date,categorie FROM article ORDER BY article_date ASC');

        return $req;
    }

    public function addArticle($title,$article_date,$content,$categorie)
    {
        $db = parent::dbConnect();
        $req = $db->prepare('INSERT INTO article (title,article_date,content,categorie) VALUES (?,?,?,?)');
        $affectedLines = $req->execute(array($title,$article_date,$content,$categorie));

        return $affectedLines;
    }

    public function editArticle($id,$title,$article_date,$content,$categorie)
    {
        $db = parent::dbConnect();
        $req= $db->prepare('UPDATE article SET title = ?, article_date=?,content=?,categorie=? WHERE id=?');
        $affectedLines = $req->execute(array($title,$article_date,$content,$categorie,$id));
        return $affectedLines;

    }

    public function deleteArticle($id)
    {
        $db = parent::dbConnect();
        $req = $db->prepare('DELETE FROM article WHERE id=?');
        $affectedLines = $req->execute(array($id));
        return $affectedLines;

    }

}