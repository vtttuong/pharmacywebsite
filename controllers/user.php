<?php 
           
    class UserController extends Controller
    {

        private function checkForm(){
            if ($_POST['username']==null||$_POST['password']==null)
                die('Vui lòng nhập đầy đủ thông tin');
            return true;
        }

        /* VIEW ACTION */
        //login view
        public function index(){
            if(isset($_SESSION['id']))
            {
                header("LOCATION: ".HOST."");
            }
               else
            $this->view('login');
        }

        public function register(){
            $this->view('register');
        }

        public function change_pass(){
            if(!isset($_SESSION['id']))
                return false;
            $this->view('change_pass');
        }
        
        /* HANDLE ACTION*/
        public function change(){
            if(!isset($_SESSION['id']))
                return false;
            if($_POST['password']==$_POST['new_password'])
            {
                header("HTTP/1.1 500 Server Error");
                return false;

            }
            $password = md5($_POST['new_password']);
            $data = ["password"=>$password,"id"=>$_SESSION['id']];

            $model = $this->model('user');
            $flag = $model->changePass($data);
            if($flag)
            {
                echo 'Success';
            }
            else{
                header("HTTP/1.1 500 Server Error");
                echo 'Failed';
            }
            unset($model);

        }
        public function checkuser($username=''){
            $model = $this->model('user');
            $bool =  $model->checkUser($username);
            if ($bool)
                echo 'OK';
            else
                echo 'Username has existed';

            unset($model);

        }

        public function checkemail($email=''){
            $model = $this->model('user');
            $bool = $model->checkEmail($email);
            if ($bool)
                echo 'OK';
            else
                echo 'Email has existed';
            unset($model);

        }

        public function login(){
            $this->checkForm();
            $model = $this->model('user');

            $password = md5($_POST['password']);
            $data = ["username"=>$_POST['username'],"password"=>$password];

            $bool = $model->login($data);
            if (!$bool)
            {
                header('HTTP/1.1 500 Internal Server Booboo');
                echo "Login Failed";
            }
            else
                echo "Login Success";
            unset($model);

        }

        public function logout(){
            unset($_SESSION['id']);
            unset($_SESSION['name']);
            header("LOCATION:".HOST);
        }

        public function add(){

            $this->checkForm();
            $password = md5($_POST['password']);
            $data = [
                "username"=>$_POST['username'],
                "password"=>$password,
                "email"=>$_POST['email'],
                "phone"=>$_POST['phone'],
                "name"=>$_POST['name'],
                "address"=>$_POST['address'],
                "birthday"=>$_POST['birthday'],
                "sex"=>$_POST['sex']
            ];
            $model = $this->model('user');

            $flag = $model->register($data);
            if(!$flag)
            {
                header('HTTP/1.1 500 Internal Server Booboo');
                echo('Failed');
            }
            else
                echo 'Success';
            unset($model);

        }
        public function userprofile()
        { 
            $this->view('userprofile');
        }
    
        
    
        public function getUserProfile($id)
        {
            $model = $this->model('user');
            return $model->getUserProfile($id);
        }
    
        public function updateUserProfile($data, $olddata)
        {
           $model = $this->model('user');
           
           $flag = false;
           if(isset($data['username'])&&($data['username']!=$olddata['username'])&&($data['username']!=''))
            {
                $model->changeUsername($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
            }
     
    
           if(isset($data['name'])&&($data['name']!=$olddata['name'])&&($data['name']!=''))
           {
                $model->changeName($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
           }
         
    
           if(isset($data['birthday'])&&($data['birthday']!=$olddata['birthday'])&&($data['birthday']!=''))
           {
                $model->changeBirthday($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
           }
           
    
           if(isset($data['sex'])&&($data['sex']!=$olddata['sex'])&&($data['sex']!=''))
           {
                $model->changeSex($data);
                
                echo '<script type="text/javascript">location.reload();</script>';
                $flag = true;
           }
          
    
           if(isset($data['email'])&&($data['email']!=$olddata['email'])&&($data['email']!=''))
           {
                $model->changeEmail($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
           }
          
           if(isset($data['phone'])&&($data['phone']!=$olddata['phone'])&&($data['phone']!=''))
           {
                $model->changePhone($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
           }
        
    
          if(isset($data['password'])&&($data['password']!=$olddata['password'])&&($data['password']!=''))
          {
                $model->changePass($data);
                $flag = true;
                echo '<script type="text/javascript">location.reload();</script>';
          }
          return $flag;
        }    
    }
