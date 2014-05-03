<?php /* Smarty version Smarty-3.1.11, created on 2014-05-03 07:17:53
         compiled from "..\mysmarty\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3039353647c01dbfd40-63665793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186469efd64ad4e8bbf4297977f46622d495184d' => 
    array (
      0 => '..\\mysmarty\\templates\\info.tpl',
      1 => 1399094202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3039353647c01dbfd40-63665793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53647c01e31806_86400910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53647c01e31806_86400910')) {function content_53647c01e31806_86400910($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 报名结果
</title>

<style type="text/css">
h1{
    font-family: "Microsoft Yahei";
}
h2{
    font-family: "Microsoft Yahei";
}
.modify_frame{
    position: fixed;
    top: 28%;
    width: 70%;
    left: 34%;
    height: 60%;
}
.modify_btn{
    position: fixed;
    top: 73%;
    width: 20%;
    left: 37%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
</style>
<script type="text/javascript" src="../../view/js/formChecker.js"></script>
</head>


<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/style.css">

<body>

<div id="header" class="header">
    <h1>报名结果</h1>
</div>
<div class="modify_frame">
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<h1>
</div>

<div id="info_btn">
    <button onclick="redirect()" class="modify_btn btn btn-primary btn-lg">回到首页</button>
</div>

</body>
</html><?php }} ?>