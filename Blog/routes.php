<?php
return [
    '/^blog$/' => [\Blog\Controllers\MainController::class, 'main'],
    '/^blog\/add-post$/' => [\Blog\Controllers\ArticlesController::class, 'insert'],
    '/^blog\/add-comment$/' => [\Blog\Controllers\CommentController::class, 'insert'],
    '/^blog\/post$/' => [\Blog\Controllers\MainController::class, 'post'],
    ];