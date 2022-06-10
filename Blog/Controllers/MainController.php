<?php

namespace Blog\Controllers;

use Blog\Services\Db;

use Blog\View\View;

use Blog\Models\Articles\Blog;

class MainController
{
      private $view;

      private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = new Db();
    }


    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `post`;');

        $arr = [];
        foreach ($articles as $onePost){
            $arr[] = new Blog
            (
                $onePost['id'],
                $onePost['name'],
                $onePost['text']
            );
        }

        echo $this->view->renderHtml('/main/main.php',
            ['articles' => $arr]);
    }


public function post()
{
    $articles = $this->db->query('SELECT * FROM `post`;');

    $arr = [];
    foreach ($articles as $onePost){
        $arr[] = new Blog
        (
            $onePost['id'],
            $onePost['name'],
            $onePost['text']
        );

    }


    echo $this->view->renderHtml('/main/post.php',
        ['articles' => $arr]);
}
}

