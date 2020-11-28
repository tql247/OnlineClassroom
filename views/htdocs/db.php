<?php
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','classroom');

    function open_database(){
        $conn = new mysqli(HOST,USER,PASS,DB);
        if ($conn->connect_error){
            die('Connect error: ' . $conn->connect_error);
        }
        return $conn;
    }
    function is_giaovien($email){
        $sql = 'select * from giaovien where email = ?';
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$email);

        if (!$stm->execute()){
            die('Qieru error: ' . $stm->error);
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }
    function is_admin($email){
        $sql = 'select email from admin where email = ?';
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$email);

        if (!$stm->execute()){
            die('Qieru error: ' . $stm->error);
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }
    function is_hocsinh($email){
        $sql = 'select * from hocsinh where email = ?';
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$email);

        if (!$stm->execute()){
            die('Qieru error: ' . $stm->error);
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }

    function login($email,$pass){
        if (is_giaovien($email)){
            $sql= "select * from giaovien where email = ?";
        } elseif (is_admin($email)){
            $sql= "select * from admin where email = ?";
        } else {
            $sql= "select * from hocsinh where email = ?";
        }
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$email);
        if (!$stm->execute()){
            return null;
        }
        $result = $stm->get_result();
        $data= $result->fetch_assoc();

        $hashed_password = $data['pass'];
        if (!password_verify($pass, $hashed_password)){
            return null;
        }
        else return $data;
    }


    function register($user,$pass,$hoten,$email){
        
        if (is_hocsinh($email) || is_giaovien($email) || is_admin($email)) {
            return array(
                'code'=> 1, 'error'=>'Email exists');
        }
        
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $rand = random_int(0, 1000);
        $token = md5($user.'+'. $rand);

        $sql = 'insert to account(username, firstname,
 lastname, email, password, activate_token) values (?,?,?,?,?,?)';

        $conn = open_database();
        $stm = $conn ->prepare($sql);
        $stm->bind_param('ssssss',$user,$first,$last,$email,$hash, $token);

        if (!$stm->execute()) {
            return array(
                'code'=>2,
                'error'=>'Cannot execute command'
            );
        }

        return array(
            'code'=>0,
            'error'=>'Creat account successful'
        );

    }

?>