<?php /* Smarty version Smarty-3.1.11, created on 2012-09-08 08:48:06
         compiled from "..\mysmarty\templates\indexfirst.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12669503f7960c79706-88112907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e1968f51d0b01cebeb16a7f4277d38afe7f3c2' => 
    array (
      0 => '..\\mysmarty\\templates\\indexfirst.tpl',
      1 => 1347094069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12669503f7960c79706-88112907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503f7960d35b39_56860840',
  'variables' => 
  array (
    'count' => 0,
    'time' => 0,
    'rid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7960d35b39_56860840')) {function content_503f7960d35b39_56860840($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=8" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../view/css/photo.css" rel="stylesheet" type="text/css" />
<link href="../view/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../view/js/jquery.js"></script>
<script type="text/javascript" src="../view/js/easySlider1.5.js"></script>
</head>
<body id="bg">
<div id="header2">
</div>
<div>
<span id="time" >
<script type="text/javascript" > 
var myDate=new Date();
var nowtime=myDate.getHours()*3600+myDate.getMinutes()*60+myDate.getSeconds();
//总时间，以分为单位 
if(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
!=1)
	var time = 1800-nowtime+<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; 
else
	time=1800;
//小时 
var h = parseInt(time / 3600) > 0 ? parseInt(time / 3600) : 0; 
//分 
var m =parseInt(time / 60-h*60) > 0 ? parseInt(time / 60-h*60) : 0; 
//秒 
var s = time%60; 
if(time<0)
	h=0,m=0,s=0;
//输出到当前Script的Dom位置 
document.write('<span>剩余<font id="f_mm">' + m + '</font>分钟</span>'); 
//开始执行倒计时 
var timeInterval = setInterval(function () 
{ 
			//如果时、分、秒都为0时将停止当前的倒计时 
		if (h == 0 && m == 0 && s == 0)
		{ 
		alert("考试时间已到");
		clearInterval(timeInterval);
		/*var arr=new Array("q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q12","q13","q14","q15","q16","q17","q18","q19","q20","q21","q22","q23","q24","q25","q26","q27","q28","q29","q30","q31","q32","q33","q34","q35","q36","q37","q38","q39","q40");
		for(var k=0;k<40;k++)
		{
			if(document.getElementById(arr[k]).value=="")
			{
				document.getElementById(arr[k]).value="F";
			}
		}*/
		document.formquestion.submit();
		return; 
		} 
		//当秒走到0时，再次为60秒 
		if (s == 0) 
		{ 
			s = 59; 
			//每次当秒走到0秒时，分钟减一 
			//当分等于0时并且小时还多余1个小时的时候进里面看看 
			if (m == 0 && h > 0) 
			{ 
				//小时减一 
				h -= 1; 
				//分钟自动默认为60分 
				m = 59; 
				//秒自动默认为60秒 
				s = 59; 
			} 
			else
				m-=1;
		}
		else
			s-=1;
		//分钟赋值 
		document.getElementById('f_mm').innerHTML = m; 
}, 1000); 
</script> </span>
</div>
</br></br>
<div class="header_text">
<div class="gallery">
<div id="slider">
<form action="submit.php" method=get name="formquestion" onsubmit="return checkForm()">
<input id="completebutton" onfocus="this.blur()" type=submit value="完成"/>
<input type=hidden name="rid" value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
" />
<ul><?php }} ?>