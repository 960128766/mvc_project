<?php

class Model_Index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMeta()
    {
        $sql = 'select * from meta ORDER by id DESC limit 1 offset 0';
        $query = $this->doselect($sql, [], 1);
        return $query;
    }

    public function getSliderRevolution()
    {
        $sql = 'select * from sliderrevolution';
        $query = $this->doselect($sql, []);
        return $query;
    }

    public function getCategory()
    {
        $sql = 'select * from category';
        $query = $this->doselect($sql, []);
        return $query;
    }

    public function getProducts($id, $count)
    {
        $page = $count;
        $per_page = 4;
        $start = $per_page * $page;
        $start = $start - $per_page;
        $sql = 'select * from category inner join product on category.id=product.categoryId where product.categoryId=? 
limit ' . $per_page . '  offset  ' . $start . '  ';
        $query = $this->doselect($sql, [$id]);
        return [$query, $per_page];
    }

    public function getProduct($id)
    {
        $sql = 'select * from product where id=?';
        $query = $this->doselect($sql, [$id], 1);
        return $query;
    }

    public function getCountProducts($id, $count)
    {
        $per_page = $this->getProducts($id, $count)[1];
        $count = $this->getCount($id);
        $total_page = ceil($count / $per_page);
        return $total_page;
    }
}