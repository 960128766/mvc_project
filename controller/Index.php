<?php

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $meta = $this->modelDb->getMeta();
        $slider = $this->modelDb->getSliderRevolution();
        $category = $this->modelDb->getCategory();
        $data = ['meta' => $meta, 'slider' => $slider, 'category' => $category];
        $this->Header('index/header', $data);
        $this->View('index/index', $data);
        $this->Footer('index/footer');
    }

    public function Products($id, $count = 1)
    {
        $pagination = $this->modelDb->getCountProducts($id, $count);
        $meta = $this->modelDb->getMeta();
        $slider = $this->modelDb->getSliderRevolution();
        $products = $this->modelDb->getProducts($id, $count)[0];
        $idCategory = $id;
        $countP = $count;
        $data = ['meta' => $meta, 'slider' => $slider, 'products' => $products, 'pagination' => $pagination,
            'categoryId' => $idCategory, 'count' => $countP];
        $this->Header('index/header', $data);
        $this->View('index/products', $data);
        $this->Footer('index/footer');
    }

    public function Product($id)
    {
        $meta = $this->modelDb->getMeta();
        $product = $this->modelDb->getProduct($id);
        $data = ['meta' => $meta, 'product' => $product];
        $this->Header('index/header', $data);
        $this->View('index/product', $data);
        $this->Footer('index/footer');
    }
}