<?php
$requestUri = $_SERVER['QUERY_STRING'];
$filename = 'https://c.y.qq.com/soso/fcgi-bin/client_search_cp?'.$requestUri;
$opt = array ('http'=>array('header'=>"Referer: https://y.qq.com/n/yqq/song"));
$result = file_get_contents($filename,FALSE,stream_context_create($opt));
echo $result;
?>