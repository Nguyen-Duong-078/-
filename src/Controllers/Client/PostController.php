<?php

namespace Power\Ethereal\Controllers\Client;

use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Post;

class PostController extends Controller
{
          private Post $post;

          public function __construct()
          {
                    $this->post = new Post;
          }

          public function show($id)
          {
                    $post = $this->post->getByID($id);

                    return $this->renderViewClient(
                              'post-show',
                              [
                                        'post' => $post,
                              ]
                    );
          }

          public function showByCategory($id)
          {
                    $postByCategory = $this->post->getByCategory($id);

                    return $this->renderViewClient(
                              'category-show',
                              [
                                        'category' => $postByCategory,
                              ]
                    );
          }


}