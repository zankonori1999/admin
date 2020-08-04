<?php
include_once '../include/functions.php';
    if(isset($_POST['update'])){
        $data = $_POST['data'];
        updateSubNews($_POST['data'] , $_GET['id'] , $_FILES['img']  , "../admin/img/"  , $data['parent']);
        header("location:dashbord.php?m=subNews&p=list");
    }else{
    $id = $_GET['id'];
    $Temp = selectEditSubMenu($id);
?>
<h1 class="pageLables">ویرایش خبر <?php echo $Temp['title']; ?></h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش خبر <?php echo $Temp['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" class="form-control" value="<?php echo $Temp['title']; ?>" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سر فصل</label>
                        <select class="form-control input-lg m-bot15" name="data[parent]">
                            <option value="0" <?php if($Temp['parent'] == 0 ){echo " selected"; } ?> >سر فصل</option>
                            <?php
                                $submenus = listNews();
                                foreach($submenus as $submenu){
                            ?>
                            <option value=<?php echo $submenu['id']; if($submenu['id'] == $Temp['parent']) { echo " selected"; } ?> ><?php echo $submenu['title']; ?></option>
                            <?php } ?>
<!--                            <option value="7">عنوان 1 </option>-->
<!--                            <option value="8">عنوان 2 </option>-->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">انتخاب عکس</label>
                        <input type="file" name="img">
                        <p class="help-block">عکس مورد نظر را انتخاب کنید</p>
                        <img src="<?php echo $Temp['img']; ?>" width="50px"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">متن خبری</label>
                        <textarea class="form-control" rows="8" name="data[text]"><?php echo $Temp['text']?></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info" name="update">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
<?php } ?>