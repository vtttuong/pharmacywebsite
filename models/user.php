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


    public function changeUsername($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET username = :username
            WHERE id = :id');
            $stmt->execute([
                ":username"=>$data['username'],
                ":id"=>$data['id']
            ]);

            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    
    public function changeEmail($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET email = :email
            WHERE id = :id');
            $stmt->execute([
                ":email"=>$data['email'],
                ":id"=>$data['id']
            ]);

            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    public function changePhone($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET phone = :phone
            WHERE id = :id');
            $stmt->execute([
                ":phone"=>$data['phone'],
                ":id"=>$data['id']
            ]);

            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    public function changeName($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET name = :name
            WHERE id = :id');
            $stmt->execute([
                ":name"=>$data['name'],
                ":id"=>$data['id']
            ]);
            $_SESSION['name'] = $data['name'];    
            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    public function changeBirthday($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET birthday = :birthday
            WHERE id = :id');
            $stmt->execute([
                ":birthday"=>$data['birthday'],
                ":id"=>$data['id']
            ]);

            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
    public function changeSex($data)
    {
        try{
            $stmt =$this->conn->prepare('UPDATE USER
            SET sex = :sex
            WHERE id = :id');
            $stmt->execute([
                ":sex"=>$data['sex'],
                ":id"=>$data['id']
            ]);

            return true;
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
     
    public function getUserProfile($id)
    {
        try{
            $stmt = $this->conn->prepare("SELECT * FROM USER WHERE id = :id");
            $stmt->execute([":id"=>$id]);

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            return $res;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    
    public function delete($id){

        //delete on database
        try{
            $stmt = $this->conn->prepare("DELETE FROM ADMIN WHERE id = :id");
            $stmt->execute([":id"=>$id]);
        }
        catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }

}