var choice = 1;


function valideForm(name, pwd, id, phone)
{
	nameRe=/[\u4e00-\u9fa5]{2,4}/;
	pwdRe=/\w{3,16}/;
	IDre=/^(71113140)|(71113[1-4]([0-3][1-9])|([1-3]0))$/;
	phoneRe=/^(13)|(15)|(18)\d{9}$/;
	
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
			.animate({top:'28.5%'})
			.css("display","inline");
			break;
		case 1:
			$("#alert_danger").val("密码格式不太对")
			.animate({top:'38%'})
			.css("display","inline");
			break;
		case 2:
			$("#alert_danger").val("学号是不对啊")
			.animate({top:'47%'})
			.css("display","inline");
			break;
		case 3:
			$("#alert_danger").val("手机号是胡写的吧")
			.animate({top:'56%'})
			.css("display","inline");
			break;
	}
}

function continueStep(){
    var uname = $("#name").val();
    var upwd = $("#pwd").val();
    var ustudentID = $("#studentID").val();
    var uphone = $("#phone").val();
    // var rawdata = ;
    // rawdata = rawdata.serialize();
    if (true == valideForm(uname, upwd, ustudentID, uphone)) {
        $("#register").submit();
        // $.post("../controller/register.php",
        // {
        // 	"name":uname,
        // 	"pwd":upwd,
        // 	"studentID":ustudentID,
        // 	"phone":uphone
        // },
        // function(ret){
        // 	if(ret=="pass") {
        //     	alert("正在递交您的内容："+name + " " + pwd + " " + studentID + " " + phone);
        // 	}
        // 	else if(ret=="wname"){
        // 		alert("wname");
        // 	}
        // 	else if(ret=="wphone"){
        // 		alert("wphone");
        // 	}
        // 	else if(ret=="wpwd"){
        // 		alert("wpwd");
        // 	}
        // 	else if(ret=="wstudentID"){
        // 		alert("wstudentID");
        // 	}
        // });
        
     //    $.ajax({
		   //  type: 'POST',
		   //  url: '../controller/register.php',
		   //  data: rawdata,
		   //  dataType:'json',
		   //  contentType:"application/json;charset=utf-8", 
		   //  success: function(data) {
		   //  	alert("success");
		   //      // $("#result").html(JQuery.parseJSON(data));
		   //     },    
		   //  error: function(XMLHttpRequest, textStatus, errorThrown) { 
		   //       alert("textStatus: " + textStatus);
		   //       alert("errorThrown: " + errorThrown);
	    //     }       
	    // });

    } else {
    	// alert("总之好像出了些什么问题");
    }
}
