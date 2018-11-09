# progress
php长时间循环任务进度展示


`进度条已经引入三种类型进度条，可依次展示多个循环任务`


    #可选配置参数

    #Loading::LOAD_TYPE_STRAIGHT 条形进度条
![条形进度条](https://github.com/ydtg1993/progress/blob/master/straight.png)
    
    #Loading::LOAD_TYPE_ROUND 圆形进度条
    ![圆形进度条](https://github.com/ydtg1993/progress/blob/master/round.png)
    
    #Loading::LOAD_TYPE_STRIPED 3D进度条
    ![3D进度条](https://github.com/ydtg1993/progress/blob/master/3d.png)

    $LOAD = new Loading(Loading::LOAD_TYPE_ROUND);

    #$LOAD->setStraightLength(int); 注：对于条进度条Loading::LOAD_TYPE_STRAIGHT长度设置
    #$LOAD->setStripedType(int); 注：对于3D进度条Loading::LOAD_TYPE_STRIPED类型设置 (1~9整数)
    
    #$LOAD->setSleep(int);注：设置任务间隔时间

    $total = 77;//任务总数
    
    $LOAD->setTotal($total);//设置任务数

    $LOAD->init();//初始化进度条

    //你的循环任务
    for ($i=0;$i<$total;$i++){
        //do 处理完成一条任务，进度更新
    
        $LOAD->progress();
    }


