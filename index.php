<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 12:04
 */
set_time_limit(0);
include_once "progress.class.php";

$total = 100;//任务总数
$LOAD = new Loading($total);
$LOAD->setSleep(1);//设置任务间隔时间
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}
unset($LOAD);