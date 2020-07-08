 <?php    

    function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    $error = array();
    $data = array();
    if (!empty($_POST['submit']))
    {
        // Lấy dữ liệu
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $data['confirmpassword'] = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : '';

        // Kiểm tra định dạng dữ liệu
        if (empty($data['email'])){
            $error['email'] = 'Bạn chưa email';
        }
        else if (!is_email($data['email'])){
            $error['email'] = 'Email không đúng định dạng';
        }
     
        if (empty($data['password'])){
            $error['password'] = 'Bạn chưa nhập mật khẩu';
        }
        
        if (empty($data['confirmpassword'])){
            $error['confirmpassword'] = 'Bạn chưa nhập xác nhận mật khẩu';
        }
        else if ($data['password']!=$data['confirmpassword']){
            $error['confirmpassword'] = 'Mật khẩu không khớp';
        }
     
        // Lưu dữ liệu
        if (!$error){
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
            $insertUser = $this->insertuser($_POST);
            }
        }
        else{
            echo 'Dữ liệu bị lỗi, không thể lưu trữ';
        }
    }

?>