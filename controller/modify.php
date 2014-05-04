<?php	
	include("../model/DB.php");
	header("Content-Type:text/html;charset=UTF-8"); 
	session_start();
	if(!isset($_SESSION['studentID']))
		Header("Location:../view/index.html");
	include("../model/conf.php");
	$referer=$ip.$subUrl."/view/index.html";
	if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
		header("Location: ../index.html");
		exit;
	}
	include("../libs/Smarty.class.php"); 
	$smarty = new Smarty;
	//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
	$smarty ->template_dir='../mysmarty/templates';
	$smarty->config_dir='../mysmarty/configs';
	$smarty ->cache_dir='../mysmarty/cache';
	$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置
	$controller=new DB();
	$row=$controller->select_sentence("student_info","studentID",$_SESSION['studentID']);
	if($row==0){
		Header("Location:../controller/home.php");
	}
	else
	{
		$row=mysql_fetch_array($row);

		$name=$row["name"];
		$studentID=$row["studentID"];
		$phone=$row["phone"];
		
		$_SESSION['name']=$name;
		$smarty->assign('name',$name);
		$smarty->assign('studentID',$studentID);
		$smarty->assign('phone',$phone);
		$smarty->display('modify.tpl');
	}
	
?>