<?php
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8");
include("../model/conf.php");
$referer=$ip.$subUrl."/controller/modify.php";

if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
		header("Location: ../index.html");
		exit;
} 
session_start();
$studentID=$_SESSION["studentID"];
$name=$_SESSION["name"];

$studentID=$_POST["studentID"];
$name=$_POST["name"];
$phone=$_POST["phone"];
if(!preg_match("/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/",$studentID))
{
	$smarty->assign('info',"学号错了吧。。");
	$smarty->display('info.tpl');
}
else if(!preg_match("/[\x{4e00}-\x{9fa5}]/u", $name)){
	$smarty->assign('info',"名字错了吧");
	$smarty->display('info.tpl');
}
else if(!preg_match("/^\d{11}$/",$phone)){
	$smarty->assign('info',"绝壁填错了手机号");
	$smarty->display('info.tpl');
}
else{
		$controller=new DB();
		$controller->updateInfo($studentID,$name,$phone);
		include("../libs/Smarty.class.php"); 
		$smarty = new Smarty;
		//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
		$smarty ->template_dir='../mysmarty/templates';
		$smarty->config_dir='../mysmarty/configs';
		$smarty ->cache_dir='../mysmarty/cache';
		$smarty ->compile_dir='../mysmarty/templates_c';
		//上面四行为使用Smarty前的必要参数配置
		$smarty->assign('info',"修改成功");
		$smarty->display('info.tpl');
}
?>