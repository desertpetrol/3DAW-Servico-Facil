$(document).ready(function () {
    // register
    $('#signin_btn').on('click', function () {
        var email = $('#email_input').val();
        var password = $('#password_input').val();
        var confirm_password = $('#password_confirm_input').val();

        if (!email) {
            window.alert('Preencha o email!');
        }
        else if (!password) {
            window.alert('Preencha a senha!');
        }
        else if (password != confirm_password) {
            window.alert('senhas são diferentes!');
        }
        else {

            $.ajax({
                url: "login_reg_insert.php",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                cache: false,
                success: function (dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {;
                        $('#register_form').val('');
                    }
                    else if (dataResult.statusCode == 201) {
                        window.alert('Email ja cadastrado!');

                    }
                    else if (dataResult.statusCode == 204) {
                        window.alert('Peencha todos os campos!');

                    }

                }
            });
        }
    });
});
