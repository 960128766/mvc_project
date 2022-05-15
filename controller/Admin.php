<?php

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Model::initSession();
        if (Model::getSession('admin') == false) {
            Model::header('Login/index');
        }
    }

    public function index()
    {
        $this->View('admin/admin/index');
    }

    public function insertSettingAdmin()
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];
        $this->modelDb->insertSettingAdmin($title, $author, $description, $keywords);
        Model::header('Admin/index');
    }

    public function showSettingAdmin()
    {
        $query = $this->modelDb->showSettingAdmin();
        $data = ['meta' => $query];
        $this->View('admin/admin/show', $data);
    }

    public function deleteSettingAdmin($id)
    {
        $this->modelDb->deleteSettingAdmin($id);
        Model::header('Admin/showSettingAdmin');
    }
}