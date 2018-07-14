<?php
$link = "http://www.tv8.com.tr/canli-yayin";
$veri = file_get_contents($link);
preg_match('#:  "(.*?)"#',$veri,$veritemp);
// print $veritemp[1]
header("Location: $veritemp[1]");
?>
