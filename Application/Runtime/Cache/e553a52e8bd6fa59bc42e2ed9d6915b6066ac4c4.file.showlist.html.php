<?php /* Smarty version Smarty-3.1.6, created on 2017-02-04 11:20:36
         compiled from "./Application/Admin/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1840758954884222066-87221152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e553a52e8bd6fa59bc42e2ed9d6915b6066ac4c4' => 
    array (
      0 => './Application/Admin/View\\Goods\\showlist.html',
      1 => 1485928903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840758954884222066-87221152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5895488435ab9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895488435ab9')) {function content_5895488435ab9($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>会员列表</title>

    <link href="<?php echo @__PUBLIC__;?>
/Admin/css/mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
    
    .tr_color{background-color: #9F88FF}
    
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Goods/add">【添加商品】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
            <td>序号</td>
            <td>商品名称</td>
            <td>库存</td>
            <td>价格</td>
            <td>图片</td>
            <td>缩略图</td>
            <td>品牌</td>
            <td>创建时间</td>
            <td align="center">操作</td>
        </tr>
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr id="product1">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
            <td><img src="<?php echo @__PUBLIC__;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60"></td>
            <td><img src="<?php echo @__PUBLIC__;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
            <td>苹果apple</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_create_time'];?>
</td>
            <td><a href="<?php echo @__MODULE__;?>
/Goods/upd">修改</a></td>
            <td>
                <a onclick="if (confirm('确定要删除吗？')) return true; else return false;"
                   href="<?php echo @__CONTROLLER__;?>
/del/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
" >删除</a>
                <a href="javascript:;" onclick="<?php echo @__MODULE__;?>
/Goods/delete">删除</a>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="20" style="text-align: center;">
                <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html><?php }} ?>