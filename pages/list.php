<?php
include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست صفحات وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>کلمات کلیدی</th>
                    <th>توضیحات</th>
                    <th>محتویات</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $lists = list_pages();
                if($lists):
                    foreach ($lists as $list):
                        ?>
                        <tr>
                            <td><?php echo $list['title']; ?></td>
                            <td><?php echo $list['keywords']; ?></td>
                            <td><?php echo $list['description']; ?></td>
                            <td><a href="dashbord.php?m=pages&p=edit&id=<?php echo $list['id']; ?>" class="btn btn-primary btn-xs"><li class="icon-pencil"></li></a></td>
                            <td><a href="dashbord.php?m=pages&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
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