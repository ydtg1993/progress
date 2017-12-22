# progress
php任务进度条



$total = 77;//任务总数

//Loading::LOAD_TYPE_STRAIGHT 条形进度条

//Loading::LOAD_TYPE_ROUND 圆形进度条

//Loading::LOAD_TYPE_STRIPED 3D进度条

$LOAD = new Loading(Loading::LOAD_TYPE_ROUND);


/**
 *  Loading::LOAD_TYPE_STRAIGHT 条形进度条
 *  $LOAD->setStraightLength(int);//对于条进度条长度设置
 */


/**
 *  Loading::LOAD_TYPE_STRIPED 3D进度条
 *  $LOAD->setStripedType(int);//对于3D进度条类型设置 1~9
 */


$LOAD->setTotal($total);//设置任务数

$LOAD->setSleep(1);//设置任务间隔时间

$LOAD->init();//初始化进度条

//你的循环任务

for ($i=0;$i<$total;$i++)

{

    //do 处理完成一条任务，进度更新

    $LOAD->progress();

}



