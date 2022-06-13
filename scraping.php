<?php



include("simple_html_dom.php");



$html = file_get_html('https://www.worldometers.info/coronavirus/');

echo $html->find('.maincounter-number span',0)->plaintext;




?>
