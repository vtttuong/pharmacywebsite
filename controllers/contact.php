<?php
class ContactController extends Controller
{

    public function index()
    {
        $this->view('contact');
    }

    public function sendmail(){
        $nFrom = $_POST['name'];
        $mFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mTo = 'long.bk.khmt@gmail.com';
        $nTo = 'Le Hoang Long';
        $bool = $this->sendFeedback('Feedback',$message.'\n Phone:'.$phone,$nFrom,$mFrom,$nTo,$mTo);
        if($bool)
            echo 'Success';
        else
        {
            header("HTTP/1.1 500 SERVER ERROR");
            echo 'Failed';
        }
    }
}