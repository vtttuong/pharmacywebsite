<?php
class App{

    protected $controller="home";
    protected $action="index";
    protected $params=[];

    function __construct(){
        
        $arr = $this->UrlProcess();
        // Controller
        if( file_exists("./controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./controllers/". $this->controller .".php";

        // New Class Controller
        $Cclass = $this->format($this->controller,"Controller");
        $this->controller = new $Cclass;

        // Action

        if(isset($arr[1])){
            if( method_exists( $Cclass , $arr[1]) ){
                $this->action = $arr[1];
            }
            else{
                header('Location: http://localhost:8080/weblayout/home/error/404');
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        // Call function
        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    private function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    private function format($text,$option){
        return ucfirst($text).ucfirst($option);
    }
}
?>