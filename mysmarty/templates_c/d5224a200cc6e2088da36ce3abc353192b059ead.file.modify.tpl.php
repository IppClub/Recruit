<?php /* Smarty version Smarty-3.1.11, created on 2014-05-01 08:14:38
         compiled from "..\mysmarty\templates\modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16148517d64f2cc0ae3-36852174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5224a200cc6e2088da36ce3abc353192b059ead' => 
    array (
      0 => '..\\mysmarty\\templates\\modify.tpl',
      1 => 1398924727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16148517d64f2cc0ae3-36852174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_517d64f2d9b964_91162032',
  'variables' => 
  array (
    'name' => 0,
    'studentID1' => 0,
    'name1' => 0,
    'studentID2' => 0,
    'name2' => 0,
    'studentID3' => 0,
    'name3' => 0,
    'studentID' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517d64f2d9b964_91162032')) {function content_517d64f2d9b964_91162032($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部14届招新报名
</title>
<script>
function hover()
{
	obj=document.getElementById("button");
	obj.src="../view/modifyhover.png";
}function leave()
{
	obj=document.getElementById("button");
	obj.src="../view/modify.png";
}
function modify()
{
	document.getElementById("modify_info").submit();
}
</script>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/style.css">
</head>
<body id="max">
<div  class=wrapper>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h1 align=center>I++ 俱乐部14届招新报名</h1>
<br/>
<!-- <h1 align=center >队长：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <h1>

<form id="group_info" action="./groupmodify.php" method=post>
<h5 align=center >队员一：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID1" value="<?php echo $_smarty_tpl->tpl_vars['studentID1']->value;?>
" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
" /></h5>
<h5 align=center >队员二：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID2" value="<?php echo $_smarty_tpl->tpl_vars['studentID2']->value;?>
" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
" /></h5>
<h5 align=center >队员三：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID3" value="<?php echo $_smarty_tpl->tpl_vars['studentID3']->value;?>
" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name3" value="<?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
" /></h5>
</form>
 -->
<form id="modify_info" action="./infoModify.php" method=post>
<h5 align=center >学号：<input type=text class=input placeholder="学号" name="studentID" value="<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
" /></h5>
<h5 align=center >姓名：<input type=text class=input placeholder="姓名" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></h5>
<h5 align=center >手机：<input type=text class=input placeholder="手机" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /></h5>
</form>

<a href="#" onclick="modify()" class="button button-circle button-flat-primary">修改</a>

</div>

</body>
</html><?php }} ?>