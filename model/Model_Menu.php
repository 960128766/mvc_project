<?php

class Model_Menu extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function InsertMenu($title, $link, $parentId)
    {
        $sql = 'insert into menu(title,link,parentId) values(?,?,?)';
        $this->doquery($sql, [$title, $link, $parentId]);
    }

    public function DeleteMenu($id)
    {
        $sql = 'delete from menu where id=?';
        $this->doquery($sql, [$id]);
        $sql='delete from menu where parentId=?';
        $this->doquery($sql,[$id]);

    }
}