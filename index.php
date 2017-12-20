<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 12:04
 */

set_time_limit(0);
require_once "./src/progress.php";
use progress\src\Loading;


$total = 77;//任务总数
$LOAD = new Loading(Loading::PROGRESS_TYPE_ROUND);
$LOAD->setTotal($total);//设置任务数
$LOAD->init();//初始化
$LOAD->setSleep(1);//设置任务间隔时间
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}
unset($LOAD);