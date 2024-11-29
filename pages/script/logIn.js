// login
$('#butlogin').on('click', function () {
    $("#error1").hide();
    var v = document.getElementById("error1");
    var username = $('#email_Input').val();
    var password = $('#password_Input').val();
    
    if (username == "" && password == "") {
        window.alert("Preencha todos os campos!")
    }
    else {
        $.ajax({
            url: "login_reg_insert.php",
            type: "POST",
            data: {
                type: 2,
                username: username,
                password: password
            },
            cache: false,
            success: function (dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    location.href = "home.php";
                }
                else if (dataResult.statusCode == 201) {
                    $("#error1").show();
                    $('#error_show12').html('Invalid EmailId or Password !');
                    v.className += " alert-danger";
                }

            }
        });
    }

});