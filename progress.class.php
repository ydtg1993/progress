<?php
/**
 * 进度条
 * Class Loading
 * @package helper
 */
class Loading
{
    const PROGRESS = 350;//进度条总长度

    private $total;//总任务数
    private $counter = 0;//计数器
    private $ratio;//单任务长度
    private $sleep = 0.001;//睡眠时间

    /**
     * Loading constructor.
     * @param $total
     */
    function __construct($total)
    {
        $this->total = $total;
        $this->ratio = self::PROGRESS / $total;
        $this->init();
    }

    /**
     * 初始化进度条
     */
    public function init()
    {
        ignore_user_abort(true);    //设置断开连接继续执行
        header('X-Accel-Buffering: no');    //关闭buffer
        ob_start(); //打开输出缓冲控制

        $PROGRESS = self::PROGRESS;

        for ($i = 0; $i < 4; $i++) {
            echo null;
            @ob_get_clean();
            flush();
        }
        echo <<<EOF
<body style="background-color: #f5f7f9;color: #6c6c6c;">
<p id="pro" style="margin-top: 65px;text-align: center;"></P>
<div class="container" style="left: 50%; position: absolute;top: 100px;transform: translate(-50%, -50%);width:{$PROGRESS}px;">
	<div class="progress" style=" background-color: #e5e9eb;height: 0.25em;position: relative;width:{$PROGRESS}px;">
		<div id="jindu" class="progress-bar" style="
  background-image: linear-gradient(to right, #4cd964, #5ac8fa, #007aff, #34aadc, #5856d6, #ff2d55);
  background-size: 24em 0.25em;
  height: 100%;
  position: relative;">
			<div class="progress-shadow" style="background-image: linear-gradient(to bottom, #eaecee, transparent);
  height: 4em;
  position: absolute;
  top: 100%;
  transform: skew(45deg);
  transform-origin: 0 0;
  width: 100%;"></div>
		</div>
	</div>
</div>
</body>
<script> 
function progress(progress,proportion){
  document.getElementById("jindu").style.width= progress + 'px';
  document.getElementById("pro").innerHTML = proportion + '%';
}
</script>
EOF;

        @ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
        flush();   //刷新缓冲区的内容，输出

    }

    /**
     * 显示进度
     */
    public function progress()
    {
        if ($this->counter <= $this->total) {
            $this->counter = $this->counter + 1;
        } else {
            return;
        }
        sleep($this->sleep);
        $current_progress = $this->counter * $this->ratio;
        $proportion = floor($this->counter / $this->total *100);

        echo <<<EOF
<script> 
    progress("{$current_progress}","{$proportion}")
</script>
EOF;
        @ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
        flush();   //刷新缓冲区的内容，输出
    }

    /**
     * @param $time
     */
    public function setSleep($time)
    {
        $this->sleep = $time;
    }


    function __destruct() {
        exit(0);
    }

}
