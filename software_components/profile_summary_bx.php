  <div id="profile_summary_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">الوصف</h5>
<!--                                <a href="javascript:void(0);" data-toggle="modal" data-target="#profilesummary" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>-->
                            </div>
                            <p class="m-b0">
                                <?php echo  $Description ; ?>
                            </p>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="profilesummary" tabindex="-1" role="dialog" aria-labelledby="ProfilesummaryModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ProfilesummaryModalLongTitle">Profile Summary</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>اهلا بك في موقع مرجانه للوظائف , أكبر موقع عربي لتلقي طلبات الوظائف الهامة في مختتلف المجالات ووظائفنا من اهم المواقع المعروفه مثل موقع بيت.كوم ومن اصحاب العمل بذاتهم فيمكنك الحصول علي وظيفه احلامك عن طريقنا او لو كنت صاحب عمل يمكنك عرض وظيفتك وسوف يتقدم لك الاشخاص المناسبه
                                                .</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>التفاصيل</label>
                                                            <textarea class="form-control" placeholder="Type Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
<!--                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">الغاء</button>
                                            <button type="button" class="site-button">حفظ</button>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>