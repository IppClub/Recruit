<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部14届招新报名
</title>
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
	document.getElementById("modify_info").submit();
}
</script>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/Buttons/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../../view/css/style.css">

<style text="text/css">
/*.input{
    outline: none;
    border-radius: 10px;
    height:40px;
    width:240px;
    line-height:30px;
    border-right:none;
    margin: 0.5%;
    vertical-align:middle;
}*/
</style>
</head>
<body>
<div>
<!-- <br/>
<br/>
<br/>
<br/>
<br/>
<br/>
 -->
 <h1>I++ 俱乐部14届招新报名</h1>
<!-- <br/> -->
<!-- <h1 align=center >队长：{$name} <h1>

<form id="group_info" action="./groupmodify.php" method=post>
<h5 align=center >队员一：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID1" value="{$studentID1}" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name1" value="{$name1}" /></h5>
<h5 align=center >队员二：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID2" value="{$studentID2}" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name2" value="{$name2}" /></h5>
<h5 align=center >队员三：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID3" value="{$studentID3}" />&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name3" value="{$name3}" /></h5>
</form>
 -->
<form id="modify_info" action="./infoModify.php" method=post>
<h2>学号：<input class="input" type=text placeholder="学号" name="studentID" value="{$studentID}" /></h2>
<h2>姓名：<input class="input" type=text placeholder="姓名" name="name" value="{$name}" /></h2>
<h2>手机：<input class="input" type=text placeholder="手机" name="phone" value="{$phone}" /></h2>
</form>

<a href="#" onclick="modify()" class="btn btn-primary btn-lg">修改</a>

</div>

</body>
</html>