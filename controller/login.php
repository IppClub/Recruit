<?php
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8"); 
$studentID=$_POST["studentID"];
$pwd=$_POST["pwd"];
$controller=new DB();
if(!preg_match("/^[0-9]+$/",$_POST["studentID"]))
	Header("Location:./noaccount.html");
$row=$controller->select_sentence("student_info","studentID",$studentID);
include("../libs/Smarty.class.php"); 
	$smarty = new Smarty;
	//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
	$smarty ->template_dir='../mysmarty/templates';
	$smarty->config_dir='../mysmarty/configs';
	$smarty ->cache_dir='../mysmarty/cache';
	$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置
if($row==0)
{
	$smarty->assign('info',"用户名不存在");
	$smarty->display('info.tpl');
}
else
{
	$row=mysql_fetch_array($row);
	if($row['pwd']==$pwd)
	{
		session_start();
		// store session data
		$_SESSION['studentID']=$studentID;
		Header("Location:./modify.php");
	}
	else
	{
		$smarty->assign('info',"密码错误");
		$smarty->display('info.tpl');
	}
}
?>