<?php
$front=$_GET['front'];
$back=$_GET['back'];
$result=$front+$back;
$response['status']="true";
$response['result']=$result;
$response['formula']=$front.'+'.$back;
print json_encode($response,  JSON_UNESCAPED_UNICODE);
