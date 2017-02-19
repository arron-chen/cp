<?php /* Smarty version Smarty-3.1.6, created on 2017-02-13 13:20:53
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1294258928baf6eeb64-79922253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1486953465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294258928baf6eeb64-79922253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58928baf7b80a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58928baf7b80a')) {function content_58928baf7b80a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>精品课程网·江西</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Index/css/style.css"/>
    <style>
        /*   banner的url   */
        #section0 {
            background-image: url('__PUBLIC__/Index/images/img1/1.jpg');
        }

        #section1 {
            background-image: url('__PUBLIC__/Index/images/img1/2.jpg');
        }

        #section2 {
            background-image: url('__PUBLIC__/Index/images/img1/3.jpg');
        }

        #section3 {
            background-image: url('__PUBLIC__/Index/images/img1/4.jpg');
        }


        /*   indexmaindiv 的url   */
        .stylesgoleft {
            float: left;
            width: 21px;
            height: 28px;
            background: url('__PUBLIC__/Index/images/img2/arrowhead.png') no-repeat left top;
            margin: 116px 5px 0px 0px;
            cursor: pointer;
        }

        .stylesgoleft:hover {
            float: left;
            width: 21px;
            height: 28px;
            background: url('__PUBLIC__/Index/images/img2/arrowhead.png') no-repeat left -28px;
            margin: 116px 5px 0px 0px;
            cursor: pointer;
        }

        .playerdetail  .checkdetail {
            width: 134px;
            height: 27px;
            display: block;
            background: url('__PUBLIC__/Index/images/img2/checkdetail.png') no-repeat;
            margin: 18px;
        }

        .stylesgoright {
            float: left;
            width: 21px;
            height: 28px;
            background: url('__PUBLIC__/Index/images/img2/arrowhead.png') no-repeat left -56px;
            margin: 116px 0px 0px 15px;
            cursor: pointer;
        }

        .stylesgoright:hover {
            float: left;
            width: 21px;
            height: 28px;
            background: url('__PUBLIC__/Index/images/img2/arrowhead.png') no-repeat left -84px;
            margin: 116px 0px 0px 15px;
            cursor: pointer;
        }




    </style>
</head>
<body>
<div class="layout">

    <div class="top ">
        <div class="header Comwidth">
            <div class="logo fl"><img src="__PUBLIC__/Index/images/logo1.png" width="100px"
                                      height="50px"><a>精品课程网站·江西</a></div>
            <div class="mulu fl">
                <ul class="ul_style ">
                    <li><a href="__MODULE__/Index/index">首页</a></li>
                    <li><a href="__MODULE__/Index/course">课程</a></li>
                    <li><a href="__MODULE__/Index/project">学习</a></li>
                    <li><a href="__MODULE__/Index/resource">资源</a></li>
                    <li><a href="__MODULE__/Index/help">培训</a></li>
                </ul>
            </div>
            <div class="register fr">
                <ul class="ul_style_sm">
                    <li><a href="__MODULE__/User/login">登陆</a></li>
                    <li><a href="__MODULE__/User/register">注册</a></li>
                    <li><a>帮助</a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <div class="top_1">
        <div class="jsbanner">

            <link rel="stylesheet" href="__PUBLIC__/Index/css/pageSwitch.min.css">
            <div id="container">
                <div class="sections">
                    <div class="section" id="section0"><h3></h3></div>
                    <div class="section" id="section1"><h3></h3></div>
                    <div class="section" id="section2"><h3></h3></div>
                    <div class="section" id="section3"><h3></h3></div>
                </div>
            </div>

            <script src="__PUBLIC__/Index/js/jquery-1.11.0.min.js" type="text/javascript"></script>
            <script src="__PUBLIC__/Index/js/pageSwitch.min.js" type="text/javascript"></script>
            <script>
                $("#container").PageSwitch({
                    direction: 'horizontal',
                    easing: 'ease-in',
                    duration: 1000,
                    autoPlay: true,
                    loop: 'false'
                });
            </script>


        </div>
    </div>

    <div class="top_2">
        <script src="__PUBLIC__/Index/js/top_2.indexmaindiv.js" type="text/javascript"></script>
        <link href="__PUBLIC__/Index/css/lanrenzhijia.css" type="text/css" rel="stylesheet"/>
        <div class="indexmaindiv" id="indexmaindiv">
            <div class="indexmaindiv1 clearfix">
                <div class="stylesgoleft" id="goleft"></div>
                <div class="maindiv1 " id="maindiv1">
                    <ul id="count1">
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/1.jpg"/></div>
                                <div class="teanames">乐静老师1</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>

                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/2.jpg"/></div>
                                <div class="teanames">乐静老师2</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>

                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/3.jpg"/></div>
                                <div class="teanames">乐静老师3</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>

                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/4.jpg"/></div>
                                <div class="teanames">乐静老师4</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>

                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/5.jpg"/></div>
                                <div class="teanames">乐静老师5</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>

                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/6.jpg"/></div>
                                <div class="teanames">乐静老师6</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/7.jpg"/></div>
                                <div class="teanames">乐静老师7</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/8.jpg"/></div>
                                <div class="teanames">乐静老师8</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/1.jpg"/></div>
                                <div class="teanames">乐静老师9</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/2.jpg"/></div>
                                <div class="teanames">乐静老师10</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/3.jpg"/></div>
                                <div class="teanames">乐静老师11</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/4.jpg"/></div>
                                <div class="teanames">乐静老师12</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/5.jpg"/></div>
                                <div class="teanames">乐静老师13</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/6.jpg"/></div>
                                <div class="teanames">乐静老师14</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                                <a class="checkdetail" href="http://www.lanrenzhijia.com"></a>
                            </div>
                        </li>
                        <li>
                            <div class="playerdetail">
                                <div class="detailimg"><img src="__PUBLIC__/Index/images/img2/7.jpg"/></div>
                                <div class="teanames">乐静老师15</div>
                                <div class="teadetail">获得新加坡南阳理工学院计算机学士学位擅长营销学培训</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="stylesgoright" id="goright"></div>
            </div>
        </div>

    </div>

    <div class="mid_seek">
        <div class="seekbox Comwidth">
            <div class="mid-center">
                <span class="mid-center-1"> <input class="input" type="text" value=" &nbsp;&nbsp;&nbsp;你想找什么? "/></span>
                <span class="mid-center-2"> <select name="cars">
                <option value="volvo">课程</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>
               </span>
                <span class="mid-center-3"> <input type="button" value="搜一下"/></span>
            </div>
        </div>
    </div>

    <div class="mid_1">
        <div class="course Comwidth">
            <div class="course_left">
                <div class="course_left_title"><h3 class="c_l_t_h3 fl">课程</h3><span class="c_l_t_a fl"><a>学习最好的课程！选择感兴趣的领域，加入课堂，开始学习吧</a></span>
                </div>
                <div class="clr"></div>
                <div class="course_left_box">
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/1.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/2.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/3.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/4.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/5.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/6.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/7.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>
                    <div class="cousre_left_item fl">
                        <img src="__PUBLIC__/Index/images/course/1.jpg" width="160px" height="220px"/>
                        <div class="course_left_item_sub"><a>用户界面（UI）设计</a></div>
                    </div>


                </div>
            </div>
            <div class="course_right">
                <div class="course_right_title"><h3>每日排行</h3></div>
                <div class="course_right_box">
                    <ul>

                    </ul>
                </div>
                <div></div>
            </div>
        </div>

    </div>

    <div class="mid_2">
        <div class="study Comwidth">
            <div class="hr_30"></div>
            <div class="course_title"><h3 class="c_t_h3 fl">学习</h3><span
                    class="c_t_a fl"><a>接受最好的学习! 选择职业相关专题, 开启职场进阶之门</a></span></div>
            <div class="clr"></div>
            <div class="study_box">
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/1.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/2.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/3.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/4.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/3.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/2.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
                <div class="study_box_item fl">
                    <img src="__PUBLIC__/Index/images/pro/1.jpg" width="160px" height="90px"/>
                    <div class="study_box_item_sub"><a>煤炭深加工与利用</a></div>
                </div>
            </div>

        </div>
    </div>

    <div class="mid_3">
        <div class="resource Comwidth">
            <div class="hr_30"></div>
            <div class="resource_title"><h3>资源库</h3></div>
            <div class="resource_box">
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                    <div><img src="__PUBLIC__/Index/images/res/1.png" width="80px" height="80px"/></div>
                     <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/2.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/3.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/6.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/4.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/5.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/6.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/7.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/8.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/1.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/3.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/5.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>
                <div class="resource_box_item fl">
                    <div class="resource_box_content">
                        <div><img src="__PUBLIC__/Index/images/res/6.png" width="80px" height="80px"/></div>
                        <div><span><a>教学课件</a></span></div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="bottom"></div>
</div>
</body>
</html><?php }} ?>