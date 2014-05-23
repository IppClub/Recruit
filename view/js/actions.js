

function timing(sec, t){
    if (sec >= 1){
        document.getElementById('backwards').innerHTML = "返回首页("+sec+")";
        sec--;
        t = setTimeout('timing('+sec+')',1000);
    }
    else {
        clearTimeout(t);
        window.location.href = "../../index.html";
    }
}    


// function hover(id,action){
//     obj=document.getElementById(id);
//     obj.src="./resources/"+action+"hover.png";
// }
// function leave(id,action){
//     obj=document.getElementById(id);
//     obj.src="./resources/"+action+".png";
// }

function backChocie(){
    $("#login_choice").fadeIn();
    $("#register_choice").fadeIn();
    $("#register_form").slideUp();
    $(".operatebtns").css("display","none");
    
    $("#welcome_label").fadeIn().css("display","block");
}

function displayLoginSection(){
    $(".operatebtns").css("display","none");
    $(".operatebtns").fadeIn("slow");
    $(".operatebtns").css("display","block");

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
    $(".operatebtns").css("display","none")
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

