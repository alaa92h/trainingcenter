<!-- teachers `id`, `name`, `about`, `institute_id`, `img`, `created_at` -->
<div class="row">
    <!-- name -->
    <form action="<?php echo base_url() ?>institute/post_add_teacher" method="post">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget flat radius-bordered">
                <div class="widget-header bg-danger">
                    <span class="widget-caption">اضافة استاذ</span>
                </div>
                <div class="widget-body">
                    <div id="registration-form">
                        <form role="form">
                            <div class="form-title">
                               بينات الاستاذ
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">الاسم</label>
                                        <span class="input-icon icon-right">
                                            <input class="form-control" name="name"  placeholder="اسم الاستاذ" type="text">
                                            <i class="fa fa-user blue"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputName2">البريد</label>
                                        <span class="input-icon icon-right">
                                            <input class="form-control" name="email" placeholder="البرد الالكتروني" type="text">
                                            <i class="fa fa- palegreen"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>الهاتف</label>
                                        <span class="input-icon icon-right">
                                            <input class="form-control" name="phone" placeholder="الهاتف" type="text">
                                            <i class="glyphicon glyphicon-user palegreen"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">السيره الذاتيه</label>
                                        <span class="input-icon icon-right">
                                            <textarea name="about" class="form-control" rows="10"></textarea>
                                            <i class="glyphicon glyphicon-briefcase darkorange"></i>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
