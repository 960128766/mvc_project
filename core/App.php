<?php

class App
{
    public $controller = "Index";
    public $method = "index";
    public $params = [];

    public function __construct()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = $this->Explode($url);
            $this->controller = $url[0];
            unset($url[0]);
            if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            $this->params = array_values($url);
        }
        $path = "controller/" . $this->controller . ".php";
        if (file_exists($path)) {
            require $path;
            $object = new $this->controller();
            $object->Model($this->controller);
            if (method_exists($object, $this->method)) {
                call_user_func_array([$object, $this->method], $this->params);
            } else {
                echo "<h2 style='background: red'>ERROR 404</h2>";
            }
        } else {
            echo "<h1>this page not found - error404</h1>";
        }
    }

    public function Explode($url)
    {
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }
}
