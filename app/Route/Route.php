<?php
class Route
{
    private $arrURL = [];
    public function getURL()
    {
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
        $url = explode('?', $url);
        // var_dump($url[0]);die;
        return $url[0];
    }

    public function getMethod()
    {
        $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : "GET";
        // var_dump($method);die;
        return $method;
    }

    public function get($url, $action)
    {
        if($this->getMethod() == "GET"){
            $this->arrURL[$url] = $action;
        }
    }

    public function post($url, $action)
    {
        if ($this->getMethod() == "POST") {
            $this->arrURL[$url] = $action;
        }
    }

    public function parse($action)
    {
        if(count(explode('@', $action)) != 2) {
            die('Route Error');
        }
        $explain = explode('@', $action);
        $controller = $explain[0];
        $function = $explain[1];
        $class = "\\App\\Controller\\" . $controller;
        // var_dump($class);die;
        $object = new $class;
        // var_dump($object);die;
        // var_dump($object);die;
        return $object->$function();
    }

    public function run()
    {
        $url = $this->getURL();
        foreach ($this->arrURL as $key => $value) {
            if($url == $key ) {
                $this->parse($value);
                break;
            }
        }
    }
}

