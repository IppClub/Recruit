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
    var name = $("#name").val();
    var pwd = $("#pwd").val();
    var studentID = $("#studentID").val();
    var phone = $("#phone").val();
    var rawdata = { "name":name, "pwd":pwd, "studentID":studentID, "phone":phone };
    if (true == valideForm(name, pwd, studentID, phone)) {
        // $.post("../controller/register.php", rawdata).success(function(){
        //     alert("正在递交您的内容："+name + " " + pwd + " " + studentID + " " + phone);
        // });

        $.ajax({
		    type: 'POST',
		    url: '../controller/register.php',
		    data: rawdata,
		    dataType:'json',
		    contentType:"application/json;charset=utf-8", 
		    success: function(data) {
		    	alert("YEAH!");
		        // $("#result").html(JSON.parse(data));
		       },    
		    error: function(XMLHttpRequest, textStatus, errorThrown) { 
		        // $("#result").html("failed content: " + $str['id']+" " + $str['cat'] + " " + $str['price'] + " " + $str['num'] + "<br>failed reason: " + textStatus+" " + errorThrown + "<br/>" + XMLHttpRequest.responseText);
		         
	        //alert("error " + XMLHttpRequest.responseText);
	        	alert(JSON.parse(rawdata));
	        }       
	    });

    } else {
    	alert("总之好像出了些什么问题");
    }
}
