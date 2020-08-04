<?php
    include_once '../include/contact.php';
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست تماس های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>موضوع</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>پیام</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $lists = listContact();
                if($lists):
                    foreach ($lists as $list):
                        ?>
                        <tr>
                            <td><?php echo $list['subject']; ?></td>
                            <td><?php echo $list['name']; ?></td>
                            <td><?php echo $list['email']; ?></td>
                            <td><?php echo $list['text']; ?></td>
                            <td><a href="dashbord.php?m=contact&p=delete&id=<?php echo $list['id']; ?>" class="btn btn-danger btn-xs"><li class="icon-trash"></li></a></td>
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
