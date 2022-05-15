<?php

class Menu extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View('admin/menu/index');
    }

    public function InsertMenu()
    {
        $title = $_POST['title'];
        $link = $_POST['link'];
        $parentId = $_POST['parentId'];
        $type = $_POST['type'];
        if ($type == 'add') {
            $this->modelDb->InsertMenu($title, $link, $parentId);
            echo 1;
        } elseif ($type == 'delete') {
            $this->modelDb->DeleteMenu($parentId);
        }
    }

    public function load()
    {
        $this->View('admin/menu/ajax/showMenu');
    }

}