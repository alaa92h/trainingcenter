<div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-darkorange">
                                   المعاهد
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
                                                المعهد
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
                                    	<!-- institutes`id`, `name`, `address`, `about`, `logo`, `user_id`, `created_at`, `phone` -->
                                        <?php foreach ($institutes as $institute) : ?>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <?php echo $institute->name; ?>
                                            </td>
                                            <td>
                                                <?php echo $institute->address; ?>
                                            </td>
                                            <td>
                                                <?php echo $institute->about; ?>
                                            </td>
                                            <td>
                                                <?php echo $institute->phone; ?>
                                            </td>
                                            <td>
                                                <img width="100px" src="<?php echo base_url(). $institute->logo; ?>">
                                            </td>
                                            <td>

                                            	<a href="<?php echo base_url(); ?>admin/institute/<?php echo $institute->id ?>">
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