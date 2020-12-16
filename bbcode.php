<?php
function bbcode($t){
// barre horizontale
$t=str_replace("[/]", "<hr width=\"100%\" size=\"1\" />", $t);
$t=str_replace("[hr]", "<hr width=\"100%\" size=\"1\" />", $t);
// gras
$t=str_replace("[b]", "<strong>", $t);
$t=str_replace("[/b]", "</strong>", $t);
// italique
$t=str_replace("[i]", "<em>", $t);
$t=str_replace("[/i]", "</em>", $t);
// soulignement
$t=str_replace("[u]", "<u>", $t);
$t=str_replace("[/u]", "</u>", $t);
// Liste
$t=str_replace("[list]", "<li>", $t);
$t=str_replace("[/list]", "</li>", $t);
// Nouvelle ligne
$t=str_replace("[rl]", "<br>", $t);
// alignement centré
$t=str_replace("[center]", "<div style=\"text-align: center\">", $t);
$t=str_replace("[/center]", "</div>", $t);
// alignement à droite
$t=str_replace("[right]", "<div style=\"text-align: right\">", $t);
$t=str_replace("[/right]", "</div>", $t);
// alignement justifié
$t=str_replace("[justify]", "<div style=\"text-align: justify\">", $t);
$t=str_replace("[/justify]", "</div>", $t);
return $t;
} 
?>