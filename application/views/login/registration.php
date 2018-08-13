
<form action="<?php echo base_url() ?>register" method="post">
	
    <div class="register-container animated fadeInDown">
        <div style="height: 601px !important;" class="registerbox bg-white">
            <div class="registerbox-title"><p>التسجيل</p></div>

            <div class="registerbox-textbox">
                <input class="form-control" name="name" placeholder="الاسم" type="text">
            </div>
            <div class="registerbox-textbox">
                <input class="form-control" name="email" placeholder="البريد" type="email">
            </div>
            <div class="registerbox-textbox">
                <input class="form-control" name="password" placeholder="كلمه السر" type="password">
            </div>
            <hr class="wide">
            <div class="registerbox-textbox">
                <input class="form-control" name="institute_name" placeholder="اسم المعهد" type="text">
            </div>
            <div class="registerbox-textbox">
                <input class="form-control" name="phone" placeholder="الهاتف" type="text">
            </div>
            <div class="registerbox-textbox">
                <input class="form-control" name="address" placeholder="العنوان" type="text">
            </div>
            <div class="registerbox-textbox">
                        <textarea class="form-control" name="about" rows="" placeholder="عن المعهد"></textarea>
            </div>

            
           <!--  <div class="registerbox-textbox no-padding-bottom">
                <div class="checkbox">
                    <label>
                        <input class="colored-primary" checked="checked" type="checkbox">
                        <span class="text darkgray">I agree to the Company <a class="themeprimary">Terms of Service</a> and Privacy Policy</span>
                    </label>
                </div>
            </div> -->
            <div class="registerbox-submit">
                <input class="btn btn-primary pull-right" name="register" value="تسجيل" type="submit">
            </div>
        </div>
        <div class="logobox">
        </div>
    </div>
</form>
    
