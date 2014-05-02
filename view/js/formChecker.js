function handInRegister()//判断输入&&提交表单
{
	//get elements
	var id=document.getElementById("studentID");
	var name=document.getElementById("name");
	var phone=document.getElementById("phone");
	var pwd=document.getElementById("pwd");
	//regular expressions
	IDre=/^(71113140)|(71113[1-4]([0-3][1-9])|([1-3]0))$/;
	nameRe=/^[\u4e00-\u9fa5]{2,4}$/;
	phoneRe=/^\d{11}$/;
	pwdRe=/[0-9a-zA-Z]{3,16}/;

	if(!IDre.test(id.value)){
		document.getElementById("alert_danger").innerHTML="学号不正确";
		document.getElementById("alert_danger").style.display="block";

	}else if(!nameRe.test(name.value)){
		document.getElementById("alert_danger").innerHTML="姓名错了吧-_-|";
		document.getElementById("alert_danger").style.display="block";
	}else if(!phoneRe.test(phone.value)){
		document.getElementById("alert_danger").innerHTML="手机号码格式不正确";
		document.getElementById("alert_danger").style.display="block";
	}else if(!pwdRe.test(pwd.value)){
		document.getElementById("alert_danger").innerHTML="密码格式不正确";
		document.getElementById("alert_danger").style.display="block";
	}else{
		document.getElementById("register").submit();
	}
}