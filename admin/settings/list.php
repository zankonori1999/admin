<?php
include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                تنضیمات اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>لوگو</th>
                    <th>عنوان صفحه اصلی</th>
                    <th>لینک فیسبوک</th>
                    <th>لینک تویتر</th>
                    <th>لینک لینکدین</th>
                    <th>لینک گوگل پلاس</th>
                    <th>لینک اینستاگرام</th>
                    <th>ایمیل</th>
                    <th>نقشه</th>
                    <th>آدرس</th>
                    <th>فکس</th>
                    <th>تلفن</th>
                    <th>ویرایش</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $lists = showSettings();
                if($lists):
                        ?>
                        <tr>
                            <td><img src="<?php echo $lists['logo']; ?>" width="100px"></td>
                            <td><?php echo $lists['title']; ?></td>
                            <td><?php echo $lists['facebook']; ?></td>
                            <td><?php echo $lists['twiter']; ?></td>
                            <td><?php echo $lists['linkdin']; ?></td>
                            <td><?php echo $lists['googleplus']; ?></td>
                            <td><?php echo $lists['instagram']; ?></td>
                            <td><?php echo $lists['email']; ?></td>
                            <td><?php echo $lists['map']; ?></td>
                            <td><?php echo $lists['address']; ?></td>
                            <td><?php echo $lists['fax']; ?></td>
                            <td><?php echo $lists['tellphone']; ?></td>
                            <td><a href="dashbord.php?m=settings&p=edit" class="btn btn-primary btn-xs"><li class="icon-pencil"></li></a></td>
                        </tr>
                    <?php
                endif;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
