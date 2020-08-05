<?php
    function addSubNews($data , $to){
        $connection = config();
        $query = "INSERT INTO subnews ( title , text , parent , img ) VALUES 
                            ('$data[title]' , '$data[text]' , '$data[parent]' , '$to')";
        mysqli_query($connection , $query);
    }


    function listSubNews(){
        $connection = config();
        $query = "SELECT * FROM subnews";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0) {
            while ($res = mysqli_fetch_assoc($row))
                $result [] = $res;
            return $result;
        }
    }

    function selectParentNews($parent){
        $connection = config();
        $query = "SELECT * FROM news_tbl WHERE id = '$parent'";
        $row = mysqli_query($connection , $query);
        $result = mysqli_fetch_assoc($row);
        return $result['title'];
    }

    function deleteSubNews($id){
        $connection = config();
        $query = "DELETE FROM subnews WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
    }

    function selectEditSubMenu($id){
        $connection = config();
        $query = "SELECT * FROM subnews WHERE id = '$id'";
        $row = mysqli_query($connection , $query);
        $result = mysqli_fetch_assoc($row);
        return $result;
    }

    function updateSubNews($data , $id , $file , $dir , $folder){
        if(!file_exists($dir.$folder))
            mkdir($dir.$folder);

        $connection = config();
        $sql = "SELECT * FROM subnews WHERE id = '$id'";
        $img = mysqli_query($connection , $sql);
        $res = mysqli_fetch_assoc($img);
        if($file['name'] != ''){
            unlink($res['img']);

            $Name = $file['name'];
            $exp = explode("." , $Name);
            var_dump($exp);
            $newName = rand().".".end($exp);

            $from = $file['tmp_name'];
            $to = $dir.$folder."/".$newName;
            move_uploaded_file($from , $to);
        }else
            $to = $res['img'];

        $query = "UPDATE subnews SET title='$data[title]' , text = '$data[text]'  , parent = '$data[parent]' , img ='$to' WHERE id = '$id'";
        mysqli_query($connection , $query);
    }

    function listNews()
    {
        $connection = config();
        $query = "SELECT * FROM news_tbl";
        $row = mysqli_query($connection, $query);
        if (mysqli_num_rows($row) > 0) {
            while ($res = mysqli_fetch_assoc($row)) {
                $result [] = $res;
            }
            return $result;
        }
    }

    function listSubNewsDefault(){
        $connection = config();
        $query = "SELECT * FROM subnews";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            return $result;
        }
    }

    function listSubNewsDefaultTow(){
        $connection = config();
        $query = "SELECT * FROM subnews";
        $row = mysqli_query($connection , $query);
        if(mysqli_num_rows($row) > 0){
            while ($res = mysqli_fetch_assoc($row)){
                $result [] = $res;
            }
            $total = count($result);
            for($i = 0 ; $i < 2 ; $i++){
                $P [] = $result[$total-2-$i];
            }
            return $P;
        }
    }
