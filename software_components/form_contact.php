<form   id="uploadImage"  action="Forms/contact_data.php"   method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <input name="Name" type="text" required class="form-control" placeholder="الاسم">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group"> 
                    <input name="Mail" type="email" class="form-control" required  placeholder="الايميل" >
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <textarea name="message" rows="4" class="form-control" required placeholder="الرسالة...."></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <input type="submit" value="ارسال" class="site-button " >
        </div>
    </div>
    <div id="targetLayer">                 
    </div>
</form>