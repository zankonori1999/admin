<?php
include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست فایل های آپلود شده
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان فایل</th>
                    <th>حجم</th>
                    <th>آدرس</th>
                    <th>تصویر</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $lists = file_list();
                if($lists):
                    foreach ($lists as $list):
                        ?>
                        <tr>
                            <td><?php echo $list['title']; ?></td>
                            <td><?php echo $list['size']; ?></td>
                            <td><input style="direction: ltr" type="text" value="<?php echo $list['path']; ?>" size="50"></td>
                            <td>
                                <img src="<?php echo $list['path']; ?>" width="50px">
                            </td>
                            <td><a href="dashbord.php?m=uploader&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
                        </tr>
                    <?php
                    endforeach;
                endif;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>