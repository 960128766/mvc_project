<?php

class json extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $query = $this->modelDb->decode();
        print_r($query);
    }

    public function meta()
    {
        $meta = $this->modelDb->meta();
        print_r($meta);
    }
}