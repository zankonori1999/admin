<?php
    include_once ('functions.php');
    function user_login($data){
        $connection = config();
        $query = "SELECT * FROM admin_tbl WHERE username='$data[username]'";

        $result = mysqli_query($connection , $query);
        $row = mysqli_fetch_assoc($result);
        if(($row['username'] == $data['username']) && ($row['password'] == sha1($data['password']))){
            session_start();
            $_SESSION['data'] = $row;
            if(isset($data['rememberMe'])){
                setcookie("username" , $data['username'] , time() + 24*3600 );
                setcookie("password" , $data['password'] , time() + 24*3600 );
            }
            header("location:dashbord.php");
        }else{
            header("location:login.php?e=1");
        }
    }
    function user_logout(){
        session_start();
        session_destroy();
        header("location:index.php");
    }