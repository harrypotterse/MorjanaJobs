<form id="uploadImagex" class="tab-pane active col-12 p-a0 "  method="post" action="Forms/login.php" >
    <p class="font-weight-600 text-center">اذا كان لديك حساب فأدخل بياناته</p>
    <div class="form-group">
        <label>الأيميل</label>
        <div class="input-group">
            <input name="email" required="" class="form-control" placeholder="الايميل" type="email">
        </div>
    </div>
    <div class="form-group">
        <label>الباسورد *</label>
        <div class="input-group">
            <input name="Password" required="" class="form-control " placeholder="الباسورد" type="password">
        </div>
    </div>
    <div class="text-left">
        <button class="site-button">دخول</button>
        <a data-toggle="tab" href="#forgot-password" class="site-button-link forget-pass pull-right m-t15"><i class="fa fa-unlock-alt"></i> هل نسيت الباسورد؟</a> 
    </div>
    <div id="targetLayerx">                 
    </div>
</form>
<form id="forgot-password" class="tab-pane fade col-12 p-a0" action="Forms/forgot.php" method="post">
    <p>سوف نرسل لك رسالة علي الايميل </p>
    <div class="form-group">
        <label>الأيميل</label>
        <div class="input-group">
            <input name="email" required="" class="form-control" placeholder="من فضلك اكتب ايميلك المسجل به" type="email">
        </div>
    </div>
    <div class="text-left"> 
        <a class="site-button outline gray" data-toggle="tab" href="#uploadImage">رجوع</a>
        <button class="site-button pull-right">تأكيد</button>
          <div id="targetLayer2">                 
    </div>
    </div>
</form>