# progress
php任务进度条



$total = 77;//任务总数

//Loading::PROGRESS_TYPE_STRAIGHT 条形进度条
//Loading::PROGRESS_TYPE_ROUND 圆形进度条
//Loading::PROGRESS_TYPE_STRIPED 3D进度条


$LOAD = new Loading(Loading::PROGRESS_TYPE_ROUND);

{
Loading::PROGRESS_TYPE_STRAIGHT 条形进度条
$LOAD->setProgressLength(int);//对于条进度条长度设置
}

{
Loading::PROGRESS_TYPE_STRIPED 3D进度条
$LOAD->setStripedType(int);//对于3D进度条类型设置 1~9
}

$LOAD->setTotal($total);//设置任务数

$LOAD->init();//初始化

$LOAD->setSleep(1);//设置任务间隔时间

//你的循环任务
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}



