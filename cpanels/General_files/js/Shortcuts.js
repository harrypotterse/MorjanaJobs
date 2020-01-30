$(document).keypress(function (e) {
var code = e.keyCode;
        var hh = "<ul class=list-group>\n\
<li class=list-group-item>التواصل<span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+1</span></li>\n\
<li class=list-group-item>جوجل أدسنس<span class='label label-primary' id='lab'>&nbsp;&nbsp;Press+2</span></li>\n\
<li class=list-group-item> السيرة الذاتية<span class='label label-success' id='lab'>&nbsp;&nbsp;Press+3</span></li>\n\
<li class=list-group-item> الوظائف<span class='label label-info' id='lab'>&nbsp;&nbsp;Press+4</span></li>\n\
<li class=list-group-item> سياسية الخصوصية <span class='label label-warning' id='lab'>&nbsp;&nbsp;Press+5</span></li>\n\
<li class=list-group-item> الأسئلة الشائعة <span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+6</span></li>\n\
<li class=list-group-item>  افضل الوظائف<span class='label label-default' id='lab'>Press+7</span></li>\n\
<li class=list-group-item>   افضل الموظفين<span class='label label-danger' id='lab'>Press+8</span></li>\n\
<li class=list-group-item>    افضل الصفحات<span class='label label-success' id='lab'>Press+9</span></li>\n\
\n\
\n\
\n\
\n\
\n\
\n\
\n\
\n\
</li>\n\
</ul>";
        if (code == 49) {
var url = "../../pages/contact/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 50) {
var url = "../../pages/googel_ads/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 51) {
var url = "../../pages/googel_ads/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 52) {
var url = "../../pages/cv/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 53) {
var url = "../../pages/job/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 54) {
var url = "../../pages/privacy/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 55) {
var url = "../../pages/faq/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 56) {
var url = "../../pages/job/rat_job.php";
        window.open(url, '_blank');
} else if (code == 57) {
var url = "../../pages/cv/rat_job.php";
        window.open(url, '_blank');
} else if (code == 104) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
} else if (code == 1575) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
}

});




