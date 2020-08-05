<?php
include_once 'subNews.php';
    function add_News($data)
    {
        $connection = config();
        $query = "INSERT INTO news_tbl (title , status , sort ) VALUES ('$data[title]' , '$data[status]' , '$data[sort]')";
        mysqli_query($connection, $query);
    }

//    function listNews()
//    {
//        $connection = config();
//        $query = "SELECT * FROM news_tbl";
//        $row = mysqli_query($connection, $query);
//        if (mysqli_num_rows($row) > 0) {
//            while ($res = mysqli_fetch_assoc($row)) {
//                $result [] = $res;
//            }
//            return $result;
//        }
//    }

    function selectEditNews($id)
    {
        $connection = config();
        $query = "SELECT * FROM news_tbl WHERE id = '$id'";
        $row = mysqli_query($connection, $query);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }

    function updateNews($data, $id)
    {
        $connection = config();
        $query = "UPDATE news_tbl SET title='$data[title]' , status = '$data[status]' , sort = '$data[sort]'  WHERE id = '$id'";
        mysqli_query($connection, $query);
    }

    function deleteNews($id)
    {
        $connection = config();
        $query = "DELETE FROM news_tbl WHERE id = '$id'";
        mysqli_query($connection, $query);
    }

    function listNewsDefault(){
        $connection = config();
        $query = "SELECT * FROM news_tbl WHERE status = '1' GROUP BY sort ASC ";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }