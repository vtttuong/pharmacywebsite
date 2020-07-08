<?php
class BuyController extends Controller
{

    function __construct(){
        if(!isset($_SESSION['id']))
            header('Location: '.HOST.'user');
    }
    public function index()
    {
        $model = $this->model('buy');
        $ctgr = $model->fetchCategory();
        for($i=0;$i<count($ctgr);$i++)
        {
            $ctgr[$i]['product'] = $model->fetchProduct($ctgr[$i]['id']);
        }
        $this->view('buy',["data"=>$ctgr]);
        unset($model);
    }

}