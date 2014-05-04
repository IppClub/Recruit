<?php /* Smarty version Smarty-3.1.11, created on 2014-05-04 14:22:19
         compiled from "..\mysmarty\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76145365e1178f78d6-84750916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186469efd64ad4e8bbf4297977f46622d495184d' => 
    array (
      0 => '..\\mysmarty\\templates\\info.tpl',
      1 => 1399203707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76145365e1178f78d6-84750916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5365e117961077_71599377',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5365e117961077_71599377')) {function content_5365e117961077_71599377($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
I++ 报名结果
</title>


<script type="text/javascript" src="../view/js/formChecker.js"></script>
<script type="text/javascript" src="../view/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../view/js/bootstrap.js"></script>
<script type="text/javascript" src="../view/js/actions.js"></script>
<script type="text/javascript" src="../view/js/info.js"></script>



<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
<style type="text/css">
.info_frame{
    position: fixed;
    top: 26%;
    width: 70%;
    left: 39%;
    height: 60%;
}
.info_btn{
    position: fixed;
    margin:top: 70%;
    width: 20%;
    top:65%;
    left: 38%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
h1{ font-family: "Microsoft Yahei"; font-weight: bolder;}

</style>
</head>




<body>

<div id="header" class="header">
    <h1>报名结果</h1>
</div>
<div class="info_frame">
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<h1>
</div>

<div id="info_btn">
    <button id="backwards" onclick="redirect()" class="info_btn btn btn-primary btn-lg">回到首页</button>
</div>

</body>
</html><?php }} ?>