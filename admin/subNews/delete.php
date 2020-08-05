<?php
    ob_start();
    $id = $_GET['id'];
    deleteSubNews($id);
    header("location:dashbord.php?m=subNews&p=list");