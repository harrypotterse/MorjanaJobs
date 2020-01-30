<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/tagcomplete/tagcomplete.js"></script><!-- TAGCOMPLETE -->
<script src="plugins/switcher/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="Development/form.js" type="text/javascript"></script>
<script src="Development/forgot-password.js" type="text/javascript"></script>
<script>
    $(function () {
        $("#sub").click(function () {
            alert(1);
            var text = $('.sda').val();
            $("#sub").attr('disabled', 'disabled');
            $.post('Forms/join_mail.php', {text: text}, function (data) {
                if (data = 1) {
                    var text = $('.sda').val('');
                    swal("Thank you", "To join with us", "success");
                } else {
                    return false;
                }
            });
            return false;
        });
    });
</script>
<script>
<?php echo $settings->js; ?>
</script>
