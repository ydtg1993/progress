<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 12:04
 */
set_time_limit(0);
require_once "./src/Loading.php";
use progress\src\Loading;


$total = 15;//任务总数

//设置
$LOAD = new Loading(Loading::LOAD_TYPE_ROUND);
$LOAD->setTotal($total);//设置任务数
$LOAD->setSleep(1);//设置任务间隔时间

//第一个进度任务
$LOAD->init();//初始化
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}

//第二个进度任务
$LOAD->setTotal($total);//设置任务数
$LOAD->init();//初始化
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}
unset($LOAD);

