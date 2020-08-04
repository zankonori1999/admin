<?php
include_once '../include/functions.php';
    if(isset($_POST['update'])){
        updateNews($_POST['data'] , $_GET['id']);
        header("location:dashbord.php?m=news&p=list");
    }else{
    $id = $_GET['id'];
    $Temp = selectEditNews($id);
?>
<h1 class="pageLables">ویرایش سر فصل <?php echo $Temp['title']; ?></h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش سر فصل <?php echo $Temp['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سر فصل</label>
                        <input type="text" class="form-control" value="<?php echo $Temp['title']; ?>" name="data[title]">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" >وضعیت نمایش</label><br>
                        <label> <input type="radio" name="data[status]" value="1" <?php if ($Temp['status'] == 1){echo "checked"; } ?> > فعال  </label> <br>
                        <label> <input type="radio" name="data[status]" value="0" <?php if ($Temp['status'] == 0){echo "checked"; } ?> > غیر فعال </label> <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" class="form-control" value="<?php echo $Temp['sort']; ?>" name="data[sort]">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info" name="update">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
<?php } ?>