<?php

include('../../../../Classes/simple_html_dom.php');
error_reporting("E_ALL & ~E_NOTIC");
require_once '../Settings.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
$pag = filter_var($_POST['pag'], FILTER_SANITIZE_NUMBER_INT);
$hreff = filter_var($_POST['hreff'], FILTER_SANITIZE_URL);
// get DOM from URL or file
if (!$a->empty_filed($pag)):
    $hreff;
else:
    $hreff = "$hreff?page=$pag";
endif;
$html = file_get_html($hreff);
// find all link
// find all link

$array = array();
foreach ($html->find('.m0.t-regular a') as $e) :
    $array['Job'][] = $e->innertext;
endforeach;
foreach ($html->find('.m0.t-regular a') as $e) :
    $array['Link'][] = $e->getAttribute('data-job-id')
    ;
endforeach;
foreach ($array['Job'] as $index => $code):

    $index . '<br>';

endforeach;

foreach (array_combine($array['Job'], $array['Link']) as $Job => $Link) {
    if (!$a->empty_filed($pag)):
        echo "  <a    href='#'   serlink='$hreff?jobId=$Link' class='list-group-item sfd'>$Job</a>";
    else:
        echo "  <a    href='#'   serlink='$hreff?page=$pag&jobId=$Link' class='list-group-item sfd'>$Job</a>";
    endif;
}




