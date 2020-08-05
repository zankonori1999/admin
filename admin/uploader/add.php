<?php
include_once '../include/functions.php';
if(isset($_POST['Enter'])){
    $data = $_POST['data'];
    $file = $_FILES['file'];
    add_File($data , $file);
}
?>
<h1 class="pageLables">افزودن فایل جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن فایل جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان فایل</label>
                        <input type="text" class="form-control" placeholder="عنوان فایل را وارد کنید" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> فایل</label>
                        <input type="file" class="form-control"  name="file">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info" name="Enter">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
