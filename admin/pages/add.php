<?php
include_once '../include/functions.php';
    if(isset($_POST['Enter'])){
        $data = $_POST['data'];
        add_pages($data );
    }
?>
<h1 class="pageLables">افزودن صفحه جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن صفحه جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input type="text" class="form-control" placeholder="عنوان صفحه را وارد کنید" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات اصلی </label>
                        <input type="text" class="form-control" placeholder=" کلمات اصلی را وارد کنید" name="data[keywords]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات </label>
                        <input type="text" class="form-control" placeholder=" توضیحات را وارد کنید" name="data[description]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea id="editor" class="form-control" rows="8" name="data[body]" ></textarea>
                        <script>
                            CKEDITOR.replace('editor');
                        </script>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info" name="Enter">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
