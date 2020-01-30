<?php

include('../../../../Classes/simple_html_dom.php');
$hreff = $_POST['hreff'];
// get DOM from URL or file
$html = file_get_html($hreff);
// find all link
// find all link
$array = array();
foreach ($html->find('#formToggleSheet') as $a) {
    $filter = $a->getAttribute('data-job-id'). "<br>";
       echo $a->outertext . '<br>';
}
