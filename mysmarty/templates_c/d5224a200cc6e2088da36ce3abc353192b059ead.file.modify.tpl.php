<?php /* Smarty version Smarty-3.1.11, created on 2014-05-03 18:23:11
         compiled from "..\mysmarty\templates\modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16148517d64f2cc0ae3-36852174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5224a200cc6e2088da36ce3abc353192b059ead' => 
    array (
      0 => '..\\mysmarty\\templates\\modify.tpl',
      1 => 1399134185,
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
I++ 俱乐部报名
</title>

<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
<script type="text/javascript" src="../view/js/formChecker.js"></script>
<script type="text/javascript" src="../view/js/jquery-1.9.1.js"></script>
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
function modify(){
    var uname = $("#name").val();
    var uid   = $("#studentID").val();
    var uphone = $("#phone").val();
    
    if(modifyCheck(uname,uid,uphone)){
        document.getElementById("modify_info").submit();
    }
}
</script>

<style text="text/css">
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
    left: 38%;
    height: 60%;
}
.modify_btn{
    position: fixed;
    top: 73%;
    width: 20%;
    left: 41%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
</style>
</head>
<body>
<div id="header" class="header">
    <h1>报名个人信息</h1>
</div>
<div id="modify_frame" class="modify_frame">
    <form id="modify_info" action="./infoModify.php" method=post>
        <h2>姓名: <input class="input" type=text placeholder="姓名" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></h2>
        <h2>学号: <input class="input" type=text placeholder="学号" id="studentID" name="studentID" value="<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
" /></h2>
        <h2>电话: <input class="input" type=text placeholder="手机" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /></h2>
    </form>
</div>
<div>
    <button href="#" onclick="modify()" class="modify_btn btn btn-primary btn-lg">修改信息</button>
</div>

</body>
</html><?php }} ?>