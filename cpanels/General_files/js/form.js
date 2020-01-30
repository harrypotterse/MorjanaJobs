$(document).ready(function () {
    $('#uploadImage').submit(function (event) {
        event.preventDefault();
        $('#loader-icon').show();
        $('#targetLayer').hide();
        // ======================
        $(this).ajaxSubmit({
            target: '#targetLayer',
            beforeSubmit: function () {
                $('.progress-bar').width('50%');
                $('input').attr('disabled', true);
            },
            uploadProgress: function (event, position, total, percentageComplete)
            {
                $('.progress-bar').animate({
                    width: percentageComplete + '%'
                }, {
                    duration: 1000
                });
            },
            success: function () {
                $('#loader-icon').hide();
                $('#targetLayer').show();
                $('input').attr('disabled', false);
                //  location.reload();

            },
            resetForm: true
        });

        return false;
    });
});