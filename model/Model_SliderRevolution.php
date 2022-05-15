<?php

class Model_SliderRevolution extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertSlider($caption, $link, $image_new)
    {
        $sql = 'insert into sliderrevolution(caption,link,image) values(?,?,?)';
        $this->doquery($sql, [$caption, $link, $image_new]);
    }

    public function showSlider()
    {
        $sql = 'select * from sliderrevolution ORDER by id DESC ';
        $query = $this->doselect($sql, []);
        return $query;
    }

    public function deleteSlider($id)
    {
        $sql = 'delete from sliderrevolution where id=?';
        $this->doquery($sql, [$id]);
    }

    public function getId($id)
    {
        $sql = 'select * from sliderrevolution where id=?';
        $query = $this->doselect($sql, [$id], 1);
        return $query;
    }

    public function updatetSlider($caption, $link, $image_new, $id)
    {
        if ($image_new == time()) {
            $slider = $this->getId($id);
           $image_new=$slider['image'];
        }
        $sql = 'update sliderrevolution set caption=?,link=?,image=? where id=?';
        $this->doquery($sql, [$caption, $link, $image_new, $id]);
    }
}