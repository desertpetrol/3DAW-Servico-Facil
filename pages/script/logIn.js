// login
$('#login_btn').on('click', function () {
    var email = $('#email_input').val();
    var password = $('#password_input').val();
    
    if (email == "" || password == "") {
        window.alert("Preencha todos os campos!")
    }
    else {
        $.ajax({
            url: "/core/login.php",
            type: "GET",
            data: {
                email: email,
                password: password
            },
            cache: false,
            dataType: "json",
            success: function (dataResult) {
                if (dataResult.statusCode === 200) {
                    location.href = "/pages/pedido.php";
                } else if (dataResult.statusCode === 401) {
                    window.alert("Email ou Senha incorretos");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error occurred: " + status + " - " + error);
                window.alert("Ocorreu um erro inesperado. Por favor, tente novamente.");
            }
        });
    }

});