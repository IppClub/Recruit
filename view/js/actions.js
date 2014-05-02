$(document).ready(function(){
    $("#headtitle").css("display","none")
    .fadeIn("slow")
    .css("display","inline");

    $("#operatebtns").fadeOut().css("display","none");

    $("#bgm").css("display","none")
    .fadeIn("slow")
    .css("display","inline");
});



function hover(id,action){
    obj=document.getElementById(id);
    obj.src="./resources/"+action+"hover.png";
}
function leave(id,action){
    obj=document.getElementById(id);
    obj.src="./resources/"+action+".png";
}

function backChocie(){
    $("#login_choice").fadeIn();
    $("#register_choice").fadeIn();
    $("#register_form").slideUp();
    $("#operatebtns").css("display","none");
    
    $("#welcome_label").fadeIn().css("display","inline");

}

function displayLoginSection(){
    $("#operatebtns").css("display","none");
    $("#operatebtns").fadeIn("slow");
    $("#operatebtns").css("display","inline");

    $("#welcome_label").css("display","none");

    $("#register_form").css("display","none")
    .slideDown("slow")
    .css("display","inline");
    $("#registerSection").slideUp("slow");

    $("#login_choice").fadeOut();
    $("#register_choice").fadeOut();
    choice = 0;
}


function displayRegisterSection(){
    $("#operatebtns").css("display","none")
    .fadeIn("slow")
    .css("display","inline");

    $("#welcome_label").css("display","none");
    $("#register_form").css("display","none").slideDown();
    $("#registerSection").slideDown();
    $("#register_form").css("display","inline");

    $("#register_choice").fadeOut();
    $("#login_choice").fadeOut();
    choice = 1;
}

function hideAlert(){
    document.getElementById("alert_danger").style.display = "none";
}

function continueStep(){
    var name = $("#name").val();
    var pwd = $("#pwd").val();
    var studentID = $("#studentID").val();
    var phone = $("#phone").val();
    var data = { "name":name, "pwd":pwd, "studentID":studentID, "phone":phone };
    if (true == valideForm(name, pwd, studentID, phone)) {
        $.post("../controller/register.php", data).success(function(){
            alert(name + " " + pwd + " " + schoolId + " " + phone);
        });
    }
}
