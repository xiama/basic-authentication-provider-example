<?php

header('Content-Type: application/json');
$user = $_SERVER['REMOTE_USER'];
$n=strpos($user,'@');
if ($n) $str=substr($user,0,$n);
$data = array( 'sub' => $str );
echo json_encode($data);

?>
