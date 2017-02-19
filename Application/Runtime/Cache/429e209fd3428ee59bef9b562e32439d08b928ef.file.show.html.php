<?php /* Smarty version Smarty-3.1.6, created on 2017-02-04 11:11:09
         compiled from "./Application/Home/View\Index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:302415895464d0c64c0-81342427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429e209fd3428ee59bef9b562e32439d08b928ef' => 
    array (
      0 => './Application/Home/View\\Index\\show.html',
      1 => 1484880361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302415895464d0c64c0-81342427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5895464d33ca5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895464d33ca5')) {function content_5895464d33ca5($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show</title>
</head>
<body>
<a><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</a><br>
<a><?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
</a>

</body>
</html><?php }} ?>