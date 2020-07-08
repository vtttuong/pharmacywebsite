<?php
class CartController extends Controller
{
    function __construct(){
        if(!isset($_SESSION['id']))
            header('Location: '.HOST.'user');
    }
    public function index()
    {
        // Get obj in Cookie
        if(isset($_COOKIE['cart'.'_'.$_SESSION['id']]))
        {
            $cart = $_COOKIE['cart'.'_'.$_SESSION['id']];
            $cart = json_decode($cart,true);
            
            $model = $this->model('cart');
            for($i=0;$i<count($cart);$i++)
            {
                $cart[$i][0] = $model->fetchProduct($cart[$i][0]);
            }
            unset($model);
        }
        else
            $cart=[];
        $this->view('cart',["data"=>$cart]);
    }


    public function checkout(){

        if(isset($_COOKIE['cart'.'_'.$_SESSION['id']]))
        {
            
            $cart = $_COOKIE['cart'.'_'.$_SESSION['id']];
            $cart = json_decode($cart,true);

            $model = $this->model('cart');
            $flag = $model->checkout($cart,$_SESSION['id']);
            if($flag = true)
            {
                echo "success";
            }
            unset($model);
        }
        else
        {
            echo "Cart don't have item";
            header("HTTP/1.1 400 Bad Request");
        }
    }
}