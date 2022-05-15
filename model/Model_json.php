<?php

class Model_json extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function decode()
    {
        $sql = 'select * from sliderrevolution';
        $query = $this->doselect($sql, []);
        return json_encode($query);
    }

    public function meta()
    {
        $sql = 'select * from meta';
        $query = $this->doselect($sql, []);
        return json_encode($query);
    }
}