<?php

class Model_Admin extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertSettingAdmin($title, $author, $description, $keywords)
    {
        $sql = 'insert into meta(title,author,description,keywords) values(?,?,?,?)';
        $this->doquery($sql, [$title, $author, $description, $keywords]);
    }

    public function showSettingAdmin()
    {
        $sql = 'select * from meta';
        $query = $this->doselect($sql, []);
        return $query;
    }

    public function deleteSettingAdmin($id)
    {
        $sql = "delete from meta where id=?";
        $this->doquery($sql, [$id]);
    }
}