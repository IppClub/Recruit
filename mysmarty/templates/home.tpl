<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部14届招新报名
</title>
<script>

function handIn()
{
	document.getElementById("group_info").submit();
}

</script>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons\css\font-awesome-ie7.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/style.css">
</head>
<body id="max">
<div  class=wrapper>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h1 align=center>I++ 俱乐部14届招新报名</h1>
<br/>
<h1 align=center >学号：{$ID} <h1>
<h1 align=center >姓名：{$name} <h1>
<h1 align=center >电话：{$phone} <h1>



<form id="group_info" action="./group.php" method=post>
<h5 align=center >组员一：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID1"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name1"/></h5>
<h5 align=center >组员二：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID2"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name2"/></h5>
<h5 align=center >组员三：<br/><br/>学号：<input type=text class=input placeholder="学号" name="studentID3"/>&nbsp;&nbsp;姓名：<input type=text class=input placeholder="姓名" name="name3"/></h5>

</form>

<a href="#" onclick="handIn()" class="button button-circle button-flat-primary">报名</a>


</div>

</body>
</html>