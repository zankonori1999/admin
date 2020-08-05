<?php
    ob_start();
    $id = $_GET['id'];
    deleteNews($id);
    header("location:dashbord.php?m=news&p=list");