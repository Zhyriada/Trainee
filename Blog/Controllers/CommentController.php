<?php

namespace Blog\Controllers;

use Blog\Services\Db;

use Blog\View\View;

use Blog\Models\Articles\Blog;

class CommentController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function view (int $articleId): void
    {
        $article = Blog::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }

    public function edit(int $articleId): void
    {
        $article = Blog::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $article->setVisitore_name('Новое название статьи');
        $article->setComment('Новый текст статьи');

        $article->save();
    }

    public function insert()
    {
        var_dump("Спасибо! Комментарий записан");
        $name = $_POST['visitore_name'];
        $text = $_POST['comment'];
        $post_id = $_POST['post_id'];


        $articles = $this->db->query("INSERT INTO comment (visitore_name, comment, post_id) 
 VALUES ('$name', '$text', '$post_id')");

    }

}