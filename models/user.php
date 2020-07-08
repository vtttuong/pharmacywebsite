<?php
class UserModel extends DB{
    // data
    public $data =[];

    // constructor
    // function __constructor(){
    //     parent::__construct();
    // }
    public function login($data){
        try{
            $stmt = $this->conn->prepare("SELECT id,name FROM USER WHERE username = :username AND password = :password");
            $stmt->execute([":username"=>$data['username'],":password"=>$data['password']]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            if($res==null)
                return false;
            else
            {    
                $_SESSION['id'] = $res['id'];
                $_SESSION['name'] = $res['name'];}
                return true;
            }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function changePass($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET password = :password
            WHERE id = :id');
            $stmt->execute([
                ":password"=>$data['password'],
                ":id"=>$data['id']
            ]);
            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    public function checkUser($username)
    {
        try{
            $stmt = $this->conn->prepare("SELECT id FROM USER WHERE username = :username");
            $stmt->execute([":username"=>$username]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($res==null)
                return true;
            else
                return false;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function checkEmail($email)
    {
        try{
            $stmt = $this->conn->prepare("SELECT id FROM USER WHERE email = :email");
            $stmt->execute([":email"=>$email]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($res==null)
                return true;
            else
                return false;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function register($data)
    {
        $username = $data['username'];
        $email = $data['email'];

        if (!$this->checkUser($username))
            return false;
        if (!$this->checkEmail($email))
            return false;
        
        try{
            $stmt = $this->conn->prepare('INSERT INTO 
            USER(username,password,email,phone,name,birthday,address,sex) 
            VALUES(:username,:password,:email,:phone,:name,:birthday,:address,:sex)');
            $stmt->execute([
                ":username"=>$data['username'],
                ":password"=>$data['password'],
                ":email"=>$data['email'],
                ":phone"=>$data['phone'],
                ":name"=>$data['name'],
                ":birthday"=>$data['birthday'],
                ":address"=>$data['address'],
                ":sex"=>$data['sex']
            ]);
            return true;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

}