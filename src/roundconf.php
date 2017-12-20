<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 16:37
 */
namespace progress\src;

class roundConf
{
    static function ini()
    {
        return <<<EOF
/* -------------------------------------
 * Mixin for progress-% class
 * ------------------------------------- */
.progress-0 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(90deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-0:before {
  transform: rotate(0deg) translate(0, -72.5px);
}
.progress-0 b:after {
  content: "0%";
}

.progress-1 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(93.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-1:before {
  transform: rotate(3.6deg) translate(0, -72.5px);
}
.progress-1 b:after {
  content: "1%";
}

.progress-2 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(97.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-2:before {
  transform: rotate(7.2deg) translate(0, -72.5px);
}
.progress-2 b:after {
  content: "2%";
}

.progress-3 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(100.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-3:before {
  transform: rotate(10.8deg) translate(0, -72.5px);
}
.progress-3 b:after {
  content: "3%";
}

.progress-4 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(104.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-4:before {
  transform: rotate(14.4deg) translate(0, -72.5px);
}
.progress-4 b:after {
  content: "4%";
}

.progress-5 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(108deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-5:before {
  transform: rotate(18deg) translate(0, -72.5px);
}
.progress-5 b:after {
  content: "5%";
}

.progress-6 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(111.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-6:before {
  transform: rotate(21.6deg) translate(0, -72.5px);
}
.progress-6 b:after {
  content: "6%";
}

.progress-7 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(115.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-7:before {
  transform: rotate(25.2deg) translate(0, -72.5px);
}
.progress-7 b:after {
  content: "7%";
}

.progress-8 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(118.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-8:before {
  transform: rotate(28.8deg) translate(0, -72.5px);
}
.progress-8 b:after {
  content: "8%";
}

.progress-9 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(122.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-9:before {
  transform: rotate(32.4deg) translate(0, -72.5px);
}
.progress-9 b:after {
  content: "9%";
}

.progress-10 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(126deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-10:before {
  transform: rotate(36deg) translate(0, -72.5px);
}
.progress-10 b:after {
  content: "10%";
}

.progress-11 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(129.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-11:before {
  transform: rotate(39.6deg) translate(0, -72.5px);
}
.progress-11 b:after {
  content: "11%";
}

.progress-12 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(133.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-12:before {
  transform: rotate(43.2deg) translate(0, -72.5px);
}
.progress-12 b:after {
  content: "12%";
}

.progress-13 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(136.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-13:before {
  transform: rotate(46.8deg) translate(0, -72.5px);
}
.progress-13 b:after {
  content: "13%";
}

.progress-14 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(140.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-14:before {
  transform: rotate(50.4deg) translate(0, -72.5px);
}
.progress-14 b:after {
  content: "14%";
}

.progress-15 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(144deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-15:before {
  transform: rotate(54deg) translate(0, -72.5px);
}
.progress-15 b:after {
  content: "15%";
}

.progress-16 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(147.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-16:before {
  transform: rotate(57.6deg) translate(0, -72.5px);
}
.progress-16 b:after {
  content: "16%";
}

.progress-17 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(151.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-17:before {
  transform: rotate(61.2deg) translate(0, -72.5px);
}
.progress-17 b:after {
  content: "17%";
}

.progress-18 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(154.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-18:before {
  transform: rotate(64.8deg) translate(0, -72.5px);
}
.progress-18 b:after {
  content: "18%";
}

.progress-19 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(158.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-19:before {
  transform: rotate(68.4deg) translate(0, -72.5px);
}
.progress-19 b:after {
  content: "19%";
}

.progress-20 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(162deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-20:before {
  transform: rotate(72deg) translate(0, -72.5px);
}
.progress-20 b:after {
  content: "20%";
}

.progress-21 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(165.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-21:before {
  transform: rotate(75.6deg) translate(0, -72.5px);
}
.progress-21 b:after {
  content: "21%";
}

.progress-22 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(169.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-22:before {
  transform: rotate(79.2deg) translate(0, -72.5px);
}
.progress-22 b:after {
  content: "22%";
}

.progress-23 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(172.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-23:before {
  transform: rotate(82.8deg) translate(0, -72.5px);
}
.progress-23 b:after {
  content: "23%";
}

.progress-24 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(176.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-24:before {
  transform: rotate(86.4deg) translate(0, -72.5px);
}
.progress-24 b:after {
  content: "24%";
}

.progress-25 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(180deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-25:before {
  transform: rotate(90deg) translate(0, -72.5px);
}
.progress-25 b:after {
  content: "25%";
}

.progress-26 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(183.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-26:before {
  transform: rotate(93.6deg) translate(0, -72.5px);
}
.progress-26 b:after {
  content: "26%";
}

.progress-27 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(187.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-27:before {
  transform: rotate(97.2deg) translate(0, -72.5px);
}
.progress-27 b:after {
  content: "27%";
}

.progress-28 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(190.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-28:before {
  transform: rotate(100.8deg) translate(0, -72.5px);
}
.progress-28 b:after {
  content: "28%";
}

.progress-29 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(194.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-29:before {
  transform: rotate(104.4deg) translate(0, -72.5px);
}
.progress-29 b:after {
  content: "29%";
}

.progress-30 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(198deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-30:before {
  transform: rotate(108deg) translate(0, -72.5px);
}
.progress-30 b:after {
  content: "30%";
}

.progress-31 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(201.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-31:before {
  transform: rotate(111.6deg) translate(0, -72.5px);
}
.progress-31 b:after {
  content: "31%";
}

.progress-32 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(205.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-32:before {
  transform: rotate(115.2deg) translate(0, -72.5px);
}
.progress-32 b:after {
  content: "32%";
}

.progress-33 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(208.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-33:before {
  transform: rotate(118.8deg) translate(0, -72.5px);
}
.progress-33 b:after {
  content: "33%";
}

.progress-34 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(212.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-34:before {
  transform: rotate(122.4deg) translate(0, -72.5px);
}
.progress-34 b:after {
  content: "34%";
}

.progress-35 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(216deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-35:before {
  transform: rotate(126deg) translate(0, -72.5px);
}
.progress-35 b:after {
  content: "35%";
}

.progress-36 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(219.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-36:before {
  transform: rotate(129.6deg) translate(0, -72.5px);
}
.progress-36 b:after {
  content: "36%";
}

.progress-37 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(223.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-37:before {
  transform: rotate(133.2deg) translate(0, -72.5px);
}
.progress-37 b:after {
  content: "37%";
}

.progress-38 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(226.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-38:before {
  transform: rotate(136.8deg) translate(0, -72.5px);
}
.progress-38 b:after {
  content: "38%";
}

.progress-39 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(230.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-39:before {
  transform: rotate(140.4deg) translate(0, -72.5px);
}
.progress-39 b:after {
  content: "39%";
}

.progress-40 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(234deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-40:before {
  transform: rotate(144deg) translate(0, -72.5px);
}
.progress-40 b:after {
  content: "40%";
}

.progress-41 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(237.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-41:before {
  transform: rotate(147.6deg) translate(0, -72.5px);
}
.progress-41 b:after {
  content: "41%";
}

.progress-42 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(241.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-42:before {
  transform: rotate(151.2deg) translate(0, -72.5px);
}
.progress-42 b:after {
  content: "42%";
}

.progress-43 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(244.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-43:before {
  transform: rotate(154.8deg) translate(0, -72.5px);
}
.progress-43 b:after {
  content: "43%";
}

.progress-44 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(248.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-44:before {
  transform: rotate(158.4deg) translate(0, -72.5px);
}
.progress-44 b:after {
  content: "44%";
}

.progress-45 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(252deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-45:before {
  transform: rotate(162deg) translate(0, -72.5px);
}
.progress-45 b:after {
  content: "45%";
}

.progress-46 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(255.6deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-46:before {
  transform: rotate(165.6deg) translate(0, -72.5px);
}
.progress-46 b:after {
  content: "46%";
}

.progress-47 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(259.2deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-47:before {
  transform: rotate(169.2deg) translate(0, -72.5px);
}
.progress-47 b:after {
  content: "47%";
}

.progress-48 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(262.8deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-48:before {
  transform: rotate(172.8deg) translate(0, -72.5px);
}
.progress-48 b:after {
  content: "48%";
}

.progress-49 {
  background-image: linear-gradient(90deg, #5d6771 50%, transparent 50%, transparent), linear-gradient(266.4deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-49:before {
  transform: rotate(176.4deg) translate(0, -72.5px);
}
.progress-49 b:after {
  content: "49%";
}

.progress-50 {
  background-image: linear-gradient(-90deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-50:before {
  transform: rotate(180deg) translate(0, -72.5px);
}
.progress-50 b:after {
  content: "50%";
}

.progress-51 {
  background-image: linear-gradient(-86.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-51:before {
  transform: rotate(183.6deg) translate(0, -72.5px);
}
.progress-51 b:after {
  content: "51%";
}

.progress-52 {
  background-image: linear-gradient(-82.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-52:before {
  transform: rotate(187.2deg) translate(0, -72.5px);
}
.progress-52 b:after {
  content: "52%";
}

.progress-53 {
  background-image: linear-gradient(-79.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-53:before {
  transform: rotate(190.8deg) translate(0, -72.5px);
}
.progress-53 b:after {
  content: "53%";
}

.progress-54 {
  background-image: linear-gradient(-75.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-54:before {
  transform: rotate(194.4deg) translate(0, -72.5px);
}
.progress-54 b:after {
  content: "54%";
}

.progress-55 {
  background-image: linear-gradient(-72deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-55:before {
  transform: rotate(198deg) translate(0, -72.5px);
}
.progress-55 b:after {
  content: "55%";
}

.progress-56 {
  background-image: linear-gradient(-68.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-56:before {
  transform: rotate(201.6deg) translate(0, -72.5px);
}
.progress-56 b:after {
  content: "56%";
}

.progress-57 {
  background-image: linear-gradient(-64.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-57:before {
  transform: rotate(205.2deg) translate(0, -72.5px);
}
.progress-57 b:after {
  content: "57%";
}

.progress-58 {
  background-image: linear-gradient(-61.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-58:before {
  transform: rotate(208.8deg) translate(0, -72.5px);
}
.progress-58 b:after {
  content: "58%";
}

.progress-59 {
  background-image: linear-gradient(-57.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-59:before {
  transform: rotate(212.4deg) translate(0, -72.5px);
}
.progress-59 b:after {
  content: "59%";
}

.progress-60 {
  background-image: linear-gradient(-54deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-60:before {
  transform: rotate(216deg) translate(0, -72.5px);
}
.progress-60 b:after {
  content: "60%";
}

.progress-61 {
  background-image: linear-gradient(-50.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-61:before {
  transform: rotate(219.6deg) translate(0, -72.5px);
}
.progress-61 b:after {
  content: "61%";
}

.progress-62 {
  background-image: linear-gradient(-46.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-62:before {
  transform: rotate(223.2deg) translate(0, -72.5px);
}
.progress-62 b:after {
  content: "62%";
}

.progress-63 {
  background-image: linear-gradient(-43.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-63:before {
  transform: rotate(226.8deg) translate(0, -72.5px);
}
.progress-63 b:after {
  content: "63%";
}

.progress-64 {
  background-image: linear-gradient(-39.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-64:before {
  transform: rotate(230.4deg) translate(0, -72.5px);
}
.progress-64 b:after {
  content: "64%";
}

.progress-65 {
  background-image: linear-gradient(-36deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-65:before {
  transform: rotate(234deg) translate(0, -72.5px);
}
.progress-65 b:after {
  content: "65%";
}

.progress-66 {
  background-image: linear-gradient(-32.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-66:before {
  transform: rotate(237.6deg) translate(0, -72.5px);
}
.progress-66 b:after {
  content: "66%";
}

.progress-67 {
  background-image: linear-gradient(-28.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-67:before {
  transform: rotate(241.2deg) translate(0, -72.5px);
}
.progress-67 b:after {
  content: "67%";
}

.progress-68 {
  background-image: linear-gradient(-25.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-68:before {
  transform: rotate(244.8deg) translate(0, -72.5px);
}
.progress-68 b:after {
  content: "68%";
}

.progress-69 {
  background-image: linear-gradient(-21.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-69:before {
  transform: rotate(248.4deg) translate(0, -72.5px);
}
.progress-69 b:after {
  content: "69%";
}

.progress-70 {
  background-image: linear-gradient(-18deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-70:before {
  transform: rotate(252deg) translate(0, -72.5px);
}
.progress-70 b:after {
  content: "70%";
}

.progress-71 {
  background-image: linear-gradient(-14.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-71:before {
  transform: rotate(255.6deg) translate(0, -72.5px);
}
.progress-71 b:after {
  content: "71%";
}

.progress-72 {
  background-image: linear-gradient(-10.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-72:before {
  transform: rotate(259.2deg) translate(0, -72.5px);
}
.progress-72 b:after {
  content: "72%";
}

.progress-73 {
  background-image: linear-gradient(-7.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-73:before {
  transform: rotate(262.8deg) translate(0, -72.5px);
}
.progress-73 b:after {
  content: "73%";
}

.progress-74 {
  background-image: linear-gradient(-3.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-74:before {
  transform: rotate(266.4deg) translate(0, -72.5px);
}
.progress-74 b:after {
  content: "74%";
}

.progress-75 {
  background-image: linear-gradient(0deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-75:before {
  transform: rotate(270deg) translate(0, -72.5px);
}
.progress-75 b:after {
  content: "75%";
}

.progress-76 {
  background-image: linear-gradient(3.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-76:before {
  transform: rotate(273.6deg) translate(0, -72.5px);
}
.progress-76 b:after {
  content: "76%";
}

.progress-77 {
  background-image: linear-gradient(7.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-77:before {
  transform: rotate(277.2deg) translate(0, -72.5px);
}
.progress-77 b:after {
  content: "77%";
}

.progress-78 {
  background-image: linear-gradient(10.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-78:before {
  transform: rotate(280.8deg) translate(0, -72.5px);
}
.progress-78 b:after {
  content: "78%";
}

.progress-79 {
  background-image: linear-gradient(14.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-79:before {
  transform: rotate(284.4deg) translate(0, -72.5px);
}
.progress-79 b:after {
  content: "79%";
}

.progress-80 {
  background-image: linear-gradient(18deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-80:before {
  transform: rotate(288deg) translate(0, -72.5px);
}
.progress-80 b:after {
  content: "80%";
}

.progress-81 {
  background-image: linear-gradient(21.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-81:before {
  transform: rotate(291.6deg) translate(0, -72.5px);
}
.progress-81 b:after {
  content: "81%";
}

.progress-82 {
  background-image: linear-gradient(25.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-82:before {
  transform: rotate(295.2deg) translate(0, -72.5px);
}
.progress-82 b:after {
  content: "82%";
}

.progress-83 {
  background-image: linear-gradient(28.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-83:before {
  transform: rotate(298.8deg) translate(0, -72.5px);
}
.progress-83 b:after {
  content: "83%";
}

.progress-84 {
  background-image: linear-gradient(32.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-84:before {
  transform: rotate(302.4deg) translate(0, -72.5px);
}
.progress-84 b:after {
  content: "84%";
}

.progress-85 {
  background-image: linear-gradient(36deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-85:before {
  transform: rotate(306deg) translate(0, -72.5px);
}
.progress-85 b:after {
  content: "85%";
}

.progress-86 {
  background-image: linear-gradient(39.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-86:before {
  transform: rotate(309.6deg) translate(0, -72.5px);
}
.progress-86 b:after {
  content: "86%";
}

.progress-87 {
  background-image: linear-gradient(43.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-87:before {
  transform: rotate(313.2deg) translate(0, -72.5px);
}
.progress-87 b:after {
  content: "87%";
}

.progress-88 {
  background-image: linear-gradient(46.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-88:before {
  transform: rotate(316.8deg) translate(0, -72.5px);
}
.progress-88 b:after {
  content: "88%";
}

.progress-89 {
  background-image: linear-gradient(50.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-89:before {
  transform: rotate(320.4deg) translate(0, -72.5px);
}
.progress-89 b:after {
  content: "89%";
}

.progress-90 {
  background-image: linear-gradient(54deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-90:before {
  transform: rotate(324deg) translate(0, -72.5px);
}
.progress-90 b:after {
  content: "90%";
}

.progress-91 {
  background-image: linear-gradient(57.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-91:before {
  transform: rotate(327.6deg) translate(0, -72.5px);
}
.progress-91 b:after {
  content: "91%";
}

.progress-92 {
  background-image: linear-gradient(61.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-92:before {
  transform: rotate(331.2deg) translate(0, -72.5px);
}
.progress-92 b:after {
  content: "92%";
}

.progress-93 {
  background-image: linear-gradient(64.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-93:before {
  transform: rotate(334.8deg) translate(0, -72.5px);
}
.progress-93 b:after {
  content: "93%";
}

.progress-94 {
  background-image: linear-gradient(68.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-94:before {
  transform: rotate(338.4deg) translate(0, -72.5px);
}
.progress-94 b:after {
  content: "94%";
}

.progress-95 {
  background-image: linear-gradient(72deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-95:before {
  transform: rotate(342deg) translate(0, -72.5px);
}
.progress-95 b:after {
  content: "95%";
}

.progress-96 {
  background-image: linear-gradient(75.6deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-96:before {
  transform: rotate(345.6deg) translate(0, -72.5px);
}
.progress-96 b:after {
  content: "96%";
}

.progress-97 {
  background-image: linear-gradient(79.2deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-97:before {
  transform: rotate(349.2deg) translate(0, -72.5px);
}
.progress-97 b:after {
  content: "97%";
}

.progress-98 {
  background-image: linear-gradient(82.8deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-98:before {
  transform: rotate(352.8deg) translate(0, -72.5px);
}
.progress-98 b:after {
  content: "98%";
}

.progress-99 {
  background-image: linear-gradient(86.4deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-99:before {
  transform: rotate(356.4deg) translate(0, -72.5px);
}
.progress-99 b:after {
  content: "99%";
}

.progress-100 {
  background-image: linear-gradient(90deg, #fffde8 50%, transparent 50%, transparent), linear-gradient(270deg, #fffde8 50%, #5d6771 50%, #5d6771);
}
.progress-100:before {
  transform: rotate(360deg) translate(0, -72.5px);
}
.progress-100 b:after {
  content: "100%";
}
EOF;

    }    
}