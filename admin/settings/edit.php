<?php
    if(isset($_POST['update'])){
        $data = $_POST['data'];
        updateSettings($data , $_FILES['logo']);
        header("location:dashbord.php?m=settings&p=list");
    }
    $Temp = showSettings();
?>
    <h1 class="pageLables">ویرایش تنضیمات </h1>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" >
            <section class="panel">
                <header class="panel-heading">
                    ویرایش تنضیمات
                </header>
                <div class="panel-body">
                    <form role="form" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان صفحه اصلی</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['title']; ?>" name="data[title]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">انتخاب لوگو</label>
                            <input type="file" name="logo">
                            <p class="help-block">لوگو مورد نظر را انتخاب کنید</p>
                            <img src="<?php echo $Temp['logo']; ?>" width="50px"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک فیسبوک</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['facebook']; ?>" name="data[facebook]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک تویتر</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['twiter']; ?>" name="data[twiter]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک لینکدین</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['linkdin']; ?>" name="data[linkdin]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک گوگل پلاس</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['googleplus']; ?>" name="data[googleplus]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک اینستاگرام</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['instagram']; ?>" name="data[instagram]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">لینک ایمیل</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['email']; ?>" name="data[email]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">مسیر</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['map']; ?>" name="data[map]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">آدرس</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['address']; ?>" name="data[address]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">فکس</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['fax']; ?>" name="data[fax]">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">تلفن</label>
                            <input type="text" class="form-control" value="<?php echo $Temp['tellphone']; ?>" name="data[tellphone]">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info" name="update">ویرایش</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
<?php //} ?>
