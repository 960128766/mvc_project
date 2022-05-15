<?php

class Category extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View('admin/category/index');
    }

    public function showCategory()
    {
        $category = $this->modelDb->getcategory();
        $data = ['category' => $category];
        $this->View('admin/category/show', $data);
    }

    public function insertCategory()
    {
        $title = $_POST['title'];
        $image = $_FILES['image'];
        $image_new = Model::UploadImage($image, 'view/admin/category/images/');
        $this->modelDb->insertCategory($title, $image_new);
        Model::header('Category/index');
    }

    public function deleteCategory()
    {
        $id = $_POST['id'];
        $path = $_POST['path'];
        $this->modelDb->deleteCategory($id, $path);
        Model::header('Category/showCategory');
    }
}
