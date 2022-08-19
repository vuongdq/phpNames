<?php
include ("simple_html_dom.php");
$baseUrl = "https://www.names.org/baby-names-by-letter/a/";
$domain = "https://www.names.org";

$html = file_get_html($baseUrl);
$pageNums= $html->find("ul.pagination.pagination-lg",0)->find("li");
foreach ($pageNums as $pagenum){
    $pageResultNum = $domain.$pagenum->find("a",0)->href;
    echo "-----------------".$pageResultNum."........";
    echo "<br />";
    $html2 = file_get_html($pageResultNum);
    $nameLink = $html2->find("table.table",0)->find("tbody",0)->find("tr");
    foreach ($nameLink as $link){
        echo $aboutLink = $domain.$link->find("a",0)->href;
        echo "<br />";
    }

}

