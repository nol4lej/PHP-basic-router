<?php

class Router{

    private $routes = [
        "" => ["Home", "/views/home.php"], // Ruta base
        "about" => ["About", "/views/about.php"]
    ];

    public function __construct(){
        $this->matchRoute();
    }

    public function matchRoute(){
        $url = explode("/", URL); // separa el string de URL por cada "/".

        foreach($this->routes as $route => $routeData){
            if($url[1] === $route){ // url[1] almacena el nombre de la ruta
                require_once getcwd() . $routeData[1]; // ruta raiz del proyecto + ruta de la vista.
                define("PAGE_TITLE", $routeData[0]);
                return;
            }
        }

    }

    public function run(){

    }


}