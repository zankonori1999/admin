<?php
    include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست سر فصل های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>عنوان سر فصل ها</th>
                        <th>ترتیب</th>
                        <th>وضعیت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $lists = listNews();
                    if($lists):
                        foreach ($lists as $list):
                ?>
                    <tr>
                        <td><?php echo $list['title']; ?></td>
                        <td><?php echo $list['sort']; ?></td>
                        <td><?php
                            if($list['status'] == 0)
                                echo "<span class='btn btn-danger'>غیر فعال</span>
                                ";
                            else
                                echo "<span class='btn btn-success'>فعال</span>";
                            ?></td>
                        <td><a href="dashbord.php?m=news&p=edit&id=<?php echo $list['id']; ?>" class="btn btn-primary btn-xs"><li class="icon-pencil"></li></a></td>
                        <td><a href="dashbord.php?m=news&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
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