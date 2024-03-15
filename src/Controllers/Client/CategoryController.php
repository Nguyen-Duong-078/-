<?php

namespace Power\Ethereal\Controllers\Client;

use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Category;
use Power\Ethereal\Models\Post;

class CategoryController extends Controller
{

          protected $post;
          private Category $category;

          public function __construct()
          {
                    $this->post = new Post;

          }
          public function show($category_id)
          {
                    // $categories = $this->category->getByID($category_id);    
                    $getPostsByCategory = $this->post->getPostsByCategory($category_id);

                    //debug($getPostsByCategory);
                    return $this->renderViewClient(
                              'category',
                              [
                                        'getPostsByCategory' => $getPostsByCategory
                              ]
                    );
          }

}
