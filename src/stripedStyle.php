<?php
/**
 * Created by PhpStorm.
 * User: hikki
 * Date: 2017/12/20
 * Time: 16:37
 */
namespace progress\src;

class stripedConf
{
    static function ini()
    {
        return <<<EOF
<style>        
/* line 22, ../scss/custom-bars.scss */
.flexy-grid {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 4em 0;
}

/* line 29, ../scss/custom-bars.scss */
.flexy-grid .flexy-column {
    display: flex;
    flex: 1;
    justify-content: center;
    margin-bottom: 3em;
}

/* line 35, ../scss/custom-bars.scss */
.flexy-grid .flexy-column .flexy-item {
    flex: 1;
}

/* line 40, ../scss/custom-bars.scss */
.flexy-grid:nth-of-type(odd) {
    background-color: #D8DBE4;
}

/* line 43, ../scss/custom-bars.scss */
.flexy-grid input[type='checkbox'] {
    display: none;
}

/* line 48, ../scss/custom-bars.scss */
.value-label {
    position: relative;
    display: inline-block;
    margin: 4em 0 2.5em 0;
    font-size: 1em;
    font-weight: bold;
    line-height: 1em;
    padding: 1em;
    color: #fefefe;
    background-color: rgba(255, 105, 0, 0.6);
    border: 1px solid rgba(153, 153, 153, 0.2);
    border-radius: 0.25em;
    box-shadow: 0 0.1em 0.25em rgba(153, 153, 153, 0.6), inset 0 0.15em 0.05em rgba(254, 254, 254, 0.2);
}

/* line 61, ../scss/custom-bars.scss */
.value-label:hover {
    cursor: pointer;
}

/* line 66, ../scss/custom-bars.scss */
.fa,
.fa:before {
    width: 1em;
    height: 1em;
    line-height: 1em;
    text-align: center;
}

/* line 74, ../scss/custom-bars.scss */
.fa {
    margin: 0 .1em;
    transition: transform 0.25s ease-in-out;
    transform-origin: 50% 55%;
}

/* line 80, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .value-label {
    background: #444444;
    box-shadow: none;
}

/* line 86, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .flexy-column .bar[aria-valuenow] .percentage:before {
    width: 90%;
}

/* line 93, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .flexy-column .bar[aria-valuenow].heat-gradient .tooltip {
    background-color: #ec0071;
    border-bottom: 1px solid #d30065;
}

/* line 97, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .flexy-column .bar[aria-valuenow].heat-gradient .tooltip:after {
    border-bottom-color: #ec0071;
}

/* line 102, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .flexy-column .bar[aria-valuenow] .tooltip {
    left: 90%;
}

/* line 104, ../scss/custom-bars.scss */
input[type='checkbox']:checked ~ .flexy-column .bar[aria-valuenow] .tooltip:before {
    content: '90%';
}

/* line 110, ../scss/custom-bars.scss */
.dots-pattern .percentage:before {
    background: radial-gradient(rgba(254, 254, 254, 0.5) 10%, rgba(0, 0, 0, 0) 5%) 0 0, radial-gradient(rgba(254, 254, 254, 0.5) 10%, rgba(0, 0, 0, 0) 5%) 0.5em 0.5em;
    background-size: 1em 1em;
}

/* line 120, ../scss/custom-bars.scss */
.bar.heat-gradient .face-position.left {
    background-color: rgba(241, 196, 15, 0.8);
}

/* line 124, ../scss/custom-bars.scss */
.bar.heat-gradient .percentage:before {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ec545b+0,ec5799+100 */
    background-color: rgba(241, 196, 15, 0.8);
    /* Old browsers */
    background: -moz-linear-gradient(left, rgba(241, 196, 15, 0.8) 0%, rgba(236, 0, 113, 0.6) 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(241, 196, 15, 0.8)), color-stop(100%, rgba(236, 0, 113, 0.6)));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left, rgba(241, 196, 15, 0.8) 0%, rgba(236, 0, 113, 0.6) 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left, rgba(241, 196, 15, 0.8) 0%, rgba(236, 0, 113, 0.6) 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(left, rgba(241, 196, 15, 0.8) 0%, rgba(236, 0, 113, 0.6) 100%);
    /* IE10+ */
    background: linear-gradient(to right, rgba(241, 196, 15, 0.8) 0%, rgba(236, 0, 113, 0.6) 100%);
    /* IE6-9 */
    background-size: 16em;
}

/* line 136, ../scss/custom-bars.scss */
.bar.heat-gradient .volume-lights.shine:before {
    box-shadow: -2em 1.6em 3em -1em rgba(241, 196, 15, 0.3), 2em 1.6em 3em -1em rgba(236, 0, 113, 0.3);
}

/* line 140, ../scss/custom-bars.scss */
.bar.heat-gradient[valuenow="100"] .face-position.right {
    background-color: rgba(236, 0, 113, 0.6);
}

/* line 146, ../scss/custom-bars.scss */
.bar.ruler .percentage:before {
    background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, rgba(0, 0, 0, 0) 1px);
    background-size: 1em 1em, 1.6em 2em, .8em 2em;
}

/* line 153, ../scss/custom-bars.scss */
.bar.ruler-2 .percentage:before {
    background-image: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.14) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.18) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.22) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.26) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.3) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.34) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.38) 0.8em, rgba(0, 0, 0, 0) 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.42) 0.8em, rgba(0, 0, 0, 0) 1px);
    background-size: 16em 1em;
    background-position: 1.6em 0, 3.2em 0, 4.8em 0, 6.4em 0, 8em 0, 9.6em 0, 11.2em 0, 12.8em 0, 14.4em 0;
}

/* line 167, ../scss/custom-bars.scss */
.bar.ruler-3 .percentage:before {
    background-image: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0.8em, rgba(0, 0, 0, 0) 1px);
    background-size: 1.6em 2em;
}

/* line 172, ../scss/custom-bars.scss */
.bar.move .bar-face.face-position.floor,
.bar.rotate .bar-face.face-position.floor {
    transition: all 0.5s ease-in-out;
}

/* line 176, ../scss/custom-bars.scss */
.bar.move:hover {
    transform: rotateX(60deg) translateZ(0.1em);
}

/* line 178, ../scss/custom-bars.scss */
.bar.move:hover .bar-face.face-position.floor.volume-lights {
    box-shadow: 0 -0.1em 1em rgba(0, 0, 0, 0.15), 0 0.35em 0.2em -8px rgba(0, 0, 0, 0.15), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}

/* line 185, ../scss/custom-bars.scss */
.bar.rotate.hover,
.bar.rotate:hover {
    transform: rotateX(60deg) rotate(90deg);
}

/* line 188, ../scss/custom-bars.scss */
.bar.rotate.hover .bar-face.face-position.floor.volume-lights,
.bar.rotate:hover .bar-face.face-position.floor.volume-lights {
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.3), 0.2em 0 0.1em -5px rgba(0, 0, 0, 0.3), -0.5em 0 1.75em rgba(254, 254, 254, 0.6);
}

/* line 193, ../scss/custom-bars.scss */
.bar.rotate.hover .bar-face.face-position.shine:before,
.bar.rotate:hover .bar-face.face-position.shine:before {
    box-shadow: none;
}

/* line 199, ../scss/custom-bars.scss */
.tooltip {
    font-size: .65em;
    font-weight: bold;
    margin: 1.85em 0 0 -.5em;
    display: inline-block;
    position: absolute;
    line-height: 1em;
    height: 1em;
    width: 1em;
    left: 0;
    background-color: #ff6db3;
    color: #fefefe;
    border-bottom: 1px solid #ff53a5;
    box-shadow: 0 0.05em 0.1em -0.02em rgba(0, 0, 0, 0.4), 0 0.1em 0.6em rgba(0, 0, 0, 0.3);
    transition: all 0.5s ease-out;
}

/* line 217, ../scss/custom-bars.scss */
.tooltip:after, .tooltip:before {
    display: inline-block;
    font-size: .25em;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
}

/* line 228, ../scss/custom-bars.scss */
.tooltip:after {
    content: '';
    height: 0;
    width: 0;
    margin: -.75em 0 0 1em;
    border: 1em solid transparent;
    border-bottom-color: #ff6db3;
    border-top-width: 0;
    transition: all 0.5s ease-out;
}

/* line 239, ../scss/custom-bars.scss */
.tooltip:before {
    height: 100%;
    text-align: center;
}

/* line 244, ../scss/custom-bars.scss */
.tooltip.pos-2 {
    box-shadow: none;
    margin-top: -.6em;
    transform: rotateX(-90deg) translateY(-0.5em);
    transform-origin: 50% 100%;
}

/* line 250, ../scss/custom-bars.scss */
.tooltip.pos-2:after {
    margin: 3.75em 0 0 1em;
    border-bottom-color: inherit;
    border-bottom-width: 0;
    border-top-width: 1em;
    border-top-color: #ff6db3;
}

/* line 258, ../scss/custom-bars.scss */
.tooltip.pos-2 .shadow {
    display: inline-block;
    width: 20%;
    height: .02em;
    background-color: transparent;
    position: absolute;
    left: 40%;
    bottom: 0;
    box-shadow: 0 0.7em 0.05em black, 0 0.7em 0.3em black;
}

/* line 271, ../scss/custom-bars.scss */
.tooltip.white {
    background-color: #fefefe;
    border-bottom: 1px solid #e5e5e5;
    color: #444444;
    box-shadow: 0 0.08em 0.1em 0em rgba(0, 0, 0, 0.2), 0 0.1em 1.6em rgba(0, 0, 0, 0.2);
}

/* line 276, ../scss/custom-bars.scss */
.tooltip.white:after {
    border-bottom-color: #fefefe;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='1'] .tooltip {
    left: 1%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='1'] .tooltip:before {
    content: "1%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='1'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0c20f;
    border-bottom: 1px solid #d8af0e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='1'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0c20f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='2'] .tooltip {
    left: 2%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='2'] .tooltip:before {
    content: "2%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='2'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0c010;
    border-bottom: 1px solid #d9ad0e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='2'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0c010;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='3'] .tooltip {
    left: 3%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='3'] .tooltip:before {
    content: "3%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='3'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0be11;
    border-bottom: 1px solid #daac0e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='3'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0be11;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='4'] .tooltip {
    left: 4%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='4'] .tooltip:before {
    content: "4%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='4'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0bc12;
    border-bottom: 1px solid #dbab0e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='4'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0bc12;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='5'] .tooltip {
    left: 5%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='5'] .tooltip:before {
    content: "5%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='5'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0ba13;
    border-bottom: 1px solid #dca90e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='5'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0ba13;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='6'] .tooltip {
    left: 6%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='6'] .tooltip:before {
    content: "6%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='6'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0b814;
    border-bottom: 1px solid #dca80e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='6'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0b814;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='7'] .tooltip {
    left: 7%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='7'] .tooltip:before {
    content: "7%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='7'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0b615;
    border-bottom: 1px solid #dda60e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='7'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0b615;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='8'] .tooltip {
    left: 8%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='8'] .tooltip:before {
    content: "8%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='8'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0b416;
    border-bottom: 1px solid #dea50e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='8'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0b416;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='9'] .tooltip {
    left: 9%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='9'] .tooltip:before {
    content: "9%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='9'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0b217;
    border-bottom: 1px solid #dfa30e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='9'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0b217;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='10'] .tooltip {
    left: 10%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='10'] .tooltip:before {
    content: "10%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='10'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0b018;
    border-bottom: 1px solid #e0a20f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='10'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0b018;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='11'] .tooltip {
    left: 11%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='11'] .tooltip:before {
    content: "11%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='11'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0ae19;
    border-bottom: 1px solid #e1a00f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='11'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0ae19;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='12'] .tooltip {
    left: 12%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='12'] .tooltip:before {
    content: "12%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='12'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0ac1a;
    border-bottom: 1px solid #e29f0f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='12'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0ac1a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='13'] .tooltip {
    left: 13%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='13'] .tooltip:before {
    content: "13%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='13'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0aa1b;
    border-bottom: 1px solid #e39d0f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='13'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0aa1b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='14'] .tooltip {
    left: 14%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='14'] .tooltip:before {
    content: "14%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='14'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0a81c;
    border-bottom: 1px solid #e39b0f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='14'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0a81c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='15'] .tooltip {
    left: 15%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='15'] .tooltip:before {
    content: "15%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='15'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0a61d;
    border-bottom: 1px solid #e49a0f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='15'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0a61d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='16'] .tooltip {
    left: 16%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='16'] .tooltip:before {
    content: "16%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='16'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0a41e;
    border-bottom: 1px solid #e5980f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='16'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0a41e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='17'] .tooltip {
    left: 17%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='17'] .tooltip:before {
    content: "17%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='17'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0a21f;
    border-bottom: 1px solid #e6960f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='17'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0a21f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='18'] .tooltip {
    left: 18%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='18'] .tooltip:before {
    content: "18%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='18'].heat-gradient .heat-gradient-tooltip {
    background-color: #f0a020;
    border-bottom: 1px solid #e79410;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='18'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f0a020;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='19'] .tooltip {
    left: 19%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='19'] .tooltip:before {
    content: "19%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='19'].heat-gradient .heat-gradient-tooltip {
    background-color: #f09e21;
    border-bottom: 1px solid #e89210;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='19'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f09e21;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='20'] .tooltip {
    left: 20%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='20'] .tooltip:before {
    content: "20%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='20'].heat-gradient .heat-gradient-tooltip {
    background-color: #f09c22;
    border-bottom: 1px solid #e99010;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='20'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #f09c22;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='21'] .tooltip {
    left: 21%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='21'] .tooltip:before {
    content: "21%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='21'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9a23;
    border-bottom: 1px solid #e88e11;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='21'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9a23;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='22'] .tooltip {
    left: 22%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='22'] .tooltip:before {
    content: "22%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='22'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9824;
    border-bottom: 1px solid #e98c11;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='22'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9824;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='23'] .tooltip {
    left: 23%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='23'] .tooltip:before {
    content: "23%";
}

/* line 294, ../scss/custom-bars.scss */ 
.bar[aria-valuenow='23'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9625;
    border-bottom: 1px solid #e98a11;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='23'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9625;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='24'] .tooltip {
    left: 24%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='24'] .tooltip:before {
    content: "24%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='24'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9426;
    border-bottom: 1px solid #ea8811;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='24'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9426;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='25'] .tooltip {
    left: 25%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='25'] .tooltip:before {
    content: "25%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='25'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9327;
    border-bottom: 1px solid #eb8711;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='25'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9327;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='26'] .tooltip {
    left: 26%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='26'] .tooltip:before {
    content: "26%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='26'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef9128;
    border-bottom: 1px solid #ec8512;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='26'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef9128;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='27'] .tooltip {
    left: 27%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='27'] .tooltip:before {
    content: "27%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='27'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef8f29;
    border-bottom: 1px solid #ed8312;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='27'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef8f29;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='28'] .tooltip {
    left: 28%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='28'] .tooltip:before {
    content: "28%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='28'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef8d2a;
    border-bottom: 1px solid #ed8012;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='28'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef8d2a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='29'] .tooltip {
    left: 29%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='29'] .tooltip:before {
    content: "29%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='29'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef8b2b;
    border-bottom: 1px solid #ed7e13;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='29'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef8b2b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='30'] .tooltip {
    left: 30%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='30'] .tooltip:before {
    content: "30%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='30'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef892c;
    border-bottom: 1px solid #ed7c14;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='30'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef892c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='31'] .tooltip {
    left: 31%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='31'] .tooltip:before {
    content: "31%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='31'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef872d;
    border-bottom: 1px solid #ed7915;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='31'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef872d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='32'] .tooltip {
    left: 32%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='32'] .tooltip:before {
    content: "32%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='32'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef852e;
    border-bottom: 1px solid #ed7716;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='32'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef852e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='33'] .tooltip {
    left: 33%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='33'] .tooltip:before {
    content: "33%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='33'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef832f;
    border-bottom: 1px solid #ed7517;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='33'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef832f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='34'] .tooltip {
    left: 34%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='34'] .tooltip:before {
    content: "34%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='34'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef8130;
    border-bottom: 1px solid #ed7318;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='34'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef8130;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='35'] .tooltip {
    left: 35%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='35'] .tooltip:before {
    content: "35%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='35'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7f31;
    border-bottom: 1px solid #ed7019;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='35'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7f31;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='36'] .tooltip {
    left: 36%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='36'] .tooltip:before {
    content: "36%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='36'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7d32;
    border-bottom: 1px solid #ed6e1a;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='36'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7d32;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='37'] .tooltip {
    left: 37%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='37'] .tooltip:before {
    content: "37%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='37'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7b33;
    border-bottom: 1px solid #ed6c1b;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='37'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7b33;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='38'] .tooltip {
    left: 38%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='38'] .tooltip:before {
    content: "38%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='38'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7934;
    border-bottom: 1px solid #ed691c;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='38'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7934;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='39'] .tooltip {
    left: 39%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='39'] .tooltip:before {
    content: "39%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='39'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7735;
    border-bottom: 1px solid #ed671d;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='39'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7735;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='40'] .tooltip {
    left: 40%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='40'] .tooltip:before {
    content: "40%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='40'].heat-gradient .heat-gradient-tooltip {
    background-color: #ef7536;
    border-bottom: 1px solid #ed651e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='40'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ef7536;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='41'] .tooltip {
    left: 41%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='41'] .tooltip:before {
    content: "41%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='41'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee7337;
    border-bottom: 1px solid #ec631f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='41'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee7337;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='42'] .tooltip {
    left: 42%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='42'] .tooltip:before {
    content: "42%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='42'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee7138;
    border-bottom: 1px solid #ec6021;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='42'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee7138;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='43'] .tooltip {
    left: 43%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='43'] .tooltip:before {
    content: "43%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='43'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee6f39;
    border-bottom: 1px solid #ec5e22;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='43'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee6f39;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='44'] .tooltip {
    left: 44%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='44'] .tooltip:before {
    content: "44%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='44'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee6d3a;
    border-bottom: 1px solid #ec5c23;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='44'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee6d3a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='45'] .tooltip {
    left: 45%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='45'] .tooltip:before {
    content: "45%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='45'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee6b3b;
    border-bottom: 1px solid #ec5924;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='45'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee6b3b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='46'] .tooltip {
    left: 46%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='46'] .tooltip:before {
    content: "46%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='46'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee693c;
    border-bottom: 1px solid #ec5725;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='46'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee693c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='47'] .tooltip {
    left: 47%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='47'] .tooltip:before {
    content: "47%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='47'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee673d;
    border-bottom: 1px solid #ec5526;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='47'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee673d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='48'] .tooltip {
    left: 48%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='48'] .tooltip:before {
    content: "48%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='48'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee653e;
    border-bottom: 1px solid #ec5227;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='48'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee653e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='49'] .tooltip {
    left: 49%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='49'] .tooltip:before {
    content: "49%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='49'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee633f;
    border-bottom: 1px solid #ec5028;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='49'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee633f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='50'] .tooltip {
    left: 50%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='50'] .tooltip:before {
    content: "50%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='50'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee6240;
    border-bottom: 1px solid #ec4f29;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='50'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee6240;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='51'] .tooltip {
    left: 51%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='51'] .tooltip:before {
    content: "51%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='51'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee6040;
    border-bottom: 1px solid #ec4d29;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='51'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee6040;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='52'] .tooltip {
    left: 52%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='52'] .tooltip:before {
    content: "52%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='52'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5e41;
    border-bottom: 1px solid #ec4a2a;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='52'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5e41;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='53'] .tooltip {
    left: 53%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='53'] .tooltip:before {
    content: "53%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='53'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5c42;
    border-bottom: 1px solid #ec482b;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='53'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5c42;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='54'] .tooltip {
    left: 54%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='54'] .tooltip:before {
    content: "54%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='54'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5a43;
    border-bottom: 1px solid #ec452c;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='54'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5a43;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='55'] .tooltip {
    left: 55%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='55'] .tooltip:before {
    content: "55%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='55'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5844;
    border-bottom: 1px solid #ec432d;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='55'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5844;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='56'] .tooltip {
    left: 56%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='56'] .tooltip:before {
    content: "56%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='56'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5645;
    border-bottom: 1px solid #ec412e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='56'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5645;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='57'] .tooltip {
    left: 57%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='57'] .tooltip:before {
    content: "57%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='57'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5446;
    border-bottom: 1px solid #ec3e2f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='57'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5446;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='58'] .tooltip {
    left: 58%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='58'] .tooltip:before {
    content: "58%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='58'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5247;
    border-bottom: 1px solid #ec3c30;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='58'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5247;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='59'] .tooltip {
    left: 59%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='59'] .tooltip:before {
    content: "59%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='59'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee5048;
    border-bottom: 1px solid #ec3a31;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='59'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee5048;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='60'] .tooltip {
    left: 60%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='60'] .tooltip:before {
    content: "60%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='60'].heat-gradient .heat-gradient-tooltip {
    background-color: #ee4e49;
    border-bottom: 1px solid #ec3732;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='60'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ee4e49;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='61'] .tooltip {
    left: 61%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='61'] .tooltip:before {
    content: "61%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='61'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed4c4a;
    border-bottom: 1px solid #eb3533;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='61'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed4c4a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='62'] .tooltip {
    left: 62%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='62'] .tooltip:before {
    content: "62%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='62'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed4a4b;
    border-bottom: 1px solid #eb3334;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='62'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed4a4b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='63'] .tooltip {
    left: 63%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='63'] .tooltip:before {
    content: "63%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='63'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed484c;
    border-bottom: 1px solid #eb3135;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='63'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed484c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='64'] .tooltip {
    left: 64%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='64'] .tooltip:before {
    content: "64%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='64'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed464d;
    border-bottom: 1px solid #eb2f37;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='64'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed464d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='65'] .tooltip {
    left: 65%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='65'] .tooltip:before {
    content: "65%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='65'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed444e;
    border-bottom: 1px solid #eb2d38;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='65'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed444e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='66'] .tooltip {
    left: 66%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='66'] .tooltip:before {
    content: "66%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='66'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed424f;
    border-bottom: 1px solid #eb2b39;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='66'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed424f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='67'] .tooltip {
    left: 67%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='67'] .tooltip:before {
    content: "67%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='67'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed4050;
    border-bottom: 1px solid #eb293b;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='67'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed4050;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='68'] .tooltip {
    left: 68%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='68'] .tooltip:before {
    content: "68%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='68'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3e51;
    border-bottom: 1px solid #eb273c;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='68'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3e51;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='69'] .tooltip {
    left: 69%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='69'] .tooltip:before {
    content: "69%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='69'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3c52;
    border-bottom: 1px solid #eb253d;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='69'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3c52;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='70'] .tooltip {
    left: 70%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='70'] .tooltip:before {
    content: "70%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='70'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3a53;
    border-bottom: 1px solid #eb233f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='70'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3a53;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='71'] .tooltip {
    left: 71%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='71'] .tooltip:before {
    content: "71%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='71'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3854;
    border-bottom: 1px solid #eb2140;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='71'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3854;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='72'] .tooltip {
    left: 72%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='72'] .tooltip:before {
    content: "72%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='72'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3655;
    border-bottom: 1px solid #eb1f41;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='72'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3655;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='73'] .tooltip {
    left: 73%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='73'] .tooltip:before {
    content: "73%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='73'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3456;
    border-bottom: 1px solid #eb1d42;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='73'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3456;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='74'] .tooltip {
    left: 74%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='74'] .tooltip:before {
    content: "74%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='74'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3257;
    border-bottom: 1px solid #eb1b44;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='74'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3257;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='75'] .tooltip {
    left: 75%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='75'] .tooltip:before {
    content: "75%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='75'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed3158;
    border-bottom: 1px solid #eb1a45;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='75'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed3158;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='76'] .tooltip {
    left: 76%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='76'] .tooltip:before {
    content: "76%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='76'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed2f59;
    border-bottom: 1px solid #eb1846;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='76'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed2f59;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='77'] .tooltip {
    left: 77%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='77'] .tooltip:before {
    content: "77%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='77'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed2d5a;
    border-bottom: 1px solid #eb1648;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='77'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed2d5a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='78'] .tooltip {
    left: 78%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='78'] .tooltip:before {
    content: "78%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='78'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed2b5b;
    border-bottom: 1px solid #eb1449;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='78'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed2b5b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='79'] .tooltip {
    left: 79%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='79'] .tooltip:before {
    content: "79%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='79'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed295c;
    border-bottom: 1px solid #e9144b;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='79'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed295c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='80'] .tooltip {
    left: 80%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='80'] .tooltip:before {
    content: "80%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='80'].heat-gradient .heat-gradient-tooltip {
    background-color: #ed275d;
    border-bottom: 1px solid #e7134d;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='80'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ed275d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='81'] .tooltip {
    left: 81%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='81'] .tooltip:before {
    content: "81%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='81'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec255e;
    border-bottom: 1px solid #e4144f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='81'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec255e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='82'] .tooltip {
    left: 82%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='82'] .tooltip:before {
    content: "82%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='82'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec235f;
    border-bottom: 1px solid #e21451;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='82'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec235f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='83'] .tooltip {
    left: 83%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='83'] .tooltip:before {
    content: "83%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='83'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec2160;
    border-bottom: 1px solid #e01353;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='83'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec2160;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='84'] .tooltip {
    left: 84%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='84'] .tooltip:before {
    content: "84%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='84'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1f61;
    border-bottom: 1px solid #df1354;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='84'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1f61;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='85'] .tooltip {
    left: 85%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='85'] .tooltip:before {
    content: "85%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='85'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1d62;
    border-bottom: 1px solid #dd1356;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='85'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1d62;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='86'] .tooltip {
    left: 86%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='86'] .tooltip:before {
    content: "86%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='86'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1b63;
    border-bottom: 1px solid #db1257;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='86'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1b63;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='87'] .tooltip {
    left: 87%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='87'] .tooltip:before {
    content: "87%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='87'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1964;
    border-bottom: 1px solid #da1259;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='87'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1964;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='88'] .tooltip {
    left: 88%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='88'] .tooltip:before {
    content: "88%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='88'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1765;
    border-bottom: 1px solid #d8125a;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='88'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1765;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='89'] .tooltip {
    left: 89%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='89'] .tooltip:before {
    content: "89%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='89'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1566;
    border-bottom: 1px solid #d6115c;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='89'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1566;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='90'] .tooltip {
    left: 90%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='90'] .tooltip:before {
    content: "90%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='90'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1367;
    border-bottom: 1px solid #d4115d;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='90'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1367;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='91'] .tooltip {
    left: 91%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='91'] .tooltip:before {
    content: "91%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='91'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec1168;
    border-bottom: 1px solid #d40f5e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='91'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec1168;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='92'] .tooltip {
    left: 92%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='92'] .tooltip:before {
    content: "92%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='92'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec0f69;
    border-bottom: 1px solid #d40d5e;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='92'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec0f69;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='93'] .tooltip {
    left: 93%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='93'] .tooltip:before {
    content: "93%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='93'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec0d6a;
    border-bottom: 1px solid #d40c5f;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='93'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec0d6a;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='94'] .tooltip {
    left: 94%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='94'] .tooltip:before {
    content: "94%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='94'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec0b6b;
    border-bottom: 1px solid #d40a60;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='94'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec0b6b;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='95'] .tooltip {
    left: 95%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='95'] .tooltip:before {
    content: "95%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='95'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec096c;
    border-bottom: 1px solid #d30861;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='95'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec096c;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='96'] .tooltip {
    left: 96%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='96'] .tooltip:before {
    content: "96%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='96'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec076d;
    border-bottom: 1px solid #d30662;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='96'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec076d;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='97'] .tooltip {
    left: 97%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='97'] .tooltip:before {
    content: "97%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='97'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec056e;
    border-bottom: 1px solid #d30462;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='97'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec056e;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='98'] .tooltip {
    left: 98%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='98'] .tooltip:before {
    content: "98%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='98'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec036f;
    border-bottom: 1px solid #d30363;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='98'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec036f;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='99'] .tooltip {
    left: 99%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='99'] .tooltip:before {
    content: "99%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='99'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec0170;
    border-bottom: 1px solid #d30164;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='99'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec0170;
}

/* line 286, ../scss/custom-bars.scss */
.bar[aria-valuenow='100'] .tooltip {
    left: 100%;
}

/* line 289, ../scss/custom-bars.scss */
.bar[aria-valuenow='100'] .tooltip:before {
    content: "100%";
}

/* line 294, ../scss/custom-bars.scss */
.bar[aria-valuenow='100'].heat-gradient .heat-gradient-tooltip {
    background-color: #ec0071;
    border-bottom: 1px solid #d30065;
}

/* line 16, ../scss/custom-bars.scss */
.bar[aria-valuenow='100'].heat-gradient .heat-gradient-tooltip:after {
    border-bottom-color: #ec0071;
}
 /* Component styles */
/* line 5, ../scss/component.scss */
h1 span.heading-3d {
  font-size: 1em;
  font-weight: bold;
  display: inline-block;
  color: #eaeaea;
  transform: scale(1.4) translateY(-0.25em) rotateZ(8deg);
  text-shadow: 0.01em 0.02em 0.01em rgba(150, 150, 150, 0.5), -0.01em -0.01em 0.01em white, 0 0 1em rgba(0, 0, 0, 0.15), 0.05em 0.2em 0.08em rgba(0, 0, 0, 0.3), 0 0.15em 0.35em rgba(0, 0, 0, 0.3), 0 0.6em 1.6em rgba(0, 0, 0, 0.3), 0 0.2em 2.04em white;
  padding: 0;
}

/* line 16, ../scss/component.scss */
.content {
  padding-top: 0;
}

/* line 72, ../scss/component.scss */
.progress-factor {
  font-size: 5em;
  padding: 1em .2em 0;
  flex: 0 1 100%;
}

/* line 79, ../scss/component.scss */
.progress-bar {
  font-size: 1em;
  text-align: center;
  width: 100%;
  height: 1em;
  perspective: 12em;
  perspective-origin: 50% 50%;
}

/* line 91, ../scss/component.scss */
.bar {
  font-size: 1em;
  position: relative;
  display: inline-block;
  width: 4em;
  height: 1em;
  transition: all 0.5s ease-in-out;
  transform-style: preserve-3d;
}
/* line 105, ../scss/component.scss */
.bar.regular-width {
  width: 1em;
}
/* line 108, ../scss/component.scss */
.bar.regular-width[aria-valuenow] .percentage:before {
  width: 100%;
}
/* line 116, ../scss/component.scss */
.bar.has-rotation {
  transform: rotateX(60deg);
}
/* line 121, ../scss/component.scss */
.bar .bar-face {
  position: absolute;
  bottom: 0;
  left: 0;
  display: inline-block;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  background-color: rgba(10, 64, 105, 0.3);
  backface-visibility: visible;
  transition: transform 0.5s ease-out;
}
/* line 138, ../scss/component.scss */
.bar .bar-face.face-position {
  transform-origin: 50% 100%;
}
/* line 142, ../scss/component.scss */
.bar .bar-face.face-position.roof {
  transform: translateZ(1em);
  transition-delay: 2s;
}
/* line 147, ../scss/component.scss */
.bar .bar-face.face-position.front {
  transform: rotateX(-90deg);
  transition-delay: 0s;
}
/* line 152, ../scss/component.scss */
.bar .bar-face.face-position.right {
  left: auto;
  right: -.5em;
  width: 1em;
  transform: rotateX(-90deg) rotateY(90deg) translateX(0.5em);
  transition-delay: 0.5s;
}
/* line 160, ../scss/component.scss */
.bar .bar-face.face-position.back {
  transform: rotateX(-90deg) rotateY(0deg) translateZ(-1em);
  transition-delay: 1s;
}
/* line 165, ../scss/component.scss */
.bar .bar-face.face-position.left {
  width: 1em;
  transform: rotateX(-90deg) rotateY(-90deg) translateX(-0.5em) translateZ(0.5em);
  transition-delay: 1.5s;
}
/* line 173, ../scss/component.scss */
.bar .bar-face.percentage:before {
  content: '';
  font-size: .25em;
  line-height: 4em;
  position: absolute;
  bottom: 0;
  width: 0;
  height: 100%;
  margin: 0;
  display: block;
  box-sizing: border-box;
  color: rgba(68, 68, 68, 0.8);
  transition: all 0.5s ease-out;
}
/* line 24, ../scss/component.scss */
.bar.red .bar-face, .bar.red[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.red .face-position.left, .bar.red[aria-valuenow='100'] .face-position.right {
  background-color: rgba(236, 0, 113, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.red[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.red .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.red .percentage:before {
  background-color: rgba(236, 0, 113, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.red .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(236, 0, 113, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.red:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.red:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.red:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(236, 0, 113, 0);
}
/* line 24, ../scss/component.scss */
.bar.yellow .bar-face, .bar.yellow[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.yellow .face-position.left, .bar.yellow[aria-valuenow='100'] .face-position.right {
  background-color: rgba(241, 196, 15, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.yellow[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.yellow .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.yellow .percentage:before {
  background-color: rgba(241, 196, 15, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.yellow .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(241, 196, 15, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.yellow:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.yellow:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.yellow:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(241, 196, 15, 0);
}
/* line 24, ../scss/component.scss */
.bar.lime .bar-face, .bar.lime[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.lime .face-position.left, .bar.lime[aria-valuenow='100'] .face-position.right {
  background-color: rgba(215, 255, 0, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.lime[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.lime .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.lime .percentage:before {
  background-color: rgba(215, 255, 0, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.lime .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(215, 255, 0, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.lime:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.lime:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.lime:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(215, 255, 0, 0);
}
/* line 24, ../scss/component.scss */
.bar.navy .bar-face, .bar.navy[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.navy .face-position.left, .bar.navy[aria-valuenow='100'] .face-position.right {
  background-color: rgba(10, 64, 105, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.navy[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.navy .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.navy .percentage:before {
  background-color: rgba(10, 64, 105, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.navy .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(10, 64, 105, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.navy:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.navy:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.navy:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(10, 64, 105, 0);
}
/* line 24, ../scss/component.scss */
.bar.cyan .bar-face, .bar.cyan[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.cyan .face-position.left, .bar.cyan[aria-valuenow='100'] .face-position.right {
  background-color: rgba(87, 202, 244, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.cyan[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.cyan .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.cyan .percentage:before {
  background-color: rgba(87, 202, 244, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.cyan .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(87, 202, 244, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.cyan:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.cyan:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.cyan:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(87, 202, 244, 0);
}
/* line 24, ../scss/component.scss */
.bar.dark .bar-face, .bar.dark[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.dark .face-position.left, .bar.dark[aria-valuenow='100'] .face-position.right {
  background-color: rgba(68, 68, 68, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.dark[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.dark .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.dark .percentage:before {
  background-color: rgba(68, 68, 68, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.dark .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(68, 68, 68, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.dark:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.dark:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.dark:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(68, 68, 68, 0);
}
/* line 24, ../scss/component.scss */
.bar.orange .bar-face, .bar.orange[aria-valuenow='0'] .face-position.right {
  background-color: rgba(255, 255, 255, 0.3);
}
/* line 29, ../scss/component.scss */
.bar.orange .face-position.left, .bar.orange[aria-valuenow='100'] .face-position.right {
  background-color: rgba(255, 105, 0, 0.2);
}
/* line 34, ../scss/component.scss */
.bar.orange[aria-valuenow='100'] .face-position.right {
  transition-delay: 0.5s;
}
/* line 38, ../scss/component.scss */
.bar.orange .face-position.floor.volume-lights {
  box-shadow: 0 -0.2em 1em rgba(0, 0, 0, 0.15), 0 0.2em 0.1em -5px rgba(0, 0, 0, 0.3), 0 -0.75em 1.75em rgba(254, 254, 254, 0.6);
}
/* line 45, ../scss/component.scss */
.bar.orange .percentage:before {
  background-color: rgba(255, 105, 0, 0.5);
}
/* line 49, ../scss/component.scss */
.bar.orange .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(255, 105, 0, 0.25);
}
/* line 56, ../scss/component.scss */
.bar.orange:not(.has-colors)[aria-valuenow] .face-position {
  background-color: rgba(68, 68, 68, 0.6);
}
/* line 60, ../scss/component.scss */
.bar.orange:not(.has-colors) .percentage:before {
  background-color: transparent;
}
/* line 64, ../scss/component.scss */
.bar.orange:not(.has-colors) .volume-lights.shine:before {
  box-shadow: 0 1.6em 3em rgba(255, 105, 0, 0);
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='1'] .percentage:before {
  width: 1%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='2'] .percentage:before {
  width: 2%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='3'] .percentage:before {
  width: 3%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='4'] .percentage:before {
  width: 4%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='5'] .percentage:before {
  width: 5%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='6'] .percentage:before {
  width: 6%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='7'] .percentage:before {
  width: 7%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='8'] .percentage:before {
  width: 8%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='9'] .percentage:before {
  width: 9%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='10'] .percentage:before {
  width: 10%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='11'] .percentage:before {
  width: 11%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='12'] .percentage:before {
  width: 12%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='13'] .percentage:before {
  width: 13%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='14'] .percentage:before {
  width: 14%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='15'] .percentage:before {
  width: 15%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='16'] .percentage:before {
  width: 16%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='17'] .percentage:before {
  width: 17%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='18'] .percentage:before {
  width: 18%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='19'] .percentage:before {
  width: 19%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='20'] .percentage:before {
  width: 20%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='21'] .percentage:before {
  width: 21%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='22'] .percentage:before {
  width: 22%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='23'] .percentage:before {
  width: 23%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='24'] .percentage:before {
  width: 24%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='25'] .percentage:before {
  width: 25%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='26'] .percentage:before {
  width: 26%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='27'] .percentage:before {
  width: 27%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='28'] .percentage:before {
  width: 28%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='29'] .percentage:before {
  width: 29%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='30'] .percentage:before {
  width: 30%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='31'] .percentage:before {
  width: 31%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='32'] .percentage:before {
  width: 32%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='33'] .percentage:before {
  width: 33%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='34'] .percentage:before {
  width: 34%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='35'] .percentage:before {
  width: 35%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='36'] .percentage:before {
  width: 36%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='37'] .percentage:before {
  width: 37%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='38'] .percentage:before {
  width: 38%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='39'] .percentage:before {
  width: 39%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='40'] .percentage:before {
  width: 40%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='41'] .percentage:before {
  width: 41%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='42'] .percentage:before {
  width: 42%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='43'] .percentage:before {
  width: 43%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='44'] .percentage:before {
  width: 44%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='45'] .percentage:before {
  width: 45%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='46'] .percentage:before {
  width: 46%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='47'] .percentage:before {
  width: 47%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='48'] .percentage:before {
  width: 48%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='49'] .percentage:before {
  width: 49%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='50'] .percentage:before {
  width: 50%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='51'] .percentage:before {
  width: 51%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='52'] .percentage:before {
  width: 52%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='53'] .percentage:before {
  width: 53%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='54'] .percentage:before {
  width: 54%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='55'] .percentage:before {
  width: 55%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='56'] .percentage:before {
  width: 56%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='57'] .percentage:before {
  width: 57%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='58'] .percentage:before {
  width: 58%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='59'] .percentage:before {
  width: 59%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='60'] .percentage:before {
  width: 60%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='61'] .percentage:before {
  width: 61%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='62'] .percentage:before {
  width: 62%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='63'] .percentage:before {
  width: 63%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='64'] .percentage:before {
  width: 64%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='65'] .percentage:before {
  width: 65%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='66'] .percentage:before {
  width: 66%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='67'] .percentage:before {
  width: 67%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='68'] .percentage:before {
  width: 68%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='69'] .percentage:before {
  width: 69%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='70'] .percentage:before {
  width: 70%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='71'] .percentage:before {
  width: 71%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='72'] .percentage:before {
  width: 72%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='73'] .percentage:before {
  width: 73%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='74'] .percentage:before {
  width: 74%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='75'] .percentage:before {
  width: 75%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='76'] .percentage:before {
  width: 76%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='77'] .percentage:before {
  width: 77%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='78'] .percentage:before {
  width: 78%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='79'] .percentage:before {
  width: 79%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='80'] .percentage:before {
  width: 80%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='81'] .percentage:before {
  width: 81%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='82'] .percentage:before {
  width: 82%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='83'] .percentage:before {
  width: 83%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='84'] .percentage:before {
  width: 84%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='85'] .percentage:before {
  width: 85%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='86'] .percentage:before {
  width: 86%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='87'] .percentage:before {
  width: 87%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='88'] .percentage:before {
  width: 88%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='89'] .percentage:before {
  width: 89%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='90'] .percentage:before {
  width: 90%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='91'] .percentage:before {
  width: 91%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='92'] .percentage:before {
  width: 92%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='93'] .percentage:before {
  width: 93%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='94'] .percentage:before {
  width: 94%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='95'] .percentage:before {
  width: 95%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='96'] .percentage:before {
  width: 96%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='97'] .percentage:before {
  width: 97%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='98'] .percentage:before {
  width: 98%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='99'] .percentage:before {
  width: 99%;
}
/* line 209, ../scss/component.scss */
.bar[aria-valuenow='100'] .percentage:before {
  width: 100%;
}
</style>
EOF;

    }    
}