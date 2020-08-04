<?php
include_once '../include/functions.php';
    if(isset($_POST['Enter'])){
        $data = $_POST['data'];
//        var_dump($data);die();
        $to = uploader($_FILES['img'] , "../admin/img/"  , $data['parent']);
        addSubNews($data , $to);
    }
?>
<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" class="form-control" placeholder="عنوان خبر را وارد کنید" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سر فصل</label>
                        <select class="form-control input-lg m-bot15" name="data[parent]">
                            <option value="0">سر فصل</option>
                            <?php
                                $submenus = listNews();
                                foreach($submenus as $submenu){
                            ?>
                            <option value=<?php echo $submenu['id'] ; ?> ><?php echo $submenu['title']; ?></option>
                            <?php } ?>
<!--                            <option value="7">عنوان 1 </option>-->
<!--                            <option value="8">عنوان 2 </option>-->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">انتخاب عکس</label>
                        <input type="file" name="img">
                        <p class="help-block">عکس مورد نظر را انتخاب کنید</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">متن خبری</label>
                        <textarea id="editor" class="form-control" rows="8" name="data[text]" ></textarea>
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
