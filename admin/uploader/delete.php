<?php
    $id = $_GET['id'];
    delete_file($id);
    header("location:dashbord.php?m=uploader&p=list");