# progress
php任务进度条

set_time_limit(0);

require_once "./src/progress.php";

use progress\src\Loading;


$total = 77;//任务总数

//Loading::PROGRESS_TYPE_STRAIGHT条形进度条

//Loading::PROGRESS_TYPE_ROUND圆形进度条

$LOAD = new Loading(Loading::PROGRESS_TYPE_ROUND);

$LOAD->setTotal($total);//设置任务数

$LOAD->init();//初始化

$LOAD->setSleep(1);//设置任务间隔时间

//你的循环任务
for ($i=0;$i<$total;$i++)
{
    //do 处理完成一条任务，进度更新
    $LOAD->progress();
}



