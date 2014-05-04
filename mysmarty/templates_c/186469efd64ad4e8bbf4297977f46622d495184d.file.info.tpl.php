<?php /* Smarty version Smarty-3.1.11, created on 2014-05-04 08:41:27
         compiled from "..\mysmarty\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76145365e1178f78d6-84750916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186469efd64ad4e8bbf4297977f46622d495184d' => 
    array (
      0 => '..\\mysmarty\\templates\\info.tpl',
      1 => 1399180757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76145365e1178f78d6-84750916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5365e117961077_71599377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365e117961077_71599377')) {function content_5365e117961077_71599377($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
    left: 43%;
    height: 60%;
}
.info_btn{
    position: fixed;
    margin:top: 70%;
    width: 20%;
    left: 42%;

    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
</style>
<script type="text/javascript" src="../view/js/formChecker.js"></script>
</head>


<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/style.css">

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