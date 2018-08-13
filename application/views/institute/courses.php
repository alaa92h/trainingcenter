<div class="col-xs-12 col-md-12">
    <a href="<?php echo base_url() ?>institute/add_course" class="btn btn-labeled btn-palegreen">
        <i class="btn-label glyphicon glyphicon-plus"></i>اضافه دوره
    </a>

    <br>
    <br>
    <div class="well with-header  with-footer">
        <div class="header bg-darkorange">
           الدورات التدريبيه
        </div>
        <table class="table table-hover table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        اسم الدوره
                    </th>
                    <th>
                     الاستاذ
                    </th>
                    <th>
                        السعر
                    </th>
                    <th>
                        التاريخ
                    </th>
                    <th>
                        الضبط
                    </th>
                </tr>
            </thead>
            <tbody>
            	<!-- courses `id`, `name`, `institute_id`, `fees`, `teacher_id`, `start_date`, `status`, `img`, `category_id`, `duration`, `level`, `cours_type_id`, `created_at` -->
                <?php foreach ($courses as $cours) : ?>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <?php echo $cours->name; ?>
                    </td>
                    <td>
                        <?php echo $cours->teacher_id; ?>
                    </td>
                    <td>
                        <span><?php echo " price " ?> </span>
                        <span><?php echo $cours->fees  ?> </span>

                        <span><?php echo " SDG " ?> </span>
                    </td>
                    <td>
                        <?php echo $cours->start_date; ?>
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

                    	<a href="#">
                    		<span class="label label-success">
                             <i class="fa fa-close"></i>   فتح
                            </span>
                    	</a>

                    	<a href="#">
                    		<span class="label label-info">
                             <i class="fa fa-close"></i>   تعديل
                            </span>
                    	</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>

        
    </div>
</div>