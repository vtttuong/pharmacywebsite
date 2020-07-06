<?php
class HomeController extends Controller
{

    public function index()
    {
        $model = $this->model('home');
        $ctgr = $model->fetchCategory(0,2);
        for($i=0;$i<count($ctgr);$i++)
        {
            $ctgr[$i]['product'] = $model->fetchProduct($ctgr[$i]['id'],0,8);
        }
        $this->view('index',["data"=>$ctgr]);
    }

    public function error($type)
    {
        $this->viewError($type);
    }
}