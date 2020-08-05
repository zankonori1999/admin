<?php
include_once 'functions.php';
    function showSettings(){
        $connection = config();
        $query = "SELECT * FROM setting";
        $row = mysqli_query($connection , $query);
        $res = mysqli_fetch_assoc($row);
        return$res;
    }

    function updateSettings($data , $file){
        $connection = config();
        if(!file_exists("img/logo"))
            mkdir("img/logo");
        $sql = "SELECT * FROM setting";
        $row = mysqli_query($connection , $sql);
        $res = mysqli_fetch_assoc($row);

        if($file['name']){
            unlink($res['logo']);
            $name = $file['name'];
            $exp = explode("." , $name);
            $newName = rand().".".end($exp);

            $from = $file['tmp_name'];
            $to = "img/logo/".$newName;

            move_uploaded_file($from , $to);
        }else
            $to = $res['logo'];

        $query = "UPDATE setting SET title = '$data[title]' , facebook = '$data[facebook]' , twiter = '$data[twiter]',
                  linkdin = '$data[linkdin]' , googleplus = '$data[googleplus]' , instagram = '$data[instagram]' , email = '$data[email]',
                  map = '$data[map]' , address = '$data[address]' , fax = '$data[fax]' , logo ='$to' , tellphone = '$data[tellphone]'";
        mysqli_query($connection , $query);
    }