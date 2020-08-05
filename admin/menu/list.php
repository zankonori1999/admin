<?php
    include_once '../include/functions.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منو های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>عنوان منو</th>
                        <th>عنوان سرگروه</th>
                        <th>لینک منو</th>
                        <th>ترتیب</th>
                        <th>وضعیت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $lists = listMenu();
                    if($lists):
                        foreach ($lists as $list):
                ?>
                    <tr>
                        <td><?php echo $list['title']; ?></td>
                        <td><?php
                            if($list['chid'] == 0)
                                echo "ندارد";
                            else{
                                $parent = selectParentMenu($list['chid']);
                                echo $parent;
                            }
                            ?></td>
                        <td><?php echo $list['url']; ?></td>
                        <td><?php echo $list['sort']; ?></td>
                        <td><?php
                            if($list['status'] == 0)
                                echo "<span class='btn btn-danger'>غیر فعال</span>
                                ";
                            else
                                echo "<span class='btn btn-success'>فعال</span>";
                            ?></td>
                        <td><a href="dashbord.php?m=menu&p=edit&id=<?php echo $list['id']; ?>" class="btn btn-primary btn-xs"><li class="icon-pencil"></li></a></td>
                        <td><a href="dashbord.php?m=menu&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
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