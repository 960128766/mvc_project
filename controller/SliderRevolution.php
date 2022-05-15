<?php

class SliderRevolution extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = 0, $edit = '')
    {
        $query = $this->modelDb->getId($id);
        $data = ['id' => $id, 'edit' => $edit, 'slider' => $query];
        $this->View('admin/sliderRevolution/index', $data);
    }

    public function insertSlider()
    {
        $caption = $_POST['caption'];
        $link = $_POST['link'];
        $image = $_FILES['image'];
        $image_new = Model::UploadImage($image, 'view/admin/sliderRevolution/images/');
        $this->modelDb->insertSlider($caption, $link, $image_new);
        Model::header('SliderRevolution/index');
    }

    public function showSlider()
    {
        $slider = $this->modelDb->showSlider();
        $data = ['slider' => $slider];
        $this->View('admin/sliderRevolution/show', $data);
    }

    public function deleteSlider()
    {
        $id = $_POST['id'];
        $path = $_POST['path'];
        unlink($path);
        $this->modelDb->deleteSlider($id);
        Model::header('SliderRevolution/showSlider');
    }

    public function updatetSlider()
    {
        $caption = $_POST['caption'];
        $link = $_POST['link'];
        $id = $_POST['id'];
        $image = $_FILES['image'];
        $image_new = Model::UploadImage($image, 'view/admin/sliderRevolution/images/');
        $this->modelDb->updatetSlider($caption, $link, $image_new, $id);
        Model::header('SliderRevolution/showSlider');
    }
}