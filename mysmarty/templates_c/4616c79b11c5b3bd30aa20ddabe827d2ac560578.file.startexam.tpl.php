<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 16:21:37
         compiled from "..\mysmarty\templates\startexam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798050436b710b8691-38699372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4616c79b11c5b3bd30aa20ddabe827d2ac560578' => 
    array (
      0 => '..\\mysmarty\\templates\\startexam.tpl',
      1 => 1345953154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798050436b710b8691-38699372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'rid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50436b71152818_92509081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50436b71152818_92509081')) {function content_50436b71152818_92509081($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=8" />
<link href="../view/css/style.css" rel="stylesheet" type="text/css" />
<title>欢迎进入东南大学校史知识竞赛系统</title>
</head>
<body>
<div id="header">
</div>
<div id="wel">
<div id="nowcount">欢迎&nbsp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
<form action='../controller/start.php' method=get >
<input type=hidden name='rid' value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
"/>
<input class="startbutton" onfocus="this.blur()"  type=submit value="开始答题"/>
</form>
<form id="searchbutton" action='../controller/search.php' method=get >
<input type=hidden name='rid' value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
"/>
<input class="searchbutton" onfocus="this.blur()" type=submit value="查询成绩"/>
</form>
 </div>
 <img class="history" src="../view/images/history.png"/>
</body>
</html><?php }} ?>