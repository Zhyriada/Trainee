<?php

namespace Blog\Controllers;

use Blog\Services\Db;

use Blog\View\View;

use Blog\Models\Articles\Blog;

class ArticlesController
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

        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');

        $article->save();
    }

    public function insert()
    {
        var_dump("Спасибо! Пост записан");
        $name = $_POST['name'];
        $text = $_POST['text'];

        $articles = $this->db->query("INSERT INTO post (name, text) 
 VALUES ('$name', '$text')");

    }
    
}