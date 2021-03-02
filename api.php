<?php
$front=$_GET['front'];
$back=$_GET['back'];
$result=$front+$back;
$response['result']=$result;
$response['status']="true";
$response['formula']=$front.'+'.$back;
print json_encode($response,  JSON_UNESCAPED_UNICODE);
