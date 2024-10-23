<?php

class Router
{
    private $pages = array();

    function addRoute($url, $path){
        $this -> pages[$url] = $path;
    }

    function route($url){

        if ($url == "/") {
            $path = $this -> pages[$url];
            $file_dir = "pages/".$path;

            if (file_exists($file_dir)){
                require $file_dir;
                die();
            }
        }

        $file = "pages".$url.".php";

        if (file_exists($file)){
            require $file;
        }else{
            header('Location: https://'.$_SERVER['HTTP_HOST']);
        }
    }
}
