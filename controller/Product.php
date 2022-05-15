<?php

class Product extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $query = $this->modelDb->getCategory($id);
        $data = ['category' => $query];
        $this->View('admin/product/index', $data);
    }

    public function insertProduct()
    {
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $price = $_POST['price'];
        $content = $_POST['content'];
        $bigImage = $_FILES['imageBig'];
        $image1 = $_FILES['image1'];
        $image2 = $_FILES['image2'];
        $image3 = $_FILES['image3'];
        $image4 = $_FILES['image4'];
        $categoryId = $_POST['categoryId'];
        $bigImage_new = Model::UploadImage($bigImage, 'view/admin/product/big/');
        $image1_new = Model::UploadImage($image1, 'view/admin/product/fancy/');
        $image2_new = Model::UploadImage($image2, 'view/admin/product/fancy/');
        $image3_new = Model::UploadImage($image3, 'view/admin/product/fancy/');
        $image4_new = Model::UploadImage($image4, 'view/admin/product/fancy/');
        $this->modelDb->insertProduct($title, $summary, $content, $price, $bigImage_new, $image1_new, $image2_new, $image3_new, $image4_new, $categoryId);
        Model::header('Product/index/' . $categoryId);
    }

    public function showProduct($id)
    {
        $product = $this->modelDb->getProduct($id);
        $data = ['product' => $product];
        $this->View('admin/product/show', $data);
    }

    public function deleteProduct()
    {
        $id = $_POST['id'];
        $path1 = $_POST['path1'];
        $path2 = $_POST['path2'];
        $path3 = $_POST['path3'];
        $path4 = $_POST['path4'];
        $path5 = $_POST['path5'];
        $categoryId = $_POST['categoryId'];
        $this->modelDb->deleteProduct($id, $path1, $path2, $path3, $path4, $path5);
        Model::header('Product/showProduct/' . $categoryId);
    }
}