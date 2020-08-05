<?php
    include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست خبر های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>عنوان خبر</th>
                        <th>عنوان سر فصل</th>
                        <th>متن خبری</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                        <th>تصویر</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $lists = listSubNews();
                    if($lists):
                        foreach ($lists as $list):
                ?>
                    <tr>
                        <td><?php echo $list['title']; ?></td>
                        <td><?php
                            if($list['parent'] == 0)
                                echo "ندارد";
                            else{
                                $parent = selectParentNews($list['parent']);
                                echo $parent;
                            }
                            ?></td>
                        <td><?php echo $list['text']; ?></td>
                        <td><a href="dashbord.php?m=subNews&p=edit&id=<?php echo $list['id']; ?>" class="btn btn-primary btn-xs"><li class="icon-pencil"></li></a></td>
                        <td><a href="dashbord.php?m=subNews&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
                        <td>
                            <img src="<?php echo $list['img']; ?>" width="50px">
                        </td>
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