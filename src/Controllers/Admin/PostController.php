<?php
namespace Power\Ethereal\Controllers\Admin;

use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Post;
use Power\Ethereal\Models\Category;

class PostController extends Controller
{
          private Post $post;

          private string $folder = 'posts.';
          const PATH_UPLOAD = '/uploads/posts/';
          public function __construct()
          {
                    $this->post = new Post;
          }

          public function index()
          {
                    $data['posts'] = $this->post->getAll();

                    return $this->renderViewAdmin(
                              $this->folder . __FUNCTION__,
                              $data
                    );
          }

          public function create()
          {
                    if (!empty($_POST)) {
                              $categoryID = $_POST['category_id'];
                              $title = $_POST['title'];
                              $excerpt = $_POST['excerpt'];
                              $content = $_POST['content'];

                              $image = $_FILES['image'] ?? null;
                              $imagePath = null;
                              if ($image) {
                                        $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                                        if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                                                  $imagePath = null;
                                        }
                              }

                              $this->post->insert(
                                        $categoryID,
                                        $title,
                                        $content,
                                        $excerpt,
                                        $imagePath
                              );

                              header('Location: /admin/posts');
                              exit();
                    }

                    $data['categories'] = (new Category)->getAll();

                    return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
          }

          public function show($id)
          {
                    $data['post'] = $this->post->getByID($id);

                    // if (empty($data['post'])) {
                    //           die(404);
                    // }

                    return $this->renderViewAdmin(
                              $this->folder . __FUNCTION__,
                              $data
                    );
          }

          public function delete($id)
          {
                    $post = $this->post->getByID($id);

                    if (empty($post)) {
                              die(404);
                    }

                    $this->post->deleteByID($id);

                    if ($post['image'] && file_exists(PATH_ROOT . $post['image'])) {
                              unlink(PATH_ROOT . $post['image']);
                    }

                    header('Location: /admin/posts');
                    exit();
          }

          public function update($id)
          {
                    $data['post'] = $this->post->getByID($id);

                    if (empty($data['post'])) {
                              die(404);
                    }

                    if (!empty($_POST)) {
                              $categoryID = $_POST['category_id'];
                              $title = $_POST['title'];
                              $excerpt = $_POST['excerpt'];
                              $content = $_POST['content'];

                              $image = $_FILES['image'] ?? null;
                              $imagePath = $data['post']['p_image'];
                              $move = false;
                              if ($image) {
                                        $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                                        if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                                                  $imagePath = $data['post']['p_image'];
                                        } else {
                                                  $move = true;
                                        }
                              }

                              $this->post->update(
                                        $id,
                                        $categoryID,
                                        $title,
                                        $content,
                                        $excerpt,
                                        $imagePath
                              );

                              if (
                                        $move
                                        && $data['post']['p_image']
                                        && file_exists(PATH_ROOT . $data['post']['p_image'])
                              ) {
                                        unlink(PATH_ROOT . $data['post']['p_image']);
                              }

                              $_SESSION['success'] = 'Thao tác thành công!';

                              header("Location: /admin/posts/$id/update");
                              exit();
                    }

                    $data['categories'] = (new Category)->getAll();

                    return $this->renderViewAdmin(
                              $this->folder . __FUNCTION__,
                              $data
                    );
          }
}