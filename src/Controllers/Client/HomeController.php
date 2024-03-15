<?php

namespace Power\Ethereal\Controllers\Client;

use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Post;

class HomeController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post;
    }

    public function index()
    {
        return $this->renderViewClient('home');
    }
}
