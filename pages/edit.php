<?php
include_once '../include/functions.php';
if(isset($_POST['update'])){
    $data = $_POST['data'];
    update_pages($_POST['data'] , $_GET['id'] );
    header("location:dashbord.php?m=pages&p=list");
}else{
    $id = $_GET['id'];
    $Temp = select_Edit_page($id);
    ?>
    <h1 class="pageLables">ویرایش صفحه <?php echo $Temp['title']; ?></h1>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" >
            <section class="panel">
                <header class="panel-heading">
                    ویرایش صفحه <?php echo $Temp['title']; ?>
                </header>
                <div class="panel-body">
                    <form role="form" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان صفحه</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['title']; ?>" name="data[title]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">کلمات کلیدی</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['keywords']; ?>" name="data[keywords]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">توضیحات</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['description']; ?>" name="data[description]">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">محتویات صفحه </label>
                            <textarea id="editor" class="form-control" rows="8" name="data[body]"><?php echo $Temp['body']?></textarea>
                            <script>
                                CKEDITOR.replace('editor');
                            </script>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info" name="update">ویرایش</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
<?php } ?>