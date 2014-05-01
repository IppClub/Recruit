<?php /* Smarty version Smarty-3.1.11, created on 2012-09-08 07:52:51
         compiled from "..\mysmarty\templates\indexagain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21079503f79e910b656-80536016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e9e090f91739b8afb89ebc39fe15c3b9dc562c' => 
    array (
      0 => '..\\mysmarty\\templates\\indexagain.tpl',
      1 => 1347090632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21079503f79e910b656-80536016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503f79e9181bb0_44170186',
  'variables' => 
  array (
    'wronginfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f79e9181bb0_44170186')) {function content_503f79e9181bb0_44170186($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
	alert("<?php echo $_smarty_tpl->tpl_vars['wronginfo']->value;?>
");
</script>
<title>欢迎进入东南大学校史校情知识竞赛答题系统</title>
</head>
<meta http-equiv="x-ua-compatible" content="ie=8" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<link rel="stylesheet" href="../view/css/style1.css" />
	<script src="../view/js/jquery.js"></script>
	<script src="../view/js/jquery.slide-packer.js"></script>
	<script>
	$(document).ready(function() {
		$('#slider').slide({
			effect: 'random', // random/normal/scroll/fade/fold/slice/slide/shutter/grow
			//direction: 'y',
			speed: 'slow',
			navCls: 'switchable-nav',
			contentCls: 'switchable-content',
			caption: true,
			prevBtnCls:'ui-prev',
            nextBtnCls:'ui-next',
			evtype: 'click'
		});
	});
	</script>
	<script type="text/javascript">
		
		function checkForm(){
			userrid = document.form1.rid.value;
			userpwd = document.form1.pwd.value;
			useryzm = document.form1.yzm.value;

			if (userrid=="") 
			{

			alert("请输入一卡通号");

			document.form1.rid.focus();

			return false;

			}
			else if(isNaN(userrid))
			{
				alert("一卡通号必须为数字");

				document.form1.rid.focus();

				return false;
			}
			else if (userpwd=="")
 			{

				alert("请输入学号");

				document.form1.pwd.focus();

				return false;

			}
			else if (useryzm=="")
 			{

				alert("请输入验证码");

				document.form1.yzm.focus();

				return false;

			}
			else
				return true;

			}	
		function refreshCheckCode(checkCodeImg) 
		{
			checkCodeImg.src="../model/checkNumber.php?now=" + new Date();
		}
		function alertError(reason){
	
			if(reason != '' || reason == null){
				alert(reason);
			}
		}
		
		
     </script>

<style type="text/css">
body 
{ 
margin:0;
padding:0;
background:url(../view/images/main.png) no-repeat;
background-attachment:fixed;
background-position:center;
}
#header { margin:0px auto; width:960px; height:120px;}
#band { position:relative; heigt:80px; width:80px; top:20px;  }
#main { margin:5px auto; width:960px; height:500px;}
#form { margin:5px auto; height:95px; width:610px; border="0"; cellpadding="0"; cellspacing="0";background-image:url(../view/images/table.png);}
#footer { margin:-30px auto; height:80px;width:600px; background-image:url(../view/images/footer.png);background-position:center;background-repeat:no-repeat;}
h2.group { font-family:Serif;font-size:15px;line-height:5px; }
h3.last { font-family:Serif;font-size:10px;}
</style>
</head>
<body  >
<div id="header">
<img src="../view/images/badge.png" id="band">
<img src="../view/images/anniversary.png" id="band">
<img src="../view/images/head.png">
</div>
<div id="main">
<div style="position:relative;top:0px;height:10px;width:600px;"></div>
<div id="slider" class="slider">
	<div class="switchable-box">
		<ul class="switchable-content">
			<li><img src="../view/images/hall.png" alt="" /></li>
			<li><img src="../view/images/library.png" alt=""  /></li>
			<li><img src="../view/images/yifuhall.png" alt="" /></li>
			<li><img src="../view/images/gym.png" alt=""  /></li>
		</ul>
		<div class="ui-arrow">
			<a class="ui-prev"></a>
			<a class="ui-next"></a>
		</div>
	</div>
</div>
</div>
<form method="POST"  onsubmit="return checkForm();" action="login.php" name="form1">
<div id="form">
<input type="text" name="rid" size="12" style="background:transparent;border:0;margin:44px 0 0 35px;"/>
<input type="password" name="pwd" size="12" style="background:transparent;border:0;margin:0 0 0 57px;"/> 
<input type="text" name="yzm" size="4" style="background:transparent;border:0;margin:0 0 0 58px;"/>
<div style="margin:-26px 0 0 428px;"><img src="../model/checkNumber.php" height=24px; style="cursor:hand;margin:4px 0 0 0;" title="点击更新" onclick="refreshCheckCode(this)"/> <input type="image" src="../view/images/submit.png" style="border:0 solid black; HEIGHT: 31px; width:91px; margin:0 0 0 10px;"/></div>
</div>
</form>
</br></br></br>
<div  id="footer">
</div>
</body>
</html><?php }} ?>