<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 14:21
 */
namespace progress\src;

use progress\src\Loading;
use progress\src\roundConf;

require_once "roundConf.php";

class progressType
{
    /**
     * @param $type
     * @return string
     */
    static function getProgress($type)
    {
        switch ($type){
            case Loading::PROGRESS_TYPE_STRAIGHT:
                return self::straightProgress();
                break;
            case Loading::PROGRESS_TYPE_ROUND:
                return self::roundProgress();
                break;
        }
    }

    /**
     * @param $proportion
     * @return string
     */
    static function getCurrentProgress($proportion)
    {
        return <<<EOF
<script> 
    progress("{$proportion}")
</script>
EOF;
    }

    static function straightProgress()
    {
        $progress_long = Loading::$progress_long;
        return <<<EOF
<body style="background-color: #f5f7f9;color: #6c6c6c;">
<p id="pro" style="margin-top: 65px;text-align: center;"></P>
<div class="container" style="left: 50%; position: absolute;top: 100px;transform: translate(-50%, -50%);width:{$progress_long}px;">
	<div class="progress" style=" background-color: #e5e9eb;height: 0.25em;position: relative;width:{$progress_long}px;">
		<div id="progress_bar" class="progress-bar" style="
  background-image: linear-gradient(to right, #4cd964, #5ac8fa, #007aff, #34aadc, #5856d6, #ff2d55);
  background-size: 24em 0.25em;
  height: 100%;
  position: relative;
  width:0px;">
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
function progress(proportion){
  var total_long = {$progress_long};
  if(proportion != 1){
   var progress = total_long * proportion;
   document.getElementById("progress_bar").style.width= progress + 'px';
   document.getElementById("pro").innerHTML = Math.floor(proportion * 100)+ '%';
  }else{
     document.getElementById("progress_bar").style.width= total_long + 'px';
     document.getElementById("pro").innerHTML = '100%';
  }
}
</script>
EOF;
    }
    
    static function roundProgress()
    {
        $ini = roundConf::ini();
        return <<<EOF
<style>
body {
  background-color: #2f3439;
  font-family: 'Roboto', sans-serif;
  text-align: center;
}
/* -------------------------------------
 * Bar container
 * ------------------------------------- */
.progress-radial {
  display: inline-block;
  margin: 15px;
  position: relative;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 10px solid #5d6771;
  background-color: #fffde8;
  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
}
.progress-radial:after, .progress-radial:before {
  content: '';
  width: 35px;
  height: 35px;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  margin-left: -17.5px;
  margin-top: -17.5px;
  background: #fffde8;
  position: absolute;
  z-index: 999;
  box-shadow: 10px 0 10px rgba(0, 0, 0, 0.2);
}
.progress-radial:after {
  z-index: 998;
  box-shadow: none;
  transform: translate(0, -72.5px);
}
.progress-radial b:after {
  color: #fffde8;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  position: absolute;
  font-weight: 900;
  left: 50%;
  top: 50%;
  width: 50%;
  height: 50%;
  background-color: #2f3439;
  border-radius: 50%;
  margin-left: -25%;
  margin-top: -25%;
  text-align: center;
  line-height: 90px;
  font-size: 30px;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3) inset, 0 0 0 10px #5d6771;
}
/* -------------------------------------
 * Mixin for progress-% class
 * ------------------------------------- */
 {$ini}
 </style>
 
 <body style="background-color: #f5f7f9;color: #6c6c6c;">
<div class="progress-radial" id="progress_bar">
<b></b>
</div>
</body>
<script> 
function progress(proportion){
      var ratio = Math.ceil(proportion * 100);
      var dom = document.getElementById("progress_bar");
     
      dom.className = "progress-radial progress-"+ratio
}

</script>
EOF;
    }
}