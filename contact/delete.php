<?php
include_once '../include/contact.php';
    $id = $_GET['id'];
    deleteConcat($id);
    header("location:dashbord.php?m=contact&p=list");