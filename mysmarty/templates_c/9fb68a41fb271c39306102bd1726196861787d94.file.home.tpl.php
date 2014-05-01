<?php /* Smarty version Smarty-3.1.11, created on 2014-05-01 06:37:39
         compiled from "..\mysmarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15766517d5b09d6cf50-48333290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb68a41fb271c39306102bd1726196861787d94' => 
    array (
      0 => '..\\mysmarty\\templates\\home.tpl',
      1 => 1398878681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15766517d5b09d6cf50-48333290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_517d5b09dcc8d9_37547764',
  'variables' => 
  array (
    'ID' => 0,
    'name' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517d5b09dcc8d9_37547764')) {function content_517d5b09dcc8d9_37547764($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
东南大学软件学院第二届软件建模大赛
</title>
<script>

function handIn()
{
	document.getElementById("group_info").submit();
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
<h1 align=center>东南大学软件学院第二届软件建模大赛</h1>
<br/>
<h1 align=center >学号：<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 <h1>
<h1 align=center >姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <h1>
<h1 align=center >电话：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <h1>



<form id="group_info" action="./group.php" method=post>
<h5 align=center >组员一：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID1"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name1"/></h5>
<h5 align=center >组员二：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID2"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name2"/></h5>
<h5 align=center >组员三：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID3"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name3"/></h5>

</form>

<a href="#" onclick="handIn()" class="button button-circle button-flat-primary">报名</a>


</div>

</body>
</html><?php }} ?>