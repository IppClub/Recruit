$(document).ready(function(){
    var ie = !-[1,];
    if (ie) {
        window.location.href = "../view/loser.html";
    }
    $(".header").css("display","none")
    .fadeIn("slow")
    .css("display","inline");

    $(".operatebtns").fadeOut().css("display","none");

    $("#bgm").css("display","none")
    .fadeIn("slow")
    .css("display","inline");
});