<?php /* Smarty version Smarty-3.1.11, created on 2014-05-02 16:56:38
         compiled from "..\mysmarty\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12395518a5d508b4f05-09048999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186469efd64ad4e8bbf4297977f46622d495184d' => 
    array (
      0 => '..\\mysmarty\\templates\\info.tpl',
      1 => 1399042592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12395518a5d508b4f05-09048999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_518a5d509bf858_19602989',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a5d509bf858_19602989')) {function content_518a5d509bf858_19602989($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
.info_frame{
    position: fixed;
    top: 26%;
    width: 70%;
    left: 39%;
    height: 60%;
}
.info_btn{
    position: fixed;
    top: 70%;
    width: 20%;
    left: 35%;
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
<div class="info_frame">
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<h1>
</div>

<div id="info_btn">
    <button onclick="redirect()" class="info_btn btn btn-primary btn-lg">回到首页</button>
</div>

</body>
</html><?php }} ?>