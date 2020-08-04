<?php
include_once '../include/functions.php';
    if(isset($_POST['Enter'])){
        $data = $_POST['data'];
//        var_dump($data);die();
        add_menu($data);
    }
?>
<h1 class="pageLables">افزودن منو جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن منو جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" class="form-control" placeholder="عنوان منو را وارد کنید" name="data[title]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" name="data[url]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="data[parent]">
                            <option value="0">سرگروه</option>
                            <?php
                                $submenus = submenu();
                                foreach($submenus as $submenu){
                            ?>
                            <option value=<?php echo $submenu['id'] ; ?> ><?php echo $submenu['title']; ?></option>
                            <?php } ?>
<!--                            <option value="7">عنوان 1 </option>-->
<!--                            <option value="8">عنوان 2 </option>-->
                        </select>
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
