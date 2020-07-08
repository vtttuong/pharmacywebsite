<?php
class UserController extends Controller
{

    public function index()
    { 
        $this->view('login');
    }

    public function signup()
    { 
        $this->view('signup');
    }

     public function logout()
    { 
        session_destroy();
        header("Location:http://localhost:8080/weblayout/index");
    }

    public function insertuser($data)
    {
    	
    	$user = $this->model('user');
    	if (!$user->checkUser($data['username'])) {
    		$alert = "<span class="."error"." style="."color:red"."> Tên đăng nhập đã tồn tại </span>";
    		return $alert;
    	}
    	else
    	{
	    	$flag = $user->register($data);
	        if(!$flag)
	        {
	            $alert = "<span class="."error"." style="."color:red"."> Đăng ký không thành công </span>";
    			return $alert;
	        }
	        else
	        {
	            $alert = "<span class="."error"." style="."color:red"."> Đăng ký thành công</span>";
    			return $alert;
    		}
	        unset($model);
    	}
    }

    public function loginuser($data)
    {   
    	
        $model = $this->model('user');
        $bool = $model->login($data);
        if (!$bool)
        {
            $alert = "<span class="."error"." style="."color:red"."> Đăng nhập không thành công</span>";
    		return $alert;
        }
        else
        {
        	header('Location: http://localhost:8080/weblayout/index');
            // $alert = "<span class="."error"." style="."color:red"."> Đăng nhập thành công</span>";
    		return $alert;
        }
        unset($model);	    
    }

}