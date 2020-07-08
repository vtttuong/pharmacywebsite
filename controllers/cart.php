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
        }
        else
            $cart=[];
        $this->view('cart',["data"=>$cart]);
    }

}