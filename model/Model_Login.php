<?php

class Model_Login extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAdmin()
    {
        $sql = 'select * from login';
        $query = $this->doselect($sql,[],1);
        return $query;
    }

    public function insertAdmin($username, $finalPass)
    {
        $sql = 'insert into login(username,password) values(?,?)';
        $this->doquery($sql, [$username, $finalPass]);
    }
}