<?php

namespace app\controllers;

use app\models\Post;

class PostController extends Controller {
    protected $post;

    public function __construct()
    {
        $this->post = new Post;
    }

    public function index() {
        $posts = $this->post->all();

        return $this->view('posts', [
            'title' => 'lista de posts',
            'posts' => $posts
        ]);
    }
}