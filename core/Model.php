<?php

class Model
{
    public static $sql = '';

    public function __construct()
    {
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'shop1';
        self::$sql = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $username, $password);
        self::$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$sql->exec('set names utf8');
    }

    public function doquery($sql, $values = [])
    {
        $query = self::$sql->prepare($sql);
        foreach ($values as $key => $item) {
            $query->bindValue($key + 1, $item);
        }
        $query->execute();
    }

    public function doselect($sql, $values = [], $fetch = '')
    {
        $query = self::$sql->prepare($sql);
        foreach ($values as $x => $item) {
            $query->bindValue($x + 1, $item);
        }
        $query->execute();
        if ($fetch == '') {
            return $query->fetchAll();
        } else {
            return $query->fetch();
        }
    }

    public static function header($path)
    {
        header('location:' . URL . $path);
    }

    public static function UploadImage($image, $path)
    {
        $upload = 1;
        $image_new = $image['name'];
        $exist = $path . $image_new;
        if (file_exists($exist)) {
            $image_new = time() . $image_new;
        }
        $targetFile = $path . $image_new;
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        if ($fileType !== 'jpg' && $fileType !== 'png') {
            $upload = 0;
        }
        if ($image['size'] > 5000000) {
            $upload = 0;
        }
        if ($upload == 1) {
            move_uploaded_file($image['tmp_name'], $targetFile);
        }
        return $image_new;
    }

    public static function initSession()
    {
        session_start();
    }

    public static function setSession($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function getSession($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function unSetSession($name)
    {
        $_SESSION[$name] = null;
    }

    public function getCount($categoryID)
    {
        $sql = self::$sql->prepare('select * from product where categoryId=?');
        $sql->bindValue(1, $categoryID);
        $sql->execute();
        $count = $sql->rowCount();
        return $count;
    }

    public function getMenu($parentId = 0)
    {
        $sql = 'select * from menu where parentId=?';
        $query = $this->doselect($sql, [$parentId]);
        // print_r($query);
        foreach ($query as $item) {
            $children[] = $this->getMenu($item['id']);
            if (sizeof($children) > 0) {
                $item['children'] = $children;
            }
            @$data[] = $item;
        }
        return @$data;
    }
}