<?php
class CartController extends Controller
{

    public function index()
    {
        // Get obj in Cookie
        if(isset($_COOKIE['cart']))
        {
            $cart = $_COOKIE['cart'];
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
        if(!isset($_SESSION['id']))
            header("LOCATION: ".HOST."user");
        
        if(isset($_COOKIE['cart']))
        {
            $cart = $_COOKIE['cart'];
            $cart = json_decode($cart,true);

            $model = $this->model('cart');
            $flag = $model->checkout($cart);
            if($flag = true)
            echo "success";
        }
        else
        {
            echo "Cart don't have item";
            header("HTTP/1.1 400 Bad Request");
        }
    }
}