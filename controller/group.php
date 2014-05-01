<?php
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8"); 
session_start();
$studentID=$_SESSION["studentID"];
$name=$_SESSION["name"];
$studentID1=$_POST["studentID1"];
$name1=$_POST["name1"];
$studentID2=$_POST["studentID2"];
$name2=$_POST["name2"];
$studentID3=$_POST["studentID3"];
$name3=$_POST["name3"];
$controller=new DB();
$controller->savegroup($studentID,$name,$studentID1,$name1,$studentID2,$name2,$studentID3,$name3);
include("../libs/Smarty.class.php"); 
	$smarty = new Smarty;
	//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
	$smarty ->template_dir='../mysmarty/templates';
	$smarty->config_dir='../mysmarty/configs';
	$smarty ->cache_dir='../mysmarty/cache';
	$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置
	$smarty->assign('info',"报名成功");
	$smarty->display('info.tpl');
?>