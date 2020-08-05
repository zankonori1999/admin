<?php
include_once 'functions.php';
    function addContact($data){
        $connection = config();
        $query = "INSERT INTO contact (name , email , subject , text ) VALUES ('$data[name]' , '$data[email]' , '$data[subject]' , '$data[text]')";
        mysqli_query($connection , $query);
    }

    function listContact (){
        $connection = config();
        $query = "SELECT * FROM contact";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }

    function deleteConcat($id){
        $connection = config();
        $query = "DELETE FROM contact WHERE id = '$id'";
        mysqli_query($connection , $query);
    }