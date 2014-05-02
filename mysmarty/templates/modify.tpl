<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部报名
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
h1{
    font-family: "Microsoft Yahei";
}
h2{
    font-family: "Microsoft Yahei";
}
.modify_frame{
    position: fixed;
    top: 28%;
    width: 70%;
    left: 34%;
    height: 60%;
}
.modify_btn{
    position: fixed;
    top: 73%;
    width: 20%;
    left: 37%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
</style>
</head>
<body>
<div id="header" class="header">
    <h1>报名个人信息</h1>
</div>
<div id="modify_frame" class="modify_frame">
    <form id="modify_info" action="./infoModify.php" method=post>
        <h2>姓名: <input class="input" type=text placeholder="姓名" name="name" value="{$name}" /></h2>
        <h2>学号: <input class="input" type=text placeholder="学号" name="studentID" value="{$studentID}" /></h2>
        <h2>电话: <input class="input" type=text placeholder="手机" name="phone" value="{$phone}" /></h2>
    </form>
</div>
<div>
    <button href="#" onclick="modify()" class="modify_btn btn btn-primary btn-lg">修改信息</button>
</div>

</body>
</html>