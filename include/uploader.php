<?php
    function add_File($data , $file){
        $connection = config();
        $name = $file['name'];
        $exp = explode(".", $name);
        $new_name = "File-".rand().end($exp);

        $from = $file['tmp_name'];
        $to = "../admin/uploader/upload/".$new_name;

        move_uploaded_file($from , $to);

        $query = "INSERT INTO file_tbl (title , size , path) VALUES ('$data[title]', '$file[size]' , '$to')";

        mysqli_query($connection , $query);
    }

    function file_list(){
        $connection = config();
        $query = "SELECT * FROM file_tbl";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }

    function delete_file($id){
        $connection = config();
        $query = "DELETE FROM file_tbl WHERE id = '$id'";
        mysqli_query($connection , $query);
    }