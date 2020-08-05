<?php
    function config(){
        $connection = mysqli_connect('localhost' , 'root' , '' , 'cms');
        return $connection;
    }

    function uploader($file , $dir , $folder){
        if(!file_exists($dir.$folder))
            mkdir($dir.$folder);

        $filename = $file['name'];
        $exp = explode("." , $filename);
        $newName = rand().".".end($exp);

        $from = $file['tmp_name'];
        $to = $dir.$folder."/".$newName;

        move_uploaded_file($from , $to);

        return $to;
    }

    @$m = $_GET['m']?$_GET['m']:'index';
    switch ($m){
        case 'menu':
            include_once 'menu.php';
            break;
        case 'news':
            include_once 'news.php';
            break;
        case 'subNews':
            include_once 'subNews.php';
            break;
        case 'index':
            include_once 'menu.php';
            break;
        case 'contact':
            include_once 'contact.php';
            break;
        case 'settings':
            include_once 'settings.php';
            break;
        case 'pages':
            include_once 'pages.php';
            break;
        case 'uploader':
            include_once 'uploader.php';
            break;
    }