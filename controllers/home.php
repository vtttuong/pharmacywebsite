<?php
class HomeController extends Controller
{

    public function index()
    { 
        parent::view('index');
    }

    public function error($type)
    {
        parent::viewError($type);
    }
}