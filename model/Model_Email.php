<?php

class Model_Email extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertEmail($email)
    {
        $sql = 'insert into email(email) values(?)';
        $this->doquery($sql, [$email]);
    }

    public function getemail($email)
    {
        $sql='select * from email where email=?';
        $query=$this->doselect($sql,[$email],1);
        return $query;
    }
}