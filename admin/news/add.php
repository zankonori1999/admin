<?php
include_once '../include/functions.php';
    if(isset($_POST['Enter'])){
        $data = $_POST['data'];
        add_News($data);
    }
?>
<h1 class="pageLables">افزودن سر فصل جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن سر فصل جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سرفصل</label>
                        <input type="text" class="form-control" placeholder="عنوان سر فصل را وارد کنید" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" >وضعیت نمایش</label><br>
                        <label> <input type="radio" name="data[status]" value="1"> فعال  </label> <br>
                        <label> <input type="radio" name="data[status]" value="0"> غیر فعال </label> <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" class="form-control" placeholder="ترتیب نمایش مورد نظر را وارد کنید" name="data[sort]">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info" name="Enter">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
