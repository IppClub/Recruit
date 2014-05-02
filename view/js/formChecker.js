var choice = 1;


function valideForm(name, pwd, id, phone)
{
	nameRe=/^[\u4e00-\u9fa5]{2,4}$/;
	pwdRe=/\w{3,16}/;
	IDre=/^(71113140)|(71113[1-4]([0-3][1-9])|([1-3]0))$/;
	phoneRe=/^\d{11}$/;
	
	if(!nameRe.test(name)){
		showAlertMesg(0);
	}
	else if(!pwdRe.test(pwd)){
		showAlertMesg(1);
	}
	else if(!IDre.test(id)){
		showAlertMesg(2);
	}
	else if(!phoneRe.test(phone)) {
		showAlertMesg(3);
	}
	else{
		return true;
	}
	return false;
}

function showAlertMesg(cases){
	switch(cases){
		case 0:
			$("#alert_danger").val("姓名错了吧-_-|")
			.css("display","inline");
			break;
		case 1:
			$("#alert_danger").val("密码格式不太对")
			.css("display","inline")
			.animate({top: '34%;'});
			break;
		case 2:
			$("#alert_danger").val("学号是不对啊")
			.css("display","inline")
			.animate({top: '39%;'});
			break;
		case 3:
			$("#alert_danger").val("手机号是胡写的吧")
			.css("display","inline")
			.animate({top: '44%;'});
			break;
	}
}