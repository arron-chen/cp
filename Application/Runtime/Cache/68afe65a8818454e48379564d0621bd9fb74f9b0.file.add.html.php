<?php /* Smarty version Smarty-3.1.6, created on 2017-02-03 22:36:58
         compiled from "./Application/Admin/View\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:267865894958a837b04-03194809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68afe65a8818454e48379564d0621bd9fb74f9b0' => 
    array (
      0 => './Application/Admin/View\\Goods\\add.html',
      1 => 1485431948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267865894958a837b04-03194809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5894958a94cf7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894958a94cf7')) {function content_5894958a94cf7($_smarty_tpl) {?><!DOCTYPE html   >
<html>
<head>
    <title>添加商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="__MODULE__/Goods/showlist">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="__SELF__" method="post" enctype="multipart/form-data">
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>商品名称</td>
                <td><input type="text" name="goods_name" /></td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td><input type="text" name="goods_price" /></td>
            </tr>
            <tr>
                <td>商品数量</td>
                <td><input type="text" name="goods_number" /></td>
            </tr>
            <tr>
                <td>商品重量</td>
                <td><input type="text" name="goods_weight" /></td>
            </tr>
            <tr>
                <td>商品图片</td>
                <td><input type="file" name="goods_img" /></td>
            </tr>
            <tr>
                <td>商品详细描述</td>
                <td>
                    <textarea name="goods_introduce"></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="添加">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>