<?php /* Smarty version Smarty-3.1.11, created on 2014-05-02 15:43:28
         compiled from "..\mysmarty\templates\registerRe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210875361e222c55029-73528568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1bf9b16dd4f69219babb0d8603ee2147237e34' => 
    array (
      0 => '..\\mysmarty\\templates\\registerRe.tpl',
      1 => 1399038191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210875361e222c55029-73528568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5361e222d10854_03688365',
  'variables' => 
  array (
    'info' => 0,
    'ID' => 0,
    'name' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5361e222d10854_03688365')) {function content_5361e222d10854_03688365($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部14届招新报名
</title>
</head>
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>

<body id="max">

<div class=wrapper>

<br/>
<br/>
<h1 align=center>I++ 俱乐部14届招新报名</h1>
<br/>
<br/>
<h1 align=center ><font color=red><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</font><h1>
<br/>
<h1 align=center >学号：<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 <h1>
<h1 align=center >姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <h1>
<h1 align=center >电话：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <h1>

<a href="../../index.html"  class="button button-circle button-flat-primary">返回首页</a>
</div>

</body>
</html><?php }} ?>