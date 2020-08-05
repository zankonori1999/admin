<?php
    function add_pages($data){
        $connection = config();
        $query = "INSERT INTO pages_tbl (title , keywords , description , body) VALUES ('$data[title]' , '$data[keywords]' , '$data[description]' , '$data[body]')";
        mysqli_query($connection , $query);
    }

    function list_pages(){
        $connection = config();
        $query = "SELECT * FROM pages_tbl";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result []  = $res;
            }
            return $result;
        }
    }

    function  update_pages($data , $id){
        $connection = config();
        $query = "UPDATE pages_tbl SET title = '$data[title]' , keywords = '$data[keywords]' , description = '$data[description]' , body = '$data[body]' WHERE id = '$id' ";
        mysqli_query($connection , $query);
    }

    function select_Edit_page($id){
        $connection = config();
        $query = "SELECT * FROM pages_tbl WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }

    function delete_page($id){
        $connection = config();
        $query = "DELETE FROM pages_tbl WHERE id = '$id'";
        mysqli_query($connection , $query);
    }

    function detail_pages($id){
        $connection = config();
        $query = "SELECT * FROM pages_tbl WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }