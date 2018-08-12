<div class="col-xs-12 col-md-12">
    <a href="<?php echo base_url() ?>institute/add_teacher" class="btn btn-labeled btn-palegreen">
        <i class="btn-label glyphicon glyphicon-plus"></i>اضافه استاذ
    </a>

    <br><br>
</div>



<div class="col-xs-12 col-md-12">
    <div class="well with-header  with-footer">
        <div class="header bg-darkorange">
            قائمه الاساتذه
        </div>
        <table class="table table-hover table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        اسم الاستاذ
                    </th>
                    <th>
                        الهاتف
                    </th>
                    <th>
                        البريد
                    </th>
                    <th>
                        الضبط
                    </th>
                </tr>
            </thead>
            <tbody>
                <!--teachers `name`, `about`, `institute_id`, `img`, `phone`, `email`, `created_at`-->
                <?php foreach ($teachers as $teacher) : ?>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <?php echo $teacher->name; ?>
                        </td>
                        <td>
                            <?php echo $teacher->phone; ?>
                        </td>
                        <td>
                            <?php echo $teacher->email; ?>
                        </td>

                        <td>

                            <a href="#">
                                <span class="label label-purple">
                                    <i class="fa fa-eye"></i>   عرض
                                </span>
                            </a>

                            <a href="#">
                                <span class="label label-darkorange">
                                    <i class="fa fa-close"></i>   حذف
                                </span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


    </div>
</div>