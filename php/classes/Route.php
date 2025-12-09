<?php
class Route{
    public static function get($uri, $callback){
        if($_SERVER['REQUEST_METHOD'] !="GET")return;
        $requestURI=$_SERVER['REQUEST_URI'];
        if($requestURI==$uri){
            exit($callback());
        }

    }

    public static function post($uri, $callback){
        if($_SERVER['REQUEST_METHOD'] !="POST")return;
         $requestURI=$_SERVER['REQUEST_URI'];
        if($requestURI==$uri){
            exit($callback());
        }
    }

    public static function view($uri, $viewPath){
        if($_SERVER['REQUEST_METHOD'] != "GET") return;
        $requestURI = $_SERVER['REQUEST_URI'];
        if(strripos($uri, "{")){
            $path = explode("/", $requestURI);
            if(count($path)<3) return;
            $uri = str_replace("{id}", $path[2], $uri);
        }
        if($requestURI == $uri){
            $content =  file_get_contents($viewPath);
            require_once('template.php');
            exit();
        }
    }
}