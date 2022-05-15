<?php

class Model_Product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategory($id)
    {
        $sql = 'select * from category where id=?';
        $query = $this->doselect($sql, [$id], 1);
        return $query;
    }

    public function insertProduct($title, $summary, $content, $price, $bigImage_new, $image1_new, $image2_new, $image3_new, $image4_new, $categoryId)
    {
        $sql = 'insert into product(title,summary,content,price,imageBig,image1,image2,image3,image4,categoryId) values(?,?,?,?,?,?,?,?,?,?)';
        $this->doquery($sql, [$title, $summary, $content, $price, $bigImage_new, $image1_new, $image2_new, $image3_new, $image4_new, $categoryId]);
    }

    public function getProduct($id)
    {
        $sql = 'select * from category INNER JOIN product on category.id=product.categoryId where product.categoryId=?';
        $query = $this->doselect($sql, [$id]);
        return $query;
    }

    public function deleteProduct($id, $path1, $path2, $path3, $path4, $path5)
    {
        unlink($path1);
        unlink($path2);
        unlink($path3);
        unlink($path4);
        unlink($path5);
        $sql = 'delete from product where id=?';
        $this->doquery($sql, [$id]);
    }
}