<?php
class Controller{

    public function model($model){
        require_once "./models/".$model.".php";
        $model = ucfirst($model)."Model";
        return new $model;
    }

    public function view($view, $data=[]){
        extract($data);
        require_once "./views/pages/".$view.".php";
    }

    public function viewError($type){
        require_once "./views/error/".$type.".php";
    }
}
?>