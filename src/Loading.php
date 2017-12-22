<?php
/**
 *
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 12:04
 *
 * Class Loading
 */
namespace progress\src;

class Loading
{
    /**
     * @var
     */
    static public $loading;
    
    /**
     * 总任务数
     * @var int
     */
    private $total;

    /**
     * 计数器
     * @var int
     */
    private $counter = 0;

    /**
     * 单任务长度
     * @var float
     */
    private $ratio;

    /**
     * 任务间隔时间
     * @var int
     */
    private $sleep = 0;

    /**
     * @var
     */
    private $type;

    /**
     * 条形进度条总长度
     * @var int
     */
    static public $progress_long = 350;

    /**
     * 3D进度条类型
     * @var string
     */
    static public $progress_striped_type = false;

    static public $STRIPED_CONF = array(
        1 => " navy ruler",
        2 => " orange ruler",
        3 => " cyan ruler",
        4 => " navy ruler-2",
        5 => " orange ruler-2",
        6 => " cyan ruler-2",
        7 => " navy ruler-3",
        8 => " orange ruler-3",
        9 => " cyan ruler-3",
    );

    //进度条类型
    const LOAD_TYPE_STRAIGHT = 0;
    const LOAD_TYPE_ROUND = 1;
    const LOAD_TYPE_STRIPED = 2;

    /**
     * Loading constructor.
     * 进度条类型
     * @param int $type
     */
    function __construct($type = self::LOAD_TYPE_STRAIGHT)
    {
        require_once "progressType.php";
        ignore_user_abort(true);    //设置断开连接继续执行
        header('X-Accel-Buffering: no');    //关闭buffer
        ob_start(); //打开输出缓冲控制
        $this->type = $type;
    }

    /**
     * 初始化进度条
     */
    public function init()
    {
        if(!$this->total){
            throw new \Exception("task parameter total Must be set up");
        }
        self::$loading = sprintf("progress_bar_%s",time());
        $this->counter = 0;
        $this->ratio = self::$progress_long / $this->total;

        $progress_bar = progressType::getProgress($this->type);
        for ($i = 0; $i < 4; $i++) {
            echo null;
            @ob_get_clean();
            flush();
        }

        echo $progress_bar;

        @ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
        flush();   //刷新缓冲区的内容，输出
    }

    /**
     * 显示进度
     */
    public function progress()
    {
        if ($this->counter < $this->total) {
            $this->counter = $this->counter + 1;
        } else {
            //结束
            echo progressType::getCurrentProgress(1);
            return;
        }
        sleep($this->sleep);
        $proportion = number_format($this->counter / $this->total,2);

        echo progressType::getCurrentProgress($proportion);
        @ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
        flush();   //刷新缓冲区的内容，输出
    }

    /**
     * 设置任务间隔时间
     * @param $time
     */
    public function setSleep($time)
    {
        $this->sleep = $time;
    }

    /**
     * 设置总任务数
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * 设置条形进度条总长度
     * @param $long
     */
    public function setStraightLength($long)
    {
        self::$progress_long = $long;
    }

    /**
     * 设置3d进度条类型
     * @param int $type
     */
    public function setStripedType($type)
    {
        self::$progress_striped_type = self::$STRIPED_CONF[$type];
    }
}
