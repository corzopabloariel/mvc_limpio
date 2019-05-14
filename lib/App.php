<?php
require_once "default.php";
class App {
    protected $controller   = "";
    protected $method       = "";
    protected $params       = [];

    public function __construct() {
        DB::init();
        Session::createSession();

        $url = $this->parseUrl();
        $clase = ucfirst(strtolower($url[0]));
        if(class_exists($clase)) {
            $controllerName = $clase."Controller";
            if(file_exists(APP_PATH."controllers/".$controllerName.".php")) {
                $this->controller = $controllerName;
                unset($url[0]);
                require_once APP_PATH."controllers/".$this->controller.".php";
            }
        } else {
            //throw new Exception("Error. No existe {$url}");
            $controllerName = $clase."Controller";
            $this->controller = $controllerName;
            //$this->method = METHOD_NOT_FOUND;
            //$this->controller = DEFAULT_CONTROLLER;
        }
        
        if(isset($url[1])) {
            $methodName = strtolower($url[1])."Action";
            if(method_exists($this->controller,$methodName)){
                $this->method = $methodName;
                unset($url[1]);
            } else {
                $this->method = METHOD_NOT_FOUND;
                $this->controller = DEFAULT_CONTROLLER;
            }
        } else {
            $this->method = METHOD_DEFAULT;
            $this->controller = DEFAULT_CONTROLLER;
        }
        $this->params = $url ? array_values($url) : $this->params;
        //print_r($this->method);die();
        call_user_func_array([$this->controller,$this->method],[$this->params]);
    }

    public function parseUrl() {
        if(isset($_GET["url"]))
            return explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));
    }
}
