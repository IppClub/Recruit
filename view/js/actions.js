$(document).ready(function(){
    var ie = !-[1,];
    if (ie) {
        window.location.href = "../view/loser.html";
    }
    // else {
        // window.location = "./view/index.html";
    // }
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

