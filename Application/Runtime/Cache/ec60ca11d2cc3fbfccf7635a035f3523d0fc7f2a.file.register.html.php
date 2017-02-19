<?php /* Smarty version Smarty-3.1.6, created on 2017-02-09 20:12:26
         compiled from "./Application/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:188685896e07bd1c0d2-02517916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec60ca11d2cc3fbfccf7635a035f3523d0fc7f2a' => 
    array (
      0 => './Application/Home/View\\User\\register.html',
      1 => 1486300218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188685896e07bd1c0d2-02517916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5896e07c07d3e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896e07c07d3e')) {function content_5896e07c07d3e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="Generator" content="YONGDA v1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>用户注册</title>



</head>
<body>
    <div>
        <form id="yw0" action="__SELF__" method="post">
            <input  type="hidden" name="u_id"/>
            <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                <tbody>
                <tr>
                    <td style="width:13%; text-align: right;"><label for="username" class="required">用户名
                        <span class="required">*</span></label>
                    </td>

                    <td style="width:87%;">
                        <input class="inputBg" size="25" name="u_name" id="username" type="text" value="" />

                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="password" class="required">密码 <span class="required">*</span></label>
                    </td>

                    <td>
                        <input class="inputBg" size="25" name="u_pwd" id="password" type="password" value="" />
                    </td>
                </tr>
                <tr>
                    <td align="right"><label for="password2">密码确认</label></td>
                    <td>
                        <input class="inputBg" size="25" name="u_pwd1" id="password2" type="password" />
                    </td>

                </tr>
                <tr>
                    <td align="right"><label for="user_email">邮箱</label></td>
                    <td>
                        <input class="inputBg" size="25" name="u_email" id="user_email" type="text" value="" />
                    </td>
                </tr>
                <tr>

                    <td align="right"><label for="user_qq">qq号码</label></td>
                    <td>
                        <input class="inputBg" size="25" name="u_qq" id="user_qq" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <td align="right"><label for="user_tel">手机</label></td>
                    <td>
                        <input class="inputBg" size="25" name="u_tel" id="user_tel" type="text" value="" />
                    </td>
                </tr>
                <tr>
                    <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                    <td align="right"><label for="user_sex">类别</label></td>
                    <td>
                        <span id="user_sex">
                                            <input id="user_sex_0" value="1" checked="checked" type="radio" name="u_cate" />
                                            <label for="user_sex_0">教师</label>&nbsp;
                                            <input id="user_sex_1" value="2" type="radio" name="u_cate" />
                                            <label for="user_sex_1">学生</label>&nbsp;
                                            <input id="user_sex_2" value="3" type="radio" name="u_cate" />
                                            <label for="user_sex_2">游客</label></span>
                    </td>
                </tr>

                <tr>

                    <!--textArea($model,$attribute,$htmlOptions=array())-->
                    <td align="right"><label for="user_introduce">简介</label></td>
                    <td>
                        <textarea cols="50" rows="5" name="u_introduce" id="user_introduce"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>

                    <td align="left">
                        <input name="Submit" value="提交注册"  type="submit" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                </tbody>
            </table>

        </form>

    </div>

</body>
</html><?php }} ?>