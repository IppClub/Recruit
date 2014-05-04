<?php 
include("../model/DB.php");
header("Content-Type:text/html;charset=UTF-8");
include("../model/conf.php");
$referer=$ip.$subUrl."/view/index.html";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
if(strcmp($_SERVER['HTTP_REFERER'], $referer)!=0){
	header("Location: ../index.html");
	exit;
}
$name = $_POST["name"];
$pwd = $_POST["pwd"];
$studentID = $_POST["studentID"];
$phone = $_POST["phone"];

$controller=new DB();
include("../libs/Smarty.class.php"); 
$smarty = new Smarty;
//下面的(你的网站目录)用绝对路径，可以用相对路径（./templates）

//smarty configuration
$smarty ->template_dir='../mysmarty/templates';
$smarty->config_dir='../mysmarty/configs';
$smarty ->cache_dir='../mysmarty/cache';
$smarty ->compile_dir='../mysmarty/templates_c';
//上面四行为使用Smarty前的必要参数配置
if(!preg_match("/^(71113140)|(71113[1-4](([0-3][1-9])|([1-3]0)))$/",$studentID))
{
	$smarty->assign('info',"学号错了吧。。");
	$smarty->display('info.tpl');
}
else if(!preg_match("/^[0-9a-zA-Z]{3,16}$/",$pwd)){
	$smarty->assign('info',"密码写得不太对");
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