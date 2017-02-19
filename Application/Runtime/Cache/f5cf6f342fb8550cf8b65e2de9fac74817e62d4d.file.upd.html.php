<?php /* Smarty version Smarty-3.1.6, created on 2017-02-04 11:22:58
         compiled from "./Application/Admin/View\Goods\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:1238858954912724ac9-33058273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cf6f342fb8550cf8b65e2de9fac74817e62d4d' => 
    array (
      0 => './Application/Admin/View\\Goods\\upd.html',
      1 => 1485420438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238858954912724ac9-33058273',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589549127e7f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589549127e7f7')) {function content_589549127e7f7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>修改商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="__PUBLIC__/Admin/css/mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
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
                <td><input type="text" name="f_goods_name" value="KD877" /></td>
            </tr>
            <tr>
                <td>商品分类</td>
                <td>
                    <select name="f_goods_category_id">
                        <option>请选择</option>
                        <option>家用电器</option>
                        <option>手机数码</option>
                        <option>电脑办公</option>
                        <option>服饰鞋帽</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>商品品牌</td>
                <td>
                    <select name="f_goods_brand_id">
                        <option>请选择</option>
                        <option>苹果</option>
                        <option>诺基亚</option>
                        <option>HTC</option>
                        <option>摩托罗拉</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td><input type="text" name="f_goods_price" value="1239.99" /></td>
            </tr>
            <tr>
                <td>商品图片</td>
                <td><input type="file" name="f_goods_image" value="./img/2013-12-33.jpg" /></td>
            </tr>
            <tr>
                <td>商品详细描述</td>
                <td>
                    <textarea name="f_goods_introduce">卓越的纤薄设计，却依然为更大的显示屏和更快的芯片预留了空间。超快无线网络连接也不会牺牲电池使用时间。全新耳机带来绝佳音效和非凡贴合的舒适度。如此众多的精彩功能融入这款 iPhone，如此，你才可以享受它的精彩更多。</textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="修改">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>