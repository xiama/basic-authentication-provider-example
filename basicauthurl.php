<?php

header('Content-Type: application/json');
$user = $_SERVER['REMOTE_USER'];
$n=strpos($user,'@');
if ($n) {
  $str=strtolower(substr($user,0,$n));
}
else {
  $str=strtolower($user)
}
$data = array( 'sub' => $str );
echo json_encode($data);

?>
