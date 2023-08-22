$(document).ready(function () {
    $('#login').click(function () {
        var a = document.getElementById("username").value;
        var b = document.getElementById("password").value;

        $.ajax({
            type: "GET",
            url: "login.php",
            data: {
                u: a,
                p: b,
            },
            success: function (data) {
                if (data == "Success") {
                    location.href = "http://localhost/project/dashboard/";
                } else {
                    alert(data);
                }
            }
        });
    });
});




// forgot password overdiv closing (ADMIN LOGIN PAGE)
function closeforgot(){
    document.getElementsByClassName("forgot")[0].style.display = "none";
}
function showForgotDiv(){
    document.getElementsByClassName("forgot")[0].style.display = "flex";
}