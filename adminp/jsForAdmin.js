$(document).ready(function () {
    $('#login').click(function () {
        var a = document.getElementsByName("username")[0].value;
        var b = document.getElementsByName("password")[0].value;

        $.ajax({
            type: "GET",
            url: "login.php",
            data: {
                u: a,
                p: b,
            },
            success: function (data) {
                if (data == "Success") {
                    location.href = "http://localhost/coding_class/login2/dashboard/";
                } else {
                    alert(data);
                }
            }
        });
    });
});