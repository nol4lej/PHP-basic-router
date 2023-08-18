<?php

class Router{

    private $routes = [
        "error" => ["Home", "/views/error404.php"],
        "" => ["Home", "/views/home.php"], // Ruta base
        "about" => ["About", "/views/about.php"],
        "register" => ["Register", "/views/register.php"]
    ];

    public function __construct(){
        $this->prepareRoute();
    }
    public function run(){}

    public function prepareRoute(){
        $parsed_url = parse_url(FULLURL);
        $parsed_url_path = explode("/", $parsed_url["path"]); // divido mi URL en sus slash
        $viewPath = array_slice($parsed_url_path, 4); // capturo los elementos a partir del 4 elemento

        if(isset($parsed_url['query'])){
            parse_str($parsed_url['query'], $query_params);
            $this->paramPath($viewPath, $query_params);
        } else {
            $this->normalPath($viewPath);
        }
    }

    private function normalPath($viewPath){
        foreach($this->routes as $route => $routeData){
            if($viewPath[0] === $route){ // viewPath[0] almacena el nombre de la vista
                require_once getcwd() . $routeData[1]; // ruta raiz del proyecto + ruta de la vista.
                define("PAGE_TITLE", $routeData[0]);
                return;
            }
        }

        // Si no encuentra la ruta, error404:
        require_once getcwd() . $this->routes["error"][1];
        return define("PAGE_TITLE", $this->routes["error"][0]);
    }

    private function paramPath($viewPath, $params){
        var_dump($viewPath);
        var_dump($params);
    }


}