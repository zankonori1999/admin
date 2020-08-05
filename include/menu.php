<?php
    function add_menu($data){
        $connection = config();
        $query = "INSERT INTO menu_tbl(title , url , sort , status , chid) VALUES 
                            ('$data[title]' , '$data[url]' , '$data[sort]' , '$data[status]' , '$data[parent]')";
        mysqli_query($connection , $query);
    }

    function submenu(){
        $connection = config();
        $query = "SELECT * FROM menu_tbl WHERE chid=0";
        $result = mysqli_query($connection , $query);
        while($row = mysqli_fetch_assoc($result))
            $res [] = $row;

        return $res;
    }

    function listMenu(){
        $connection = config();
        $query = "SELECT * FROM menu_tbl";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0) {
            while ($res = mysqli_fetch_assoc($row))
                $result [] = $res;
            return $result;
        }
    }

    function selectParentMenu($chid){
        $connection = config();
        $query = "SELECT * FROM menu_tbl WHERE id = '$chid'";
        $row = mysqli_query($connection , $query);
        $result = mysqli_fetch_assoc($row);
        return $result['title'];
    }

    function deleteMenu($id){
        $connection = config();
        $query = "DELETE FROM menu_tbl WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
    }

    function selectEditMenu($id){
        $connection = config();
        $query = "SELECT * FROM menu_tbl WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
        $result = mysqli_fetch_assoc($row);
        return $result;
    }

    function updateMenu($data , $id){
        $connection = config();
        $query = "UPDATE menu_tbl SET title='$data[title]' , url = '$data[url]' , sort = '$data[sort]' ,status = '$data[status]' , chid = '$data[parent]' WHERE id = '$id'";
        mysqli_query($connection , $query);
    }

    function listMenuDefault(){
        $connection = config();
        $query = "SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }

    function listSubMenuDefault($id){
        $connection = config();
        $query = "SELECT * FROM menu_tbl WHERE status = '1' AND chid='$id' ORDER BY sort ASC";
        $row = mysqli_query($connection , $query);
        if (mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }
