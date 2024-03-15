<?php

namespace Power\Ethereal\Controllers\Admin;

use Power\Ethereal\Commons\Controller;
use Power\Ethereal\Models\Category;

class CategoryController extends Controller
{
    private Category $category;

    private string $folder = 'categorys.';

    function __construct()
    {
        $this->category = new Category;
    }

    // Danh sách
    public function index()
    {
        $data['categorys'] = $this->category->getAll();
        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Create 

    public function create()
    {
        if (!empty($_POST)) {
            $this->category->insert($_POST['name']);
            header('Location: /admin/categorys');
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // cập nhật theo ID

    public function update($id)
    {
        $category = $this->category->getByID($id);
        if (!empty($category)) {
            // die(404);
        }
        if (!empty($_POST)) {
            $name = $_POST['name'];

            $_SESSION['success'] = 'Thao tác thành công!';
            $this->category->update($id, $name);
            header("Location: /admin/categorys/$id/update");
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['category' => $category]);
    }

    public function delete($id)
    {
        $this->category->deleteByID($id);
        header('Location: /admin/categorys');
        exit();
    }

    public function show($id)
    {
        $data['category'] = $this->category->getByID($id);

        if (empty($data['category'])) {
            die(404);
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }


}
