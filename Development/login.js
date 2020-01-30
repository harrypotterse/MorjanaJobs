$(document).ready(function () {
    $('#uploadImagex').submit(function (event) {
        event.preventDefault();
        $('#targetLayerx').hide();
        // ======================
        $(this).ajaxSubmit({
            target: '#targetLayerx',
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
                $('input').attr('disabled', false);
                $('#loader-icon').hide();
                var x = $('#targetLayerx').text();
               
                console.log(x);
            },
            resetForm: true
        });
        return false;
    });
});