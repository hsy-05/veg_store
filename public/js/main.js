
$(document).ready(function () {
    $("#adminNewBtn").click(function () {
        $("#adminNewsTb").show("slow");
        $("#adminPtoductTb").hide("slow");
        document.getElementById("adminNewBtn").style.background= "#99e5d2";
        document.getElementById("adminNewBtn").style.color= "#000000";
        document.getElementById("adminProductBtn").style.color= "#ffffff";
        document.getElementById('adminProductBtn').style.backgroundColor = "black";
    });
});

$(document).ready(function () {
    $("#adminProductBtn").click(function () {
        $("#adminPtoductTb").show("slow");
        $("#adminNewsTb").hide("slow");
        document.getElementById("adminProductBtn").style.background= "#99e5d2";
        document.getElementById("adminProductBtn").style.color= "#000000";
        document.getElementById("adminNewBtn").style.color= "#ffffff";
        document.getElementById('adminNewBtn').style.backgroundColor = "black";
    });
});



$(document).ready(function () {
    $("div.alertMsg").each(function () {
        if ($(this).not(':visible'))
        $(this).show(1000).delay(3000).fadeOut(1000);
    })

});
