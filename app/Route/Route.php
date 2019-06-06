<?php
class Route
{
    private $arrURL = [];
    public function getURL()
    {
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
        return $url;
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
            // var_dump($this->arrURL[$url] = $action);die;
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
        // var_dump($parse);die;

        $class = "\\App\\Controller\\" . $controller;

        $object = new $class;
        // var_dump($class);die;

        return $object->$function();

    }

    public function run()
    {
        $url = $this->getURL();

        foreach ($this->arrURL as $key => $value) {
            if($url == $key ) {
                $this->parse($value);
                // var_dump($this->parse($value));die;
                break;
            }
        }
    }
}

