<?php

/*-------------Import library phpmailer----------------*/
include "./library/PHPMailer-master/src/PHPMailer.php";
include "./library/PHPMailer-master/src/Exception.php";
include "./library/PHPMailer-master/src/OAuth.php";
include "./library/PHPMailer-master/src/POP3.php";
include "./library/PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*-----------------------------------------------------*/

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

    public function sendFeedback($title, $content,$nFrom,$mFrom, $nTo, $mTo,$diachicc='')
    {
        try{
            $mFrom1 = 'hoanglong.webapp@gmail.com';  //dia chi email cua ban 
            $mPass1 = 'hoanglongle';       //mat khau email cua ban
            $mail             = new PHPMailer();
            $body             = $content;
            $mail->IsSMTP(); 
            $mail->CharSet   = "utf-8";
            $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;                    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";        
            $mail->Port       = 465;
            $mail->Username   = $mFrom1;  // GMAIL username
            $mail->Password   = $mPass1;               // GMAIL password
            $mail->SetFrom($mFrom, $nFrom);
            //chuyen chuoi thanh mang
            $ccmail = explode(',', $diachicc);
            $ccmail = array_filter($ccmail);
            if(!empty($ccmail)){
                foreach ($ccmail as $k => $v) {
                    $mail->AddCC($v);
                }
            }
            $mail->Subject    = $title;
            $mail->MsgHTML($body);
            $address = $mTo;
            $mail->AddAddress($address, $nTo);
            $mail->AddReplyTo($mFrom, $nFrom);
            if(!$mail->Send()) {
                return 0;
            } else {
                return 1;
            }
        }catch(Exception $e)
        {
            return 0;
        }
    }
}
?>