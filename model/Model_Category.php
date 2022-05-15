<?php

class Model_Category extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCategory($title, $image_new)
    {
        $sql = 'insert into category(title,image) values(?,?)';
        $this->doquery($sql, [$title, $image_new]);
    }

    public function getcategory()
    {
        $sql = 'select * from category';
        $query = $this->doselect($sql, []);
        return $query;
    }

    public function deleteCategory($id, $path)
    {
        unlink($path);
        $sql = 'delete from category where id=?';
        $this->doquery($sql, [$id]);
    }
}