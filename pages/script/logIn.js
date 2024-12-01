// login
$('#login_btn').on('click', function () {
    var username = $('#email_Input').val();
    var password = $('#password_Input').val();
    
    if (username == "" || password == "") {
        window.alert("Preencha todos os campos!")
    }
    else {
        $.ajax({
            url: "/core/login.php",
            type: "POST",
            data: {
                username: username,
                password: password
            },
            cache: false,
            success: function (dataResult) {
                if (dataResult.statusCode == 200) {
                    location.href = "/pages/pedido.php";
                }
                else if (dataResult.statusCode == 201) {
                    window.alert("Email ou Senha incorretos")
                }

            }
        });
    }

});