<?php 
    session_start();
    
    if (isset($_POST['login'])){
        $connection = new mysqli('localhost','root','','bugme');
        $connection->set_charset('utf8mb4');
        $email = $connection->real_escape_string($_POST['email']);
        $password = md5($connection->real_escape_string($_POST['password']));
        $data = $connection->query("SELECT * FROM users WHERE email = '$email' AND password='$password'");
        $num = $data->fetch_assoc();
        if($num> 0){
            $_SESSION['Loggedin'] = '1';
            $_SESSION['Email'] = $email;
            $_SESSION['id'] = $num['id'];
            exit($num['id']);
        }else{
            exit('0');
        }
    }
?>
