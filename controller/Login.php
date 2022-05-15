<?php

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Model::initSession();
    }

    public function index()
    {
        $admin = $this->modelDb->getAdmin();
        if (empty($admin)) {
            $username = "hoseinbayati";
            $password = "hoseinbayati";
            $hash = sha1($password);
            $finalPass = sha1($hash);
            $this->modelDb->insertAdmin($username, $finalPass);
        }
        $this->View('admin/login/index');
    }

    public function checkAdmin()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hash = sha1($password);
            $finalPass = sha1($hash);
            $admin = $this->modelDb->getAdmin();
            if ($admin['username'] == $username && $admin['password'] == $finalPass) {
                Model::setSession('admin', $username);
                Model::header('Admin/index');
            } else {
                Model::setSession('wrong', 'نام کاربری یا کلمه عبور شما اشتباه می باشد');
                Model::header('Login/index');
            }
        }
    }

    public function logOut()
    {
        Model::unSetSession('admin');
        Model::unSetSession('wrong');
        Model::header('Login/index');
    }
}