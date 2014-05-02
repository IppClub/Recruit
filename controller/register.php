<?php 
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8");
// header('Content-type: application/json;charset=UTF-8');
// $post_data = $_POST[]
// $postData = json_decode($_POST);
// echo $postData;
// return;
$name = $_POST["name"];
$pwd = $_POST["pwd"];
$studentID = $_POST["studentID"];
$phone = $_POST["phone"];

$controller=new DB();
include("../libs/Smarty.class.php"); 
$smarty = new Smarty;
//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）
$smarty ->template_dir='../mysmarty/templates';
$smarty->config_dir='../mysmarty/configs';
$smarty ->cache_dir='../mysmarty/cache';
$smarty ->compile_dir='../mysmarty/templates_c';
	//上面四行为使用Smarty前的必要参数配置
if(!preg_match("/[\x{4e00}-\x{9fa5}]/u", $name)){
	$smarty->assign('info',"名字错了吧");
	$smarty->display('info.tpl');
	// return "wname";
}
else if(!preg_match("/^[0-9a-zA-Z]{3,16}$/",$pwd)){
	$smarty->assign('info',"密码写得不太对");
	$smarty->display('info.tpl');
	// return "wpwd";
}
else if(!preg_match("/^(71113140)|(71113[1-4]([0-3][1-9])|([1-3]0))$/",$studentID))
{
	$smarty->assign('info',"学号错了吧。。");
	$smarty->display('info.tpl');
	// return "wstudentID";
}
else if(!preg_match("/^\d{11}$/",$phone)){
	$smarty->assign('info',"您绝壁填错了手机号");
	$smarty->display('info.tpl');
	// return "wphone";
}
else
{
	// return "pass";
	$row=$controller->select_sentence("student_info","studentID",$studentID);
	if($row!=0)
	{
		$smarty->assign('info',"用户名已存在");
		$smarty->display('info.tpl');
	}
	else
	{
		$controller->save($studentID,$name,$phone,$pwd);
		$row=$controller->select_sentence("student_info","studentID",$studentID);
		$row=mysql_fetch_array($row);

		$name=$row["name"];
		$ID = $row["studentID"];
		$phone = $row["phone"];

		$smarty->assign('ID',$ID);
		$smarty->assign('name',$name);
		$smarty->assign('phone',$phone);
		$smarty->assign('info','报名成功！');

		$smarty->display('registerRe.tpl');
		// session_start();
		// // store session data
		// $_SESSION['studentID']=$studentID;
		// $_SESSION['name']=$name;
		// Header("Location:./home.php");
	}
}
?>